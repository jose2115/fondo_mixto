


$(function() {

    
    $("#descripcion_solicitud").keyup(function() {
        $("#parrafo").val($('#descripcion_solicitud').val());
    });

    $("#recurso_municipio-999").keyup(function() {
        $('#ptotal').val('');

        total()
    });

    $("#fondo_mixto-999").keyup(function() {
        $('#ptotal').val('');
        total()
    });

    $("#ministerio_cultura-999").keyup(function() {
        $('#ptotal').val('');

        total()
    });

    $("#ingreso_propio-999").keyup(function() {
        $('#ptotal').val('');

        total()
    });



    clearFormData();
    modalShow();
    clasificacionesChange();
    buttonsAdd();
    formCreate();

});


function format(input)
{
var num = input.value.replace(/\./g,'');
if(!isNaN(num)){
num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
num = num.split('').reverse().join('').replace(/^[\.]/,'');
input.value = num;
}
 
else{ 
    warning(' SOLO SE PERMITEN NUMEROS');
  
input.value = input.value.replace(/[^\d\.]*/g,'');
}
}

const ihnabilitar = () =>{

    
    var r_municipio = document.getElementById('recurso_municipio-999');
   
    r_municipio.disabled = true;

    var r_municipio = document.getElementById('fondo_mixto-999');
   
    r_municipio.disabled = true;

    var r_municipio = document.getElementById('ministerio_cultura-999');
   
    r_municipio.disabled = true;

    var r_municipio = document.getElementById('ingreso_propio-999');
   
    r_municipio.disabled = true;

    var boton_agregar = document.getElementById('btnAddPresupuesto');

    boton_agregar.disabled = true;
}

const habilitar = () =>{

    
    var r_municipio = document.getElementById('recurso_municipio-999');
   
    r_municipio.disabled = false;

    var r_municipio = document.getElementById('fondo_mixto-999');
   
    r_municipio.disabled = false;

    var r_municipio = document.getElementById('ministerio_cultura-999');
   
    r_municipio.disabled = false;

    var r_municipio = document.getElementById('ingreso_propio-999');
   
    r_municipio.disabled = false;

    var boton_agregar = document.getElementById('btnAddPresupuesto');

    boton_agregar.disabled = false;

}

const total = () => {

    
    var v1  = $('#recurso_municipio-999').val();
    var v11 = v1.replace(/\./g,'');
    var v2  = $('#fondo_mixto-999').val();
    var v22 = v2.replace(/\./g,'');
    var v3  = $('#ministerio_cultura-999').val();
    var v33 = v3.replace(/\./g,'');
    var v4  = $('#ingreso_propio-999').val();
    var v44 = v4.replace(/\./g,'');
    var t = (parseFloat(v11)) + (parseFloat(v22)) + (parseFloat(v33)) + (parseFloat(v44));
    
    t = t.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
    t = t.split('').reverse().join('').replace(/^[\.]/,'');
    
    $('#ptotal').val(t);


}
 



//guardar en el form
const save = (form, formData) => {

    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {

            if (data.success) {

                success(data.success);
                clearFormData();
                updateTable();
                $('#btn-guardar-solicitud').show();
                $('#btn-formato').hide();
                $('#btn-poblacion').hide();
                $('#btn-actividades').hide();
                $('#btn-presupuesto').hide();
                $('#btn-documentos').hide();
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

//actualizar-editform
const update = () => {
    let form = $('#form_edit');
    $.ajax({
        data: form.serialize(),
        url: form.attr('action'),
        type: form.attr('method'),
        dataType: 'json',
        success: function(data) {

            if (data.success) {
                success(data.success);
                $('#modalEdit').modal('hide');
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

// Utilizar este codigo para departamentos
const clearSelectPoblaciones = () => {
    $('.poblaciones').find('option:not(:first)').remove();
    $('.edad').find('option:not(:first)').remove();
}

const changePoblaciones = (value) => {
    for (let p of poblaciones) {
        if (p.clasificacion_id == value) {
            $(".poblaciones").append('<option value="' + p.id + '">' + p.detalle + '</option>');
            $(".poblaciones").val(p.id);
        }
    }
    $(".poblaciones").val('0');
}

const changePoblaciones2 = (value) => {
    for (let p of poblaciones) {
        if (p.clasificacion_id == value) {
            $(".edad").append('<option value="' + p.id + '">' + p.detalle + '</option>');
            $(".edad").val(p.id);
        }
    }
    $(".edad").val('0');
}


const addItemsPoblacion = (tr) => {

    let clasificacion = $('#clasificacion_id-999').val();
    let poblacion = $('#poblacion_id-999').val();
    let edad = $('#edad_id-999').val();
    let genero = $('#genero_id-999').val();
    let total = $('#total-999').val();

    let items = [clasificacion, poblacion, edad, genero, total];

    if (validatedItems(items)) {
        if (tr != 0) {
            deleteItemPoblacion(tr);
            addTablePoblacion(tr, clasificacion, poblacion, edad, genero, total);
            tr_poblacion = 0;
        } else {
            x_poblacion++;
            addTablePoblacion(x_poblacion, clasificacion, poblacion, edad, genero, total);
        }

        $('#clasificacion_id-999').val('0');
        $('#poblacion_id-999').val('0');
        $('#edad_id-999').val('0');
        $('#genero_id-999').val('0');
        $('#total-999').val('');

    } else {
        warning('POR FAVOR ESCOGER TODAS LAS OPCIONES DISPONIBLES')
    }


}

////////prueba de los objetivos

const addItemsObjetivo = (tr) => {


    let objetivo_especifico = $('#objetivo_especifico').val();

    let items = [objetivo_especifico];

    if (validatedItems(items)) {
        if (tr != 0) {
            deleteItemObjetivo(tr);
            addTableObjetivo(tr, objetivo_especifico);
            tr_objetivo = 0;
        } else {
            x_objetivo++;
            addTableObjetivo(x_objetivo, objetivo_especifico);
        }

     
        $('#objetivo_especifico').val('');

    } else {
        warning('POR FAVOR ESCOGER TODAS LAS OPCIONES DISPONIBLES')
    }


}

/////////

const addItemsActividad = (tr) => {

    let actividad = $.trim($("#nombre_actividad-999").val());
    let fecha_ini = $('#fecha_inicio-999').val();
    let fecha_fin = $('#fecha_final-999').val();

    let items = [actividad, fecha_ini, fecha_fin];

    if (validatedItems(items)) {
        if (tr != 0) {
            deleteItemActividad(tr);
            addTableActividad(tr, actividad, fecha_ini, fecha_fin);
            tr_actividad = 0;
        } else {
            x_actividad++;
            addTableActividad(x_actividad, actividad, fecha_ini, fecha_fin);
        }

        $('#nombre_actividad-999').val('');
        $('#fecha_inicio-999').val('');
        $('#fecha_final-999').val('');

    } else {
        warning('POR FAVOR ESCOGER TODAS LAS OPCIONES DISPONIBLES')
    }

}

const addItemsPresupuesto = (tr) => {

    let rubro = $("#rubro-999").val();
    let recurso_municipio = $('#recurso_municipio-999').val();
    let fondo_mixto = $('#fondo_mixto-999').val();
    let ministerio_cultura = $('#ministerio_cultura-999').val();
    let ingreso_propio = $('#ingreso_propio-999').val();
    let ptotal = $('#ptotal').val();

    let items = [rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio, ptotal];

    if (validatedItems3(items)) {
        if (tr != 0) {
            deleteItemPresupuesto2(tr);
            addTablePresupuesto(tr, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio, ptotal);
            ihnabilitar();
            tr_presupuesto = 0;
        } else {
            x_presupuesto++;
            addTablePresupuesto(x_presupuesto, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio, ptotal);
            ihnabilitar();
        }

       // $("#rubro-999").val('');
       //$('#recurso_municipio-999').val('');
       //$('#fondo_mixto-999').val('');
       //$('#ministerio_cultura-999').val('');
       //$('#ingreso_propio-999').val('');
       //$('#ptotal').val('');

    } else {
        warning('POR FAVOR ESCOGER TODAS LAS OPCIONES DISPONIBLES')
    }

}
/////objetivo agregar en la tabla

const addTableObjetivo = (x, objetivo_especifico) => {

    
    let htmlTags = `<tr id="item_objetivo_${x}">
        <td>${x}</td>
 
        <td class="text-left">${objetivo_especifico}</td>
        <td class="text-center">
          
            <button type="button" class="btn btn-danger" onclick="deleteItemObjetivo(${x})"><i class="fas fa-trash-alt"></i></button>
        </td>
    </tr>`;

    $('#table_objetivo tbody').append(htmlTags);

    $("#table_objetivo_empty").val("0");

    $('#clonar_objetivo').append(cloneInputsObjetivo(x, objetivo_especifico));

}




///////
const addTablePoblacion = (x, clasificacion, poblacion, edad, genero, total) => {

    let name_poblacion = namePoblacion(poblacion);
    let name_edad = nameEdad(edad);
    let name_clasificacion = nameClasificacion(clasificacion);

    let htmlTags = `<tr id="item_poblacion_${x}">
        <td>${x}</td>
        <td class="text-center">${name_clasificacion}</td>
        <td class="text-center">${name_poblacion}</td>
        <td class="text-center">${name_edad}</td>
        <td class="text-center">${genero}</td>
        <td class="text-center">${total}</td>
        <td class="text-center">
            <button  type="button" class="btn btn-primary" onclick="addFormPoblacion(${clasificacion},${poblacion},${edad},${total},${x})" ><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-danger" onclick="deleteItemPoblacion(${x})"><i class="fas fa-trash-alt"></i></button>
        </td>
    </tr>`;

    $('#table_poblacion tbody').append(htmlTags);

    $("#table_poblacion_empty").val("0");

    $('#clonar_poblacion').append(cloneInputsPoblacion(x, poblacion, edad, genero, total));
    var suma = 0;
   $('#table_poblacion tbody').find('tr').each(function (el) {
             
        //Voy incrementando las variables segun la fila ( .eq(0) representa la fila 1 )     
        suma += parseFloat($(this).find('td').eq(5).text());
        
                
    });

    $('#ee').text(suma);

}

const addTableActividad = (x, actividad, fecha_ini, fecha_fin) => {
    let htmlTags = `<tr id="item_actividad_${x}">
            <td>${x}</td>
            <td class="text-center">${actividad}</td>
            <td class="text-center">${fecha_ini}</td>
            <td class="text-center">${fecha_fin}</td>
            <td class="text-center">
                <button type="button" class="btn btn-primary" onclick="addFormActividad(${x},'${actividad}', '${fecha_ini}', '${fecha_fin}')" ><i class="fas fa-pencil-alt"></i></button>
                <button type="button" class="btn btn-danger" onclick="deleteItemActividad(${x})"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>`;

    $('#table_actividad tbody').append(htmlTags);

    $("#table_actividad_empty").val("0");

    $('#clonar_actividad').append(cloneInputsActividad(x, actividad, fecha_ini, fecha_fin));

}

const addTablePresupuesto = (x, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio, ptotal) => {
    let htmlTags = `<tr id="item_presupuesto_${x}">
            <td>${x}</td>
            
            <td class="text-center">$ ${recurso_municipio}</td>
            <td class="text-center">$ ${fondo_mixto}</td>
            <td class="text-center">$ ${ministerio_cultura}</td>
            <td class="text-center">$ ${ingreso_propio}</td>
            <td class="text-center">$ ${ptotal}</td>
            <td class="text-center">
                <button type="button" class="btn btn-primary" onclick="addFormPresupuesto(${x}, ${rubro}, ${recurso_municipio}, ${fondo_mixto}, ${ministerio_cultura}, ${ingreso_propio})"><i class="fas fa-pencil-alt"></i></button>
                <button type="button" class="btn btn-danger" onclick="deleteItemPresupuesto(${x})"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>`;

    $('#table_presupuesto tbody').append(htmlTags);

    $("#table_presupuesto_empty").val("0");

    $('#clonar_presupuesto').append(cloneInputsPresupuesto(x, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio));
x = 0;
}

const cloneInputsPoblacion = (x, poblacion, edad, genero, total) => {

     let name_edad = nameEdad(edad);
    return `<div id="clone_poblacion-${x}">
    <input type="number" style="display:none;" name="id_poblacion[]" id="id_poblacion-${x}" value="${poblacion}">
     <input type="text" style="display:none;" name="edad[]" id="edad-${x}" value="${name_edad}">
    <input type="text" style="display:none;" name="genero[]" id="genero-${x}" value="${genero}">
    <input type="hidden" name="total[]" id="total-${x}" value="${total}">
    </div>`
}

const cloneInputsObjetivo = (x, objetivo_especifico) => {
    return `<div id="clone_objetivo-${x}">
    <input type="text" style="display:none;" name="objetivo_especifico[]" id="objetivo_especifico-${x}" value="${objetivo_especifico}">
    </div>`
}

const cloneInputsActividad = (x, actividad, fecha_ini, fecha_fin) => {

    return `<div id="clone_actividad-${x}">
    <textarea style="display:none;" name="nombre_actividad[]" id="nombre_actividad-${x}">${actividad}</textarea>
    <input type="hidden" name="fecha_inicio[]" id="fecha_inicio-${x}" value="${fecha_ini}">
    <input type="hidden" name="fecha_final[]" id="fecha_final-${x}" value="${fecha_fin}">
    </div>`;

}

const cloneInputsPresupuesto = (x, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio) => {

    return `<div id="clone_presupuesto-${x}">
    <input type="hidden" name="rubro[]" id="rubro-${x}" value="${rubro}">
    <input type="hidden" name="recurso_municipio[]" id="recurso_municipio-${x}" value="${recurso_municipio}">
    <input type="hidden" name="fondo_mixto[]" id="fondo_mixto-${x}" value="${fondo_mixto}">
    <input type="hidden" name="ministerio_cultura[]" id="ministerio_cultura-${x}"  value="${ministerio_cultura}">
    <input type="hidden" name="ingreso_propio[]" id="ingreso_propio-${x}" value="${ingreso_propio}">
    </div>`;

}

const addFormPoblacion = (clasificacion, poblacion, edad, genero, total, tr) => {
    $('#clasificacion_id-999').val(clasificacion);
    changePoblaciones(clasificacion)
    $('#poblacion_id-999').val(poblacion);
    $('#edad_id-999').val(edad);
    $('#genero_id-999').val(genero);
    $('#total-999').val(total);

    tr_poblacion = tr;
}

const addFormObjetivo = (x, objetivo_especifico) => {
  
    $('#objetivo_especifico').val(objetivo_especifico);
    
    tr_objetivo = x;
}


const addFormActividad = (x, actividad, fecha_ini, fecha_final) => {

    $('#nombre_actividad-999').val(actividad);
    $('#fecha_inicio-999').val(fecha_ini);
    $('#fecha_final-999').val(fecha_final);

    tr_actividad = x;
}

const addFormPresupuesto = (x, rubro, recurso_municipio, fondo_mixto, ministerio_cultura, ingreso_propio) => {
habilitar();
    $("#rubro-999").val(rubro);
    $('#recurso_municipio-999').val(recurso_municipio);
    $('#fondo_mixto-999').val(fondo_mixto);
    $('#ministerio_cultura-999').val(ministerio_cultura);
    $('#ingreso_propio-999').val(ingreso_propio);

    tr_presupuesto = x;
}

const namePoblacion = (poblacion) => {

    for (let p of poblaciones) {
        if (p.id == poblacion) {
            return p.detalle;
        }
    }

}

const nameEdad = (poblacion) => {

    for (let p of poblaciones) {
        if (p.id == poblacion) {
            return p.detalle;
        }
    }

}


const nameGenero = (genero) => {

    for (let g of generos) {
        if (g.id_genero == genero) {
            return g.detalle;
        }
    }

}

const nameClasificacion = (clasificacion) => {

    for (let c of clasificaciones) {
        if (c.id == clasificacion) {
            return c.tipo_poblacion;
        }
    }

}

const deleteItemObjetivo = (value) => {
    $("#item_objetivo_" + value).remove();
    $('#clone_objetivo-' + value).remove();
    x_objetivo = 0;
}

const deleteItemPoblacion = (value) => {
    $("#item_poblacion_" + value).remove();
    $('#clone_poblacion-' + value).remove();
    x_poblacion = 0;
}

const deleteItemActividad = (value) => {
    $("#item_actividad_" + value).remove();
    $('#clone_actividad-' + value).remove();
}

const deleteItemPresupuesto = (value) => {
    $("#item_presupuesto_" + value).remove();
    $('#clone_presupuesto-' + value).remove();
    habilitar();
    
    $("#rubro-999").val('');
    $('#recurso_municipio-999').val('');
    $('#fondo_mixto-999').val('');
    $('#ministerio_cultura-999').val('');
    $('#ingreso_propio-999').val('');
    $('#ptotal').val('');

    x_presupuesto = 0;

}

const deleteItemPresupuesto2 = (value) => {
    $("#item_presupuesto_" + value).remove();
    $('#clone_presupuesto-' + value).remove();
 
}

const validatedItems = (items) => {

    for (let index = 0; index < items.length; index++) {

        if (items[index] == '' || items[index] == '0') {
            return false;
        }

    }

    return true;
}

const validatedItems3 = (items) => {

   

    for (let index = 0; index < items.length; index++) {

        if (items[index] == '') {
            return true;
        }

    }

    return true;
}
const validatedItems2 = (items) => {
 

    var r_municipio = $("#recurso_municipio-999").val();
    var r_fondo = $("#fondo_mixto-999").val();
    var r_cultura = $("#ministerio_cultura-999").val();
    var r_propio = $("#ingreso_propio-999").val();

  if(r_municipio == '' ||  r_municipio == '0' || r_fondo == '' ||  r_fondo == '0' 
    || r_cultura == '' ||  r_cultura == '0'  || r_propio == '' ||  r_propio == '0' ){
        return false;
  }

    return true;
}

const formatterPeso = new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    minimumFractionDigits: 0
})


const changeSolicitud = (value) => {
    for (let c of categorias) {
        if (c.id == value) {
            if (c.tipo_solicitud == 'Solicitud de proyecto') {
                $('#btn-formato').show();
                $('#btn-poblacion').show();
                $('#btn-actividades').show();
                $('#btn-presupuesto').show();
                $('#btn-documentos').show();
                $('#btn-guardar-solicitud').show();
                $('#n_asunto').text('Nombre del Proyecto')
            } else {
                $('#btn-guardar-solicitud').show();
                $('#btn-formato').hide();
                $('#btn-poblacion').hide();
                $('#btn-actividades').hide();
                $('#btn-presupuesto').hide();
                $('#btn-documentos').hide();
                $('#n_asunto').text('asunto')
            }
        }
    }
}

const validateSolicitud = (url) => {

    let archivo = document.getElementById('archivo_solicitud');

    let data = new FormData();
    data.append("categoria", $('#categoria_id').val());
    data.append("solicitante", $('#solicitante_id').val());
    data.append("descripcion", $('#descripcion_solicitud').val());
    data.append("radicado", $('#radicado').val());
    data.append("archivo", archivo.files[0]);


    $.ajax({
        data: data,
        url: url,
        type: 'POST',
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        success: function(data) {
            if (data.success) {
                $('#form_solicitud').val("1");
                $('#modalCreate').modal('hide');
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

const validateFormato = (url) => {


    let data = new FormData();

    data.append("titulo", $('#titulo').val());
    data.append("fecha_ini", $('#fecha_ini').val());
    data.append("fecha_fin", $('#fecha_fin').val());
    data.append("descripcion_proyecto", $('#descripcion_proyecto').val());
    data.append("id_linea", $('#id_linea').val());
    data.append("antecedentes", $('#antecedentes').val());
    data.append("justificacion", $('#justificacion').val());
    data.append("metodologia", $('#metodologia').val());
    data.append("objetivo_general", $('#objetivo_general').val());
    //data.append("objetivo_especifico", $('#objetivo_especifico').val());
    data.append("metas", $('#metas').val());
    
    $.ajax({
        data: data,
        url: url,
        type: 'POST',
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        success: function(data) {
            if (data.success) {
                $('#form_formato').val("1");
                $('#modalFormato').modal('hide');
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


const validatePoblacion = (url) => {

    if ($("#table_poblacion_empty").val() == 1 || $("#clonar_poblacion").html() == "") {

        let data = new FormData();
        data.append("poblacion", $('#poblacion_id-999').val());
        data.append("poblacion2", $('#poblacion_id-9992').val());
        data.append("total", $('#total-999').val());
        data.append("fuente_verificacion", $('#fuente_verificacion').val());
        
        $.ajax({
            data: data,
            url: url,
            type: 'POST',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            success: function(data) {
                if (data.success) {
                    if ($("#clonar_poblacion").html() != "") {
                        $('#form_poblacion').val("1");
                        $('#modalPoblacion').modal('hide');
                    } else {
                        warning("POR FAVOR AGREGUE UN REGISTRO A LA TABLA");
                    }
                }
            },
            error: function(data) {
                if (data.status === 422) {
                    let errors = $.parseJSON(data.responseText);
                    addErrorMessage(errors);
                }
            }
        });

    } else {
        $('#form_poblacion').val("1");
        $('#modalPoblacion').modal('hide');
    }


}


const validateObjetivo = (url) => {


        let data = new FormData();
        data.append("objetivo_especifico", $('#objetivo_especifico').val());

        $.ajax({
            data: data,
            url: url,
            type: 'POST',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,

            success: function(data) {
                if (data.success) {
                    if ($('#clonar_objetivo').html() != "") {
                        $('#form_objetivo').val("1");
                        $('#modalPoblacion').modal('hide');
                    } else {
                        warning("POR FAVOR AGREGUE UN REGISTRO A LA TABLA");
                    }
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


const validateActividad = (url) => {

    if ($("#table_actividad_empty").val() == 1 || $("#clonar_actividad").html() == "") {

        let data = new FormData();
        data.append("nombre_actividad", $('#nombre_actividad-999').val());
        data.append("fecha_inicio", $('#fecha_inicio-999').val());
        data.append("fecha_final", $('#fecha_final-999').val());

        $.ajax({
            data: data,
            url: url,
            type: 'POST',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            success: function(data) {
                if (data.success) {
                    if ($("#clonar_actividad").html() != "") {
                        $('#form_actividad').val("1");
                        $('#modalActividades').modal('hide');
                    } else {
                        warning("POR FAVOR AGREGUE UN REGISTRO A LA TABLA");
                    }
                }
            },
            error: function(data) {
                if (data.status === 422) {
                    let errors = $.parseJSON(data.responseText);
                    addErrorMessage(errors);
                }
            }
        });

    } else {
        $('#form_actividad').val("1");
        $('#modalActividades').modal('hide');
    }

}


const validatePresupuesto = (url) => {



        let data = new FormData();
     // data.append("rubro", $('#rubro-999').val());
        data.append("recurso_municipio", $('#recurso_municipio-999').val());
        data.append("fondo_mixto", $('#fondo_mixto-999').val());
        data.append("ministerio_cultura", $('#ministerio_cultura-999').val());
        data.append("ingreso_propio", $('#ingreso_propio-999').val());


        $.ajax({
            data: data,
            url: url,
            type: 'POST',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            success: function(data) {
                if (data.success) {
                    if ($("#clonar_presupuesto").html() != "") {
                        $('#form_presupuesto').val("1");
                        $('#modalPresupuesto').modal('hide');
                    } else {
                        warning("POR FAVOR AGREGUE UN REGISTRO A LA TABLA");
                    }
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

const clearFormData = () => {
    $('#form_solicitud').val("0");
    $('#form_formato').val("0");
    $('#form_poblacion').val("0");
    $('#form_actividad').val("0");
    $('#form_presupuesto').val("0");

    $('#form_create')[0].reset();

    $('.select2').select2({
        placeholder: '-- Escoger Opciones --',
    });

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4',
    });


    $("#clonar_presupuesto").html("");
    $("#clonar_actividad").html("");
    $("#clonar_poblacion").html("");
    $("#clonar_objetivo").html("");
    $('#table_presupuesto tbody').html("");
    $('#table_actividad tbody').html("");
    $('#table_poblacion tbody').html("");
     $('#table_objetivo tbody').html("");
}

const popovers = () => {
    $('.show-details').popover();
    $('.add-documents').popover();
    $('.send-gerencia').popover();
}

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
            }
        });
    });

    $('#modalShow').on('hide.bs.modal', function(e) {
        $(this).find('.modal-body').html("");
    });

}

const clasificacionesChange = () => {
    $('.clasificaciones').change(function(e) {
        clearSelectPoblaciones();
        changePoblaciones(this.value);
        changePoblaciones2(1);
    });
}

////botones 
const buttonsAdd = () => {

     $('#btnAddObjetivo').click(function(e) {
        e.preventDefault();
        addItemsObjetivo(tr_objetivo);
    });

    $('#btnAddPoblacion').click(function(e) {
        e.preventDefault();
        addItemsPoblacion(tr_poblacion);
    });

    $('#btnAddActividad').click(function(e) {
        e.preventDefault();
        addItemsActividad(tr_actividad);
    });

    $('#btnAddPresupuesto').click(function(e) {
        e.preventDefault();
        addItemsPresupuesto(tr_presupuesto);
    });

}

const formCreate = () => {
    $('#form_create').on('submit', function(e) {
        e.preventDefault();

        let form = $('#form_create');
        let formData = new FormData(this);
        formData.append('_token', $('input[name=_token]').val());

        save(form, formData);

    });
}
