

@extends('master')                              
@section('content') 

<div class="content" id="registro" class="row" data-url="registro"></div>
<style type="text/css">
   table, td, tr {
   background-color: rgba(0, 0, 255, 0) !important;
   }
   section#page1 {
   background-color: rgba(8, 8, 8, 0.62) !important;
   }
</style>
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
   <section id="page1">
   <div class="panel panel-default">
   <div class="panel-heading">Información Personal</div>
   <div class="panel-body">
   <div class="col-sm-1"></div>
   <div class="col-md-5">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput" style="color: #FBF8EF">Todos los campos con<span style="font-size: 20px;text-transform: capitalize;color:#00ade6">&nbsp;*&nbsp;</span>son obligatorios</label>
   </div>
   <br>
   <!-- documento y tipo de documento-->
   <div class="row">
      <br>
      <div class="col-sm-1"></div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Documento de identidad </label>
         <input title="Se necesita una cedula" required type="number" class="form-control" id="cedula" name="cedula">
      </div>
      <div class="col-md-5"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2"style="color: #FBF8EF" ><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Tipo de Documento </label>
      <select name="tipo_documento" id="tipo_documento" class="form-control" >
            <option value="">Seleccione</option>
            <option value="1">Cédula de Ciudadania</option>
            <option value="2">Cédula de Extranjeria</option>
         </select>
         <br>
      </div>
   </div>
   <!-- nombres y apellidos-->
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Nombres </label>
         <input required type="text" class="form-control" id="nombres" name="nombres" onkeyup="javascript:this.value=this.value.toUpperCase();" >
      </div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF">Apellidos</label>
         <input type="text" class="form-control" id="apellidos" name="apellidos"  onkeyup="javascript:this.value=this.value.toUpperCase();"><br>
      </div>
   </div>
   
   <!-- fecha de nacimiento y email-->
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Fecha Nacimiento </label>
         <input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
      </div>
      <div class="col-md-5">
        <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Email </label>
        <input required type="mail" class="form-control" id="mail" name="mail" ><br>
      </div>
   </div>
   
   <!--  celular y eps-->
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Celular</label>
         <input required type="number" class="form-control" id="celular" name="celular">
      </div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Eps</label>
         <input required type="text" class="form-control" id="eps" name="eps" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
      </div>
   </div>
   
  
   <!-- modalidad y categoría-->
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Modalidad</label>
          <select name="modalidad" id="modalidad" class="form-control" >
               <option value="">Seleccione</option>
                  @foreach ($modalidades as $modalidad)
                  <option value="{{ $modalidad->id_modalidad }}">{{ $modalidad->modalidad}}</option>
                  @endforeach
          </select>
      </div>
      <div class="col-md-5">
         <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Categoría</label>
         <select name="categoria" id="categoria" class="form-control" >
            <option value="">Seleccione</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
         </select><br>
      </div>
   </div>
   
   <!-- nombre y número de contacto de emergencia-->
   <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-5">
          <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Nombre de contacto de emergencia</label>
          <input required type="text" class="form-control" id="nombre_contacto" name="nombre_contacto" >
      </div>
      <div class="col-md-5">
        <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2" style="color: #FBF8EF"><span style="font-size: 20px;text-transform: capitalize;color:#00ade6">*&nbsp;</span>Teléfono de contacto de emergencia</label>
        <input required type="text" class="form-control" id="telefono_contacto" name="telefono_contacto"><br>
        </div>
   </div>
   
   </fieldset>
   <div class="freebirdFormviewerViewFormContent ">
   <div class="freebirdFormviewerViewHeaderTitleRow">
      <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>
      <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>
   </div>
   <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading">
      <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div>
      <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>
      <div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881">
         <div class="freebirdFormviewerViewItemsItemItemheader">
            <div class="freebirdFormviewerViewItemsItemItemTitleContainer">
               <div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881" style="color: #58D3F7;font-size: 20px; font-family: calibri">CONSENTIMIENTO INFORMADO <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true" style="font-size: 20px;text-transform: capitalize;color:#00ade6">*</span><br><br><br><br><br><br><br><br><br><br></div>
               <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto" align="justify" style="color: #FBF8EF;font-size: 16px; font-family: calibri">Manifiesto que he decidido participar voluntariamente en la actividad Capital Crit “LA CORONA DE LA CALLE”, mediante el uso de una bicicleta, haciéndolo bajo mi entera responsabilidad, manifestando que me encuentro en perfecto estado físico y de salud. Adicionalmente, DECLARO que me dieron las recomendaciones necesarias y que aceptaré cualquier decisión de la organización y del Instituto Distrital de Recreación y Deporte – IDRD, sobre mi participación. <br>
                  Asumo todos los riesgos asociados con mi recorrido, incluidos, pero no limitados, a caídas y demás accidentes, enfermedades generales, enfermedades de tipo cardíaco, por el contacto con otras personas o elementos, las condiciones climáticas incluida temperatura, lluvia y humedad, tránsito vehicular, estado de las vías, y en general cualquier tipo de riesgos que declaro conocidos y valorados por mí. Así mismo, declaro que conozco la información general. <br>
                  Manifiesto que libero a los organizadores, al Instituto Distrital de Recreación y Deporte – IDRD, Alcaldía Mayor de Bogotá, aliados, patrocinadores, representantes y sucesores, de todo reclamo o responsabilidad de cualquier tipo que surja por mi participación en el recorrido, aunque esta responsabilidad pueda presentarse por negligencia o culpa de la organización; así como de cualquier extravío, robo y/o hurto. <br>
                  Por último, autorizo a los organizadores a iniciar las acciones que consideren pertinentes, en caso de que por mi participación genere un hecho que pueda afectar los intereses del Instituto Distrital de Recreación y Deporte – IDRD. Igualmente, autorizo al IDRD para que haga uso de las fotografías, películas, videos, grabaciones y cualquier otro medio de registro de este programa para su uso legítimo, sin reclamación o compensación económica alguna.<br>
                  Acepto asistir el día y a la hora estipulada para la carrera Capital Crit “LA CORONA DE LA CALLE”. Así mismo, acepto que los cupos son limitados y por ende me comprometo a participar de este evento.
               </div>
            </div>
         </div>
         <div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class="">
            <div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto">
               <div class="freebirdFormviewerViewItemsCheckboxChoice">
                  <label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer">
                     <div class="exportLabelWrapper">
                        <input type="checkbox" required style="float: left;
                           margin: 0px;" name="acepto" id="acepto">
                        <div class="docssharedWizToggleLabeledContent">
                           <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel" style="color: #FBF8EF;font-size: 20px; font-family: calibri; line-height: 12px">&nbsp;&nbsp;Acepto</span></div>
                        </div>
                     </div>
                  </label>
               </div>
               <input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden">
            </div>
         </div>
         <div id="i.req.131124881" class="screenreaderOnly"></div>
         <div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div>
      </div>
   </div>
   <div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681">
   <div class="freebirdFormviewerViewNavigationButtonsAndProgress">
   <div class="freebirdFormviewerViewNavigationButtons">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="enviar" type="submit" value="Enviar" style="background-color:#00ade6; width: 300px;s">
   <!--</div><div class="freebirdFormviewerViewNavigationProgress"><div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar"><div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div></div><div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div></div></div><div class="freebirdFormviewerViewNavigationPasswordWarning">.</div></div>-->
</form>
<script type="text/javascript" src="public/Js/form.js" ></script>
@stop

