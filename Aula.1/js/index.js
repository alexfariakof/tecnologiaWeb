$(document).ready(function () {
    $("#cep").focusout(function () {
        $.ajax({
            url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
            dataType: 'json',
            success: function (resposta) {
                $("#endereco").val(resposta.logradouro);
                $("#complemento").val(resposta.complemento);
                $("#bairro").val(resposta.bairro);
                $("#cidade").val(resposta.localidade);
                $("#uf").val(resposta.estado);
                $("#numero").focus();
            }
        });
    });
    $('.form-control').each(function() {        
        $(this).bind('blur',   validateForm);
    });
    
});

validateForm = () => {
    var contErro  = 0;
    $('.form-control').each(function() {
        //console.log($(this).val() + ':' + $(this).attr('type'));

        if ($(this).val() === '')
            document.querySelector('.msg-' + $(this).attr('name') ).innerHTML = '*';
        else
            document.querySelector('.msg-' + $(this).attr('name') ).innerHTML = '';
        contErro++;        
    });    

    if (contErro > 0) return false;
    alert('Commit Realizado');
}

