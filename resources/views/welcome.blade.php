

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
               <h2 align="center" style="font-family:cursive; color: #58D3F7">CAPITAL CRIT “LA CORONA DE LA CALLE”</h2>
               </h1>
               <br>
               <h3 style="font-family:cursive; color: #58D3F7" >Invitación </h3>
               <p align="justify"><font size="3" color="#FBEFEF" face="Calibri" style="line-height: 25px;"> Este es un llamado a todos los ciclistas urbanos, a los que viven el día a día en sus bicis, a los que están comprometidos con el ciclismo aun sin ser profesionales, a los que sienten y viven el ciclismo urbano al límite. <br>Es una invitación a llevarse a casa con orgullo ”LA CORONA DE LA CALLE”, donde el protagonista es el ciclista y este nuevo espacio es una oportunidad para superar sus retos personales.</strong></font></p>
               <h3 style="font-family:cursive; color: #58D3F7">Descripción del evento</h3>
               <br>
               <font size="4">
                  <center>
                     <table width="900">
                        <col width="281">
                        <col width="282">
                        <tr valign="top">
                           <td width="281"  style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color:#FBEFEF; font-size: 15px; font-family: calibri"><strong>PUNTO DE ENCUENTRO Y DE LLEGADA</strong></p>
                           </td>
                           <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">Parque Recreodeportivo El Salitre.</p>
                           </td>
                        </tr>
                        <tr valign="top">
                           <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>FECHA</strong></p>
                           </td>
                           <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">Domingo 13 de agosto de 2017.</p>
                           </td>
                        </tr>
                        <tr valign="top">
                           <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>HORA DE ENCUENTRO</strong></p>
                           </td>
                           <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">7:00 a.m.</p>
                           </td>
                        </tr>
                        <tr valign="top">
                           <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>PARTICIPANTES</strong></p>
                           </td>
                           <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">410 Personas en 3 categorías</p>
                           </td>
                        </tr>
                        <tr valign="top">
                           <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><strong>RECORRIDO</strong></p>
                           </td>
                           <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri">Aproximadamente 1.2 Kilómetros por vuelta.</p>
                           </td>
                        </tr>
                        <tr valign="top">
                           <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><font style="line-height: 240px"><strong>REQUISITOS</strong></font></p>
                           </td>
                           <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 16px">
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Contar con bicicleta en óptimas condiciones y que esté dentro de las categorías estipuladas.</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Usar casco obligatoriamente.</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Tener cobertura vigente en el sistema de salud.</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Ser mayor de edad con cédula original.</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Vestir uniforme de ciclismo durante la carrera.</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Nadie podrá participar a nombre de otra persona.</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">El ingreso a la pista se hará presentando la cédula original ( no fotocopias, denuncios o contraseñas).</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Consulte a su médico previamente a la participación en la Capital Crit.</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Para bicicletas Fixed (piñón fijo):<br> 
                                 - Uso de straps o zapatos de click obligatorio.<br>
                                 - Uso de Drop Bar obligatorio.
                              </li>
                              </p>
                           </td>
                        </tr>
                        <tr valign="top">
                           <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.15cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 15px; font-family: calibri"><font style="line-height: 130px"><strong>RECOMENDACIONES</strong></font></p>
                           </td>
                           <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm; background-color: #0e0d0d80">
                              <p style="color: #FBEFEF; font-size: 16px">
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Alimentarse de manera balanceada previamente a la carrera.</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Usar protección solar y elementos de seguridad (casco, gafas de sol y licras deportivas).</li>
                              <br>
                              <li style="color: #FBEFEF; font-size: 15px; font-family: calibri">Atender las recomendaciones impartidas por la organización, operadores logísticos, seguridad y equipo de salud del evento.</li>
                              <br>
                              </p>
                           </td>
                        </tr>
                     </table>
                  </center>
               </font>
               <h3 style="font-family:cursive; color: #58D3F7;font-size: 25px" >Información Importante</h3>
               <ul class="ul_inicio">
               <font size="3" color="#FBEFEF" style="text-align: justify-all;">
                  <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">La entrega de los kits se hará el mismo día (13 de agosto de 2016) en el PRD –  Parque Recreodeportivo El Salitre a partir de las 8:00 a.m.</li><br>
                  <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se llamará 3 veces a los participantes antes de las clasificatorias. En caso de no atender al llamado, quedará descalificado automáticamente, sin opción de ingresar a otro grupo y en su lugar se tendrán en cuenta a las personas que estén en la lista de espera.</li><br>
                  <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">En los días previos a la competencia, se publicarán los grupos y los horarios de las categorías con nombre propio y cédula de cada participante.</li><br>
                  <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Cada participante deberá contar con cédula original y carné vigente del sistema de salud para el ingreso a la pista en las rondas clasificatorias y finales.</li><br>
                  <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se dispondrán puntos de hidratación para los participantes.</li><br>
                  <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">La carrera contará con la participación de las categorías élites, pero tendrán una premiación con un reconocimiento a parte de las demás categorías.</li><br>
                  <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Para mayor información de la Capital Crit “LA CORONA DE LA CALLE”, acercarse a las Instalaciones de FIX AND BIKE: Carrera 17 # 134ª 62 B/ Cedritos, o llamar al celular 317 796 7330.</li><br>
               </font>
               <h3 style="font-family:cursive; color: #58D3F7;font-size: 25px" >Políticas del Evento</h3>
               <ul class="ul_inicio">
                  <font size="3" color="#FBEFEF" style="text-align: justify-all;">
                     <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Presentarse con la bicicleta en excelente estado 30 minutos de la hora asignada, lista para competir  y sin ningún ajuste pendiente.</li><br>
                     <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Portar los elementos básicos de mecánica para el despinche o mantenimiento de la bicicleta (la organización contará con mecánicos dispuestos para su colaboración en ajustes mínimos que se requieran).</li><br>
                     <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">El tiempo estipulado en todos los casos para la participación en la Capital Crit “LA CORONA DE LA CALLE”, será desde las 7:00 a.m. hasta las 8:00 p.m., después de este horario la responsabilidad es exclusiva del participante.</li><br>
                     <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">No realizar maniobras peligrosas que puedan afectar su integridad o la de los demás competidores, de ser así, puede ser descalificado de la competencia.</li><br>
                     <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Para la categoría Fixed (piñón fijo) está prohibido hacer skids (frenado repentino).</li><br>
                     <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Transitar únicamente por el recorrido delimitado para la Capital Crit “LA CORONA DE LA CALLE”.</li><br>
                     <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">En caso de abandono durante la Capital Crit “LA CORONA DE LA CALLE”, informar al equipo logístico.</li><br>
                     <li style="color: #FBEFEF; font-size: 16px; font-family: calibri">Se prohíbe el consumo de bebidas alcohólicas y/o alucinógenas antes y durante la competencia, ni dentro del predio (PRD – Parque Recreodeportivo El Salitre). En caso de no atender a esta política, los participantes serán descalificados definitivamente. </li><br>
                  </font>
                  <br><br>
               </ul>
               <a class="btn btn-primary btn-block" href="registro">Registrarse</a> 
            </div>
         </div>
      </div>
   </div>
</section>
@stop

