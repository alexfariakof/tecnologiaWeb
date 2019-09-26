$(document).ready(function () {
    $("#cep").focusout(function () {
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
  
    $('.form-control').each(function() {        
        $(this).bind('focusout',   validateForm);
    });
   
    $('#nome').bind('focus', function () {
        $(this).css('background-color','blue');
    });

    $('#nome').bind('blur', function () {
        $(this).css('background-color','red');
    });

    $('#titulo').bind('mouseover', function () {        
        $('h1').hide();
    });

    $('#titulo').bind('mouseout', function () {        
        $('h1').show();
    });

    
});

validateForm = () => {
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
    
    alert('Validação OK');
    printVetor();
}