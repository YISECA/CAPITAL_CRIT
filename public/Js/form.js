jQuery(document).ready(function($) {


 $('#fecha_nacimiento').datepicker({
  minDate: new Date(1900,1-1,1), maxDate: '1999-08-06',
  dateFormat: 'yy-mm-dd',
  yearRange: "-100:-18",
  changeMonth: true,
  changeYear: true,
});


 $('#fecha_ultimo_contrato').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});



 $('#fecha_penultimo_contrato').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});



 $('#fecha_fin_penultimo_contrato').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});



 $('#fecha_antepenultimo_contrato').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});



 $('#fecha_fin_antepenultimo_contrato').datepicker({dateFormat: 'yy-mm-dd'});



 for(var i=2;i<=2;i++){$('#page'+i).hide();}



 $('body').delegate('#adelante','click',function(){var id= $(this).data('id');$("#page"+id).hide();$("#page"+(id+1)).show();$('#form_gen')});	

 $('body').delegate('#atras','click',function(){var id= $(this).data('id');$("#page"+id).hide();$("#page"+(id-1)).show();});

  $('#categoria').on('change', function(e){

    var id_modalidad = $('#modalidad').val();    
    var id_categoria = $(this).val();    
    var URL = $('#registro').data('url');

    var formData = new FormData();
    formData.append('id_modalidad', id_modalidad);
    formData.append('id_categoria', id_categoria);

         $.ajax({
            url: URL+'/registro',
            data: formData,
            type: 'POST',
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, // NEEDED, DON'T OMIT THIS
            success: function (response) {
                if(response <= 0){
                  alert('Ya no hay cupos en esta categoría, intenta en otra');
                  $('input[type=submit]').hide();
                  return;
                }
                 if(response > 0){
                 
                  $('input[type=submit]').show();
                  return;
                }
            },
            error: function () {
                alert("error");
            }
        });

  });


/*

    $.ajax({url:'listar_pais',type:  'post',success:  function (response) {$('#id_pais').html(response); }});

    $.ajax({url:'listar_ciudad',type:  'post',success:  function (response) {$('#id_ciudad').html(response); }});

    $.ajax({url:'listar_localidad',type:  'post',success:  function (response) {$('#id_localidad').html(response); }});

    $.ajax({url:'listar_departamento',type:  'post',success:  function (response) {$('#id_departamento').html(response); }});

    */





  });