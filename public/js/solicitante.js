
    

let municipio = 0;

       
$(function() {
     
    $('.departamento').change(function(e) {
        clearSelectMunicipalities();
        changeMunicipalities(this.value);
    });

      $('.departamento2').change(function(e) {
        clearSelectMunicipalities2();
        changeMunicipalities2(this.value);
    });

    $('#guardar').click(function(e) {
        e.preventDefault();
        save();
        
    });

    $('#guardar2').click(function(e) {
        e.preventDefault();
        save2();
    });

    $('#actualizar').click(function(e) {
        e.preventDefault();
        update();
    });

     $('#actualizar2').click(function(e) {
        e.preventDefault();
        update2();
    });

     $('#natural').click(function(e) {
        e.preventDefault();
        $("#id_table").show();
        $("#id_table2").hide();
        $("#natural").hide();
        $("#juridico").show();

    });

      $('#juridico').click(function(e) {
        e.preventDefault();
        $("#id_table").hide();
        $("#id_table2").show();
        $("#juridico").hide();
        $("#natural").show();

    });


    


    //Initialize Select2 Elements
   

    $("#natural").hide();
    $("#id_table2").hide();

    $("#formulario2").hide();
    $("#form2").hide();
    $("#persona_id").val(1);
    $('.select2').select2();

    showEdit();

    SelectTipo("#persona_id");
    SelectTipo2("#persona_id2");
    SelectTipo3("#persona_id3");
    SelectTipo4("#persona_id4");

});


const clearSelectMunicipalities = () => {
    $('.municipio').find('option:not(:first)').remove();
}

const clearSelectMunicipalities2 = () => {
    $('.municipio2').find('option:not(:first)').remove();
}
const SelectTipo = (id) => {
   $('#persona_id').change(function() {
        var valor = $(this).val();
        if (valor == 1) {
          
            $("#formulario2").hide();
            $("#formulario1").show();
            $("#form2").hide();
            $("#form1").show();
            
            $("#nit_cc").text("NIT");
            $("#nit_cc2").placeholder("NIT");

       $("#persona_id").val(1);
            
        } else {
            $("#formulario1").hide();
            $("#formulario2").show();
             $("#form1").hide();
            $("#form2").show();
            
            $("#nit_cc").text("CC");
            $("#nit_cc2").text("CC");

         $("#persona_id2").val(2);
        }
    });
}

const SelectTipo2 = (id) => {
    $('#persona_id2').change(function() {
        var valor = $(this).val();
        if (valor == 1) {
          
            $("#formulario2").hide();
             $("#persona_id").val(1);
            $("#formulario1").show();
            
            $("#nit_cc").text("NIT");
            $("#nit_cc2").placeholder("NIT");
           
        } else {
            
            $("#formulario1").hide();
            $("#formulario2").show();
            
            $("#nit_cc").text("CC");
            $("#nit_cc2").text("CC");

            $("#persona_id2").val(2);
        }
    });
}


const changeMunicipalities = (id) => {
    if (!id) {
        warning('SELECCIONE UN DEPARTAMENTO');
    } else {
        $.ajax({
            type: 'GET',
            url: './change/municipalities/' + id,
            success: function(data) {
                addMunicipalities(data);
            }
        });
    }
}

const changeMunicipalities2 = (id) => {
    if (!id) {
        warning('SELECCIONE UN DEPARTAMENTO');
    } else {
        $.ajax({
            type: 'GET',
            url: './change/municipalities/' + id,
            success: function(data) {
                addMunicipalities2(data);
            }
        });
    }
}

const addMunicipalities = (data) => {

    for (let i = 0; i < data.length; i++) {

        $(".municipio").append('<option value="' + data[i].id + '">' + data[i].nombre_municipio + '</option>');
        $(".municipio").val(data[i].id);

    }

    if (municipio != 0) {
        $('.municipio').val(municipio);
    }

    if (municipio == 0) {
        //alert("entre"); Arreglar
        $(".municipio").val("");
    }

}

const addMunicipalities2 = (data) => {

    for (let i = 0; i < data.length; i++) {

        $(".municipio2").append('<option value="' + data[i].id + '">' + data[i].nombre_municipio + '</option>');
        $(".municipio2").val(data[i].id);

    }

    if (municipio != 0) {
        $('.municipio2').val(municipio2);
    }

    if (municipio == 0) {
        //alert("entre"); Arreglar
        $(".municipio2").val("");
    }

}

const save = () => {
    let form = $('#formulario1');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function(data) {

            if (data.success) {

                success(data.success);
                $('#formulario1')[0].reset();
                $("#modalCreate").modal("hide");
                form[0].reset();
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


////////////guardar dos ////////////

const save2 = () => {
   
    let form = $('#formulario2');
    $.ajax({
        data: form.serialize(),
         url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function(data) {
            if (data.success) {

                success(data.success);
                $('#formulario2')[0].reset();
                $("#modalCreate").modal("hide");
                form[0].reset();
                updateTable2();
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



const showEdit = () => {
    
    $('#modalCreate2').on('show.bs.modal', function(event) {
        
        let button = $(event.relatedTarget)
        let id = button.data('id');
        let id_departamento = button.data('id_departamento');
        let id_departamento2 = button.data('id_departamento2');
        let persona_id = button.data('persona_id');
        if(persona_id==1){
            $("#form2").hide();
            $("#form1").show();
            $("#persona_id3").val(1);
        }else{
            $("#form1").hide();
            $("#form2").show();
            $("#persona_id4").val(2);
        }
        let proponente_id = button.data('proponente_id');
        let nid = button.data('nid');
        let nombre = button.data('nombre');
        let apellido = button.data('apellido');
        let razon_social = button.data('razon_social');
        let email = button.data('email');
        let direccion = button.data('direccion');
        let celular = button.data('celular');
        let representante_legal = button.data('representante_legal');
        let direccion_r = button.data('direccion_r');
        let celular_r = button.data('celular_r');
        let correo_r = button.data('correo_r');
        municipio = button.data('municipio_id');
        municipio2 = button.data('municipio_id_r');
        
        changeMunicipalities(id_departamento);
        changeMunicipalities2(id_departamento2);
        let modal = $(this);

        modal.find('.modal-body #id_row').val(id);
        modal.find('.modal-body #id_departamento').val(id_departamento);
        $("#id_departamento").select2();
        modal.find('.modal-body #id_departamento2').val(id_departamento2);
        $("#id_departamento2").select2();
        modal.find('.modal-body #persona_id3').val(persona_id);
        modal.find('.modal-body #proponente_id').val(proponente_id);
        modal.find('.modal-body #proponente_id2').val(5);
        modal.find('.modal-body #nid').val(nid);
        modal.find('.modal-body #nombre').val(nombre);
        modal.find('.modal-body #apellido').val(apellido);
        modal.find('.modal-body #razon_social').val(razon_social);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #direccion').val(direccion);
        modal.find('.modal-body #celular').val(celular);
        modal.find('.modal-body #representante_legal').val(representante_legal);
        modal.find('.modal-body #nit_cc2').val(representante_legal);
        modal.find('.modal-body #direccion_r').val(direccion_r);
        modal.find('.modal-body #celular_r').val(celular_r);
        modal.find('.modal-body #correo_r').val(correo_r);
    });

    $('#modalCreate2').on('hide.bs.modal', function(event) {
        clearSelectMunicipalities();
    });
}

//actualizar-edit-form
const update = () => {
    let form = $('#form1');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function(data) {

            if (data.success) {
                success(data.success);
                $('#modalCreate2').modal('hide');
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

/// actualizar segundo formulario 

const update2 = () => {
    
    let form = $('#form2');
    $.ajax({
        
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function(data) {
           
            if (data.success) {
                success(data.success);
                $('#modalCreate2').modal('hide');
                updateTable2();
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

const tabla1 = () =>{

    $('.id_table2').modal('hide');
}

const SelectTipo3 = (id) => {
   $('#persona_id3').change(function() {
        var valor = $(this).val();
        if (valor == 1) {
          
           
            $("#form2").hide();
            $("#form1").show();
            
            $("#nit_cc").text("NIT");
            $("#nit_cc2").placeholder("NIT");

       $("#persona_id").val(1);
            
        } else {
        
             $("#form1").hide();
            $("#form2").show();
            
            $("#nit_cc").text("CC");
            $("#nit_cc2").text("CC");

         $("#persona_id2").val(2);
        }
    });
}

const SelectTipo4 = (id) => {
    $('#persona_id4').change(function() {
        var valor = $(this).val();
        if (valor == 1) {
          
            $("#form2").hide();
             $("#persona_id3").val(1);
            $("#form1").show();
            
            $("#nit_cc").text("NIT");
            $("#nit_cc2").placeholder("NIT");
           
        } else {
            $("#persona_id4").val(2);
            $("#form1").hide();
            $("#form2").show();
            
            $("#nit_cc").text("CC");
            $("#nit_cc2").text("CC");

            
        }
    });
}