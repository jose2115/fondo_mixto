$(function() {

    $('#documento_id').select2();

    $('#add-anexo').click(function(e) {
        e.preventDefault();
        saveAnexo();
    });

    modalShowAnexo();
    

});

$(function(){

      $('#documento_id').select2();

    $('#add-anexo2').click(function(e) {
        e.preventDefault();
        saveAnexo2();
    });

    modalShowAnexo2();
 
});

const modalShowAnexo = () => {
    $('#modalAnexos').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id');
        let modal = $(this);
        modal.find('.modal-body #solicitud_id').val(id);

    });

}

const modalShowAnexo2 = () => {
    $('#modalAnexos2').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id');
        let modal = $(this);
        modal.find('.modal-body #solicitud_id').val(id);

    });

}

//guardar en el form

const saveAnexo = () => {
    let form = $('#form')
    let formData = new FormData(this.form);
    formData.append('_token', $('input[name=_token]').val());
    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        dataType: 'json',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            if (data.success) {
                success(data.success);
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

const saveAnexo2 = () => {
    let form2= $('#form2')
    let formData2 = new FormData(this.form2);
    formData2.append('_token', $('input[name=_token]').val());
    $.ajax({
        type: form2.attr('method'),
        url: form2.attr('action'),
        dataType: 'json',
        data: formData2,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            if (data.success) {
                success(data.success);
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