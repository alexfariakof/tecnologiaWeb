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
                $("#estado").val(resposta.uf);
                $("#numero").focus();
            }
        });
    });
  
    $('.form-control').each(function() {        
        $(this).bind('focusout',   validateForm);
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

printVetor = () => {
   vet = [];
   
   for(i=0;i<=10; i++) {
       vet.push('Posição :' + i);
   }
   
   for(i=0;i<=10; i++) {
       console.log(vet[i]);
   }
}