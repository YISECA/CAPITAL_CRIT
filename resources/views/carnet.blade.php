<!DOCTYPE html>

<html>

<head>

<style>
body{
    font-family: sans-serif;
}
img{
    width: 100%;
}
</style> 
</head>
<body>

 <img src="https://www.idrd.gov.co/sitio/idrd/sites/default/files/Cabezote%20limpio.jpg">

      <p style="font-family: times, serif; font-size:15pt; font-style:italic" align="center">{{$formulario->nombres}}&nbsp;{{$formulario->apellidos}} </p>
      <p align="center"><strong>BIENVENIDO, YA HACES PARTE DE CAPITAL CRIT “LA CORONA DE LA CALLE”  en el Festival de Verano 2017</strong></p><br>
      <p align="justify">Este documento será tu comprobante de inscripción, el cual deberás entregar impreso o descargarlo en tu celular para verificar los datos el día del evento.</p>
      Domingo  13 de Agosto de 2017
      <p>Hora: 07:00 am</p>
      <p>Lugar: Parque Recreodeportivo El Salitre</p>

      <p align="center"><strong >DETALLES DE TU INSCRIPCIÓN</strong></p>
  
     <strong>Nombre  Completo:</strong> {{$formulario->nombres}}&nbsp;{{$formulario->apellidos}}
     <br>      
     <strong>Documento:</strong> {{$formulario->cedula}}
     <br>
     <strong>Modalidad:</strong> {{$formulario->modalidades['modalidad']}}
     <br>
     <strong>Categoría:</strong> {{$formulario->categorias['categoria']}}
     <br>    
     <strong>Número de formulario:</strong> <font size="4" color="#00ade6">{{$formulario->id}}</font>
     <br><br>
      <p align="center" style="font-size: 12pt"><br>
        Para mayor información de la Capital Crit “LA CORONA DE LA CALLE”, acercarse a las Instalaciones de FIX AND BIKE: Carrera 17 # 134ª 62 B/ Cedritos, o llamar al celular 317 796 7330.
      </p>
 
  

  
    </body>

</html>
