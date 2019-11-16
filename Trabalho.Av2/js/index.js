$(document).ready(function () {

    $('.form-control').each(function () {
        $(this).bind('focusout', validateForm);
    });

    $('.btnLogin').unbind().bind('click', () => {
        if (validateForm() == false)
            return false;
        $("form").attr('action', 'controller/login.php');
        $("form").submit();
    });

    $('.btnLogOff').unbind().bind('click', () => {
        $("form").attr('action', 'controller/logoff.php');
        $("form").submit();
    });
    
    $('.btnNewContato').unbind().bind('click', () => {
        $('.modal').modal('show');
        registrarCep();

    });

    $('.btnSalvar').unbind().bind('click', () => {
        if (validateFormCadastro()) {
            $("form").attr('action', 'controller/cadastrar.php');
            $("form").submit();
        }
    });
    

    if ( $('#tableContato').length )
        $('#tableContato').DataTable();

});

validateForm = () => {
    var contErro = 0;
    $('.form-control').each(function () {
        //console.log($(this).val() + ':' + $(this).attr('type'));

        if ($(this).val() === '') {
            document.querySelector('.msg-' + $(this).attr('name')).innerHTML = '*';
            contErro++;
        }
        else
            document.querySelector('.msg-' + $(this).attr('name')).innerHTML = '';

        if ($(this).val() === '') {
            document.querySelector('.msg-' + $(this).attr('name')).innerHTML = '*';
            contErro++;
        }
        else
            document.querySelector('.msg-' + $(this).attr('name')).innerHTML = '';
    });

    if (contErro > 0)   return false;

    return true;
}

registrarCep = () =>{
    $("#cep").unbind().focusout(function () {
        $.ajax({
            url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
            dataType: 'json',
            success: function (resposta) {
                $("#endereco").val(resposta.logradouro);
                $("#bairro").val(resposta.bairro);
                $("#cidade").val(resposta.localidade);
                $("#estado").val(resposta.uf);
                $("#numero").focus();
            }
        });
    });
}


validateFormCadastro = () => {
    var contErro  = 0;
    $('.form-control').each(function() {
        //console.log($(this).val() + ':' + $(this).attr('type'));

        if ($(this).val() === '') {
            document.querySelector('.msg-' + $(this).attr('name') ).innerHTML = '*';            
            contErro++;        
        }
        else
            document.querySelector('.msg-' + $(this).attr('name') ).innerHTML = '';
        
    });    

    if (document.getElementById('senha').value !== document.getElementById('rSenha').value ||
    document.getElementById('senha').value.length < 6 ||
    document.getElementById('rSenha').value.length <6) {        
        document.querySelector('.msg-rSenha').innerHTML = '*';
        contErro++;        
    }
    else
        document.querySelector('.msg-rSenha').innerHTML = '';
    

    if (contErro > 0)   return false;
    
    return true;
}