@extends('master')                              

@section('content')    

<style type="text/css">
  
  table, td, tr {
    background-color: rgba(0, 0, 255, 0) !important;
  }

section#page1 {
    background-color: rgba(8, 8, 8, 0.62) !important;
}
</style>     

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">

<section id="page1">

    <div class="panel panel-default">

        <!--<div class="panel-heading">Inicio</div>-->

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <!--<div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1">ECO-TRAVESÍA POR LOS CERROS ORIENTALES</div>-->

                    </div>
<br>
                    <!--<div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 

                                       <div class="wrap"><img src="public/Img/bici.jpg"  height="400">

                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/bici1.jpg"  height="400">

                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/bici2.jpg"  height="400">

                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>-->

                    <script src="public/Js/jquery.sldr.js"></script>

                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                        <h1 align="center" style="font-family:cursive; color: #58D3F7">ECOTRAVESÍA CERROS ORIENTALES</h1>
                
                        <br>
                        <h3 style="font-family:cursive; color: #58D3F7" >Descripción del recorrido </h3>

                        <p align="justify"><font size="3" color="#FBEFEF" face="Calibri" style="line-height: 25px;">Es una Ecotravesía de ciclomontañismo recreativo (mediana y alta Complejidad) que se realizará en los cerros orientales para promover la cultura del uso de la bicicleta y a la vez contemplar y disfrutar de la “Reserva Forestal Protectora de los Bosques Orientales de Bogotá”.</strong></font></p>

                   
                      <h3 style="font-family:cursive; color: #58D3F7">Descripción del evento</h3>
                      <br>
                        <font size="4"><center><table width="900">

                            <col width="281">

                                <col width="282">

                                    <tr valign="top">

                                        <td width="281"  style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color:#FBEFEF; font-size: 15px; font-family: calibri"><strong>PUNTO DE ENCUENTRO Y DE LLEGADA</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">Parque Nacional</p>

                                        </td>

                                    </tr>
                              
                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>FECHA</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">Domingo 06 de Agosto de 2017</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>HORA DE ENCUENTRO</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">7:00 a.m</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>PARTICIPANTES</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">1000 Personas</p>

                                        </td>

                                    </tr>

                                    <tr valign="top">

                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>RECORRIDO</strong></p>

                                        </td>

                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">aproximadamente 39 Kilómetros</p>

                                        </td>

                                    </tr>



                                    <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><font style="line-height: 240px"><strong>REQUISITOS</strong></font></p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 16px">
                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Contar con bicicleta todo terreno y elementos de protección (casco)</li><br>
                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Tener cobertura vigente en el sistema de salud</li><br>
                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Mayores de 18 años cumplidos a la fecha de la Ecotravesía</li><br>

                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Vestir la camiseta oficial del evento durante el recorrido. (obligatorio)</li><br>
                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Nadie podrá participar a nombre de otra persona.</li><br>
                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Consulte a su médico antes de su participación en la Ecotravesía</li>
                                            </p>
                                        </td>

                                    </tr>             



                                     <tr valign="top">

                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><font style="line-height: 130px"><strong>RECOMENDACIONES</strong></font></p>

                                        </td>

                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm; background-color: #0e0d0d80">

                                            <p style="color: #FBEFEF; font-size: 16px">
                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">La persona deberán  haber desayunado antes de participar en el evento.</li><br>
                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Hacer uso de protección solar y elementos de seguridad (casco)</li><br>
                                               <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Atender las recomendaciones impartidas por la organización, operadores logísticos, seguridad y equipo de salud del evento.</li><br>
                                            </p>
                                        </td>

                                    </tr>                                         

                        </table></center></font>

                        <h3 style="font-family:cursive; color: #58D3F7;font-size: 25px" >Información Importante</h3>

                        <ul class="ul_inicio">

                            <font size="3" color="#FBEFEF" style="text-align: justify-all;">
                               
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">La entrega de los kits se realizará el mismo día (6 de Agosto de 2017) en el Parque Nacional  a partir de las 6:00 am</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se ha previsto adquirir una  amplia cantidad de tallas de camisetas, sin embargo, no se garantiza la entrega de la talla correspondiente, puesto a que estas serán entregadas de acuerdo al orden de llegada.</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">La Ecotravesía es una actividad de carácter recreativo en el cual no se entregará premiación de competencia ni dinero en efectivo.</li>

                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Cada participante debe contar con cobertura vigente en el servicio de salud.</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se dispondrá de tres puntos de hidratación, ubicados en la salida, en medio y a la llegada del recorrido.</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">A los participantes inscritos que terminen todo el recorrido estipulado se les hará entrega de una medalla de participación.</li>
                               <li style="color: #FBEFEF; font-size: 18px; font-family: calibri"><strong>Para mayor información de la Eco Travesía de los Cerros orientales acercarse a las Instalaciones del IDRD Calle 63 No 59a-06 Área de Recreación, o llamar al teléfono 6605400 Ext 2007 y 3002.</strong></li>
        
                            </font>



                   <h3 style="font-family:cursive; color: #58D3F7;font-size: 25px" >Políticas del Evento</h3>

                        <ul class="ul_inicio">

                            <font size="3" color="#FBEFEF" style="text-align: justify-all;">
                               
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Presentarse con bicicleta todo terreno en excelente estado mecánico, 40 minutos antes de la hora de inicio del evento</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Portar los elementos básicos de mecánica para el despinche o mantenimiento de su bicicleta (La organización contará con mecánicos dispuestos para su colaboración).</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">El tiempo estipulado en todos los casos para la realización de la Ecotravesía de los cerros orientales será desde las 7:00 a.m hasta las 2:00 p.m, después de éste horario la responsabilidad es exclusiva del participante.</li>

                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">No realizar maniobras peligrosas que puedan afectar su integridad o la de los demás</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Transitar únicamente por el recorrido delimitado para la Ecotravesía.</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">En caso de abandono durante la Ecotravesía, informar al equipo logístico.</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Respetar y cuidar la naturaleza.</li>
                               <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">No arrojar basura durante el trayecto..</li>
        
                            </font>
                            <br><br>

                        </ul> <a class="btn btn-primary btn-block" href="registro">Registrarse</a> </div>

                </div>

            </div>

        </div>

</section>

@stop