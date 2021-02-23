 

 
 function format(input)
{
var num = input.value.replace(/\./g,'');
if(!isNaN(num)){
num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
num = num.split('').reverse().join('').replace(/^[\.]/,'');
input.value = num;
}
 
else{ alert('Solo se permiten numeros');
input.value = input.value.replace(/[^\d\.]*/g,'');
}
}
 
 $(function() {
    
    
 

 SelectTipo("#estado");
 SelectTipo2("#estado2");
 $("#form_observacion2").hide();
 $(".bt").hide();
 $('.campo').hide();
 })

const SelectTipo = (id) => {
   $('#estado').change(function() {
        var valor = $(this).val();
        if (valor == 1) {
          
            $("#form_observacion").show();
            $("#form_observacion2").hide();
            $(".bt2").show();
            $(".bt").hide();
            $("#estado").val(1);
           

        } else {

            $("#form_observacion").hide();
            $("#form_observacion2").show();
            $(".bt").show();
            $(".bt2").hide();
             $("#estado2").val(2);
        }
    });
}

const SelectTipo2 = (id) => {
   $('#estado2').change(function() {
        var valor = $(this).val();
        if (valor == 1) {
          
              $("#form_observacion").show();
            $("#form_observacion2").hide();
             $(".bt2").show();
            $(".bt").hide();
            $("#estado").val(1);
            
            
        } else {

            $("#form_observacion").hide();
            $("#form_observacion2").show();
            $(".bt").show();
            $(".bt2").hide();
            $("#estado2").val(2);
        }
    });
}


$(function() {

    

    $('#indicador_id').select2();
    modalShow();
    
    modalShowAdd();
    modalShowActividad();
    modalShowObservacion();
    $('#agregar').click(function(e) {
        e.preventDefault();
        saveAdd();
    });

    $('#add-actividad').click(function(e) {
        e.preventDefault();
        saveActividad();
    });

    $('#add-observacion').click(function(e) {
        e.preventDefault();
        saveObservaciones();
    });

      $('#add-observacion2').click(function(e) {
        e.preventDefault();
        saveObservaciones2();
    });







});


const modalShow = () => {
     
     
    $('#modalShow').on('show.bs.modal', function(event) {

        
        let button = $(event.relatedTarget)
        let url = button.data('href')
        
        let modal = $(this)

        $.ajax({
            type: 'GET',
            url: url,
            success: function(data) {
                modal.find('.modal-body').html(data);
                tooltipsMessages();
        var temporizador=setInterval(function(){
            quitas_asistente()

        },20000);
            }
            
        });
        
    });

    $('#modalShow').on('hide.bs.modal', function(e) {
        $(this).find('.modal-body').html("");
    });

    

}

const modalShowAdd = () => {
    $('#modalIndicadores').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id');
        let modal = $(this);
        modal.find('.modal-body #solicitud_id').val(id);

    });

}

const modalShowActividad = () => {
    $('#modalActividades').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id');
        let modal = $(this);
        modal.find('.modal-body #proyecto_id').val(id);

    });

}


const modalShowObservacion = () => {
    $('#modalObservaciones').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id');
        let modal = $(this);
        modal.find('.modal-body #id_solicitud').val(id);
        $('#id_solicitud2').val(id);
    });

}


const updateRow = (status, id) => {

    $('#row-status-' + id).html("");

    if (status == 'Aprobado') {
        $('#row-status-' + id).html(status);
        $('#btn_deny-' + id).attr("disabled", true);
        $('#btn_show_send-' + id).show();
    }

}
const quitas_asistente = ()=> {



   
}

	


const saveActividad = () => {
    let form = $('#form_actividad');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function(data) {
            if (data.success) {
                form[0].reset();
                success(data.success);
                updateTable();
            } else {
                warning(data.warning);

            }

        },
        error: function(data) {

            if (data.status === 422) {
                let errors = $.parseJSON(data.responseText);
                addErrorMessage(errors);
            }
        }
    });

}

const saveObservaciones = () => {
    let form = $('#form_observacion');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function(data) {
            if (data.success) {
                form[0].reset();
                success(data.success);
                updateTable();
                $('#modalObservaciones').modal('hide')
            } else {
                warning(data.warning);

            }

        },
        error: function(data) {

            if (data.status === 422) {
                let errors = $.parseJSON(data.responseText);
                addErrorMessage(errors);
            }
        }
    });

}


const saveObservaciones2 = () => {

    
    let form2 = $('#form_observacion2');
    $.ajax({
        data: form2.serialize(),
        url: form2.attr('action'),
        type: form2.attr('method'),
        dataType: 'json',
        success: function(data) {
            if (data.success) {
                form2[0].reset();
                success(data.success);
                updateTable();
                $('#modalObservaciones').modal('hide')

            } else {
                warning(data.warning);

            }

        },
        error: function(data) {

            if (data.status === 422) {
                let errors = $.parseJSON(data.responseText);
                addErrorMessage(errors);
            }
        }
    });

}



const saveAdd = () => {
    let form = $('#form_indicadores');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function(data) {
            if (data.success) {
                form[0].reset();
                success(data.success);
                updateTable();
            } else {
                warning(data.warning);

            }

        },
        error: function(data) {

            if (data.status === 422) {
                let errors = $.parseJSON(data.responseText);
                addErrorMessage(errors);
            }
        }
    });

}