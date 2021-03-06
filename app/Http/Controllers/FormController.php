<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use Session;
use App\Form;
use Idrd\Usuarios\Repo\Acceso;
use App\Modalidad;
use App\Categoria;
use App\Cupos;
use Mail;

class FormController extends BaseController


{
    var $url;

    public function index()
    {

      $modalidad = Modalidad::all();
      return view('form',["modalidades"=>$modalidad]);
    }

    private function cifrar($M)
    {   
      $C="";
      $k = 18; 
      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);
      return $C;
    }

    private function decifrar($C)
    {   
      $M="";
      $k = 18;
      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);
      return $M;
    }

    public function listar_datos()
    {
    $acceso = Form::whereYear('created_at', '=', date('Y'))->get(); 

    $tabla='<strong><table id="lista" style="color: #FFFFFF">

        <thead>
           <tr>
             <th style="text-transform: capitalize;">Código de Inscripción</th>
             <th style="text-transform: capitalize;">cedula</th>
             <th style="text-transform: capitalize;">tipo_documento</th>
             <th style="text-transform: capitalize;">Nombres</th>
             <th style="text-transform: capitalize;">Apellidos</th>
             <th style="text-transform: capitalize;">fecha_nacimiento</th>
             <th style="text-transform: capitalize;">Correo Electrónico</th>
             <th style="text-transform: capitalize;">Celular</th>
             <th style="text-transform: capitalize;">Eps</th>
             <th style="text-transform: capitalize;">Modalidad</th> 
             <th style="text-transform: capitalize;">Categoría</th>   
             <th style="text-transform: capitalize;">Nombre contacto emergencia</th>   
             <th style="text-transform: capitalize;">Teléfono de contacto de emergencia</th>              
            </tr>
        </thead>
        <tbody id="tabla"></strong>';

      foreach ($acceso as $key => $value) 
      {

       $tabla.='<tr style="color: #000000"><td>'.$value->id.'</td>';
       $tabla.='<td>'.$value->cedula.'</td>';
       $tabla.='<td>'.$value->tipo_documento.'</td>';
       $tabla.='<td>'.$value->nombres.'</td>';
       $tabla.='<td>'.$value->apellidos.'</td>';
       $tabla.='<td>'.$value->fecha_nacimiento.'</td>';
       $tabla.='<td>'.$value->mail.'</td>';
       $tabla.='<td>'.$value->celular.'</td>';
       $tabla.='<td>'.$value->eps.'</td>';
       $tabla.='<td>'.$value->modalidades['modalidad'].'</td>';
       $tabla.='<td>'.$value->categorias['categoria'].'</td>';
       $tabla.='<td>'.$value->nombre_contacto.'</td>';
       $tabla.='<td>'.$value->telefono_contacto.'</td></tr>';

      }

      $tabla.='</tbody></table>';
      echo $tabla;
    }

      public function logear(Request $request)

      {

      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();
      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }

      session_start() ;
      
      $_SESSION['id_usuario'] = json_encode($acceso);
      return view('admin'); exit(); 
      }

    public function insertar(Request $request)

    {

     $post = $request->input();
     $usuario = Form::where('cedula', $request->input('cedula'))->first(); 
     if (!empty($usuario)) { return view('error',['error' => 'Este usuario ya fue registrado!'] ); exit(); 
    }
     $formulario = new Form([]);

      //envio de correo

     if($this->inscritos()<=800)

     {

        $formulario = $this->store($formulario, $request);

        //$this->store($formulario, $request->input());
        
        Mail::send('email', ['user' => $request->input('mail'),'formulario' => $formulario], function ($m) use ($request) 
        {
            $m->from('no-reply@idrd.gov.co', 'Registro Exitoso a CAPITAL CRIT “LA CORONA DE LA CALLE” - Festival de Verano 2017 ');
            $m->to($request->input('mail'), $request->input('primer_nombre'))->subject('Registro Exitoso a CAPITAL CRIT “LA CORONA DE LA CALLE” - Festival de Verano 2017');
        });

      }else{
        return view('error', ['error' => 'Lo sentimos el limite de inscritos fue superado']);
      }
        return view('error', ['error' =>'BIENVENIDO, YA HACES PARTE DE CAPITAL CRIT “LA CORONA DE LA CALLE”  en el Festival de Verano 2017, verifica los datos registrados en tu correo electrónico o descarga tu comprobante de inscripción en el menú "Descargar inscripción" que se encuentra en la parte superior.']);
    }

 // conteo de la tabla

    private function inscritos()
    {

      $cant = Form::count('id');
      return $cant+1;
    }

    private function store($formulario, $input)

    {
        $formulario['cedula'] = $input['cedula'];
        $formulario['tipo_documento'] = $input['tipo_documento'];
        $formulario['nombres'] = $input['nombres'];
        $formulario['apellidos'] = $input['apellidos'];
        $formulario['fecha_nacimiento'] = $input['fecha_nacimiento'];
        $formulario['mail'] = $input['mail'];
        $formulario['celular'] = $input['celular'];
        $formulario['eps'] = $input['eps'];
        $formulario['modalidad'] = $input['modalidad'];
        $formulario['categoria'] = $input['categoria'];
        $formulario['nombre_contacto'] = $input['nombre_contacto'];
        $formulario['telefono_contacto'] = $input['telefono_contacto'];
        $formulario->save();
        return $formulario;        
    }


    public function procesar(Request $request)
    {

      $id_modalidad = $request['id_modalidad'];
      $id_categoria = $request['id_categoria'];
     

      $cupo = Cupos::where(['id_modalidad' => $id_modalidad , 'id_categoria' => $id_categoria])->first();

      $actual = Form::where(['modalidad' => $id_modalidad , 'categoria' => $id_categoria])->count();

      return $cupo['cupos']-$actual;

     
    }

}

