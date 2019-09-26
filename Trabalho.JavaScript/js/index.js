
function validateForm() {
    var contErro  = 0;
    var element = null;

    element = document.getElementById('nome');
    if (element.value === '') {
        document.querySelector('.msg-nome').innerHTML = '*';            
        contErro++;        
    }
    else
        document.querySelector('.msg-nome').innerHTML = '';

    element = document.getElementById('email');
    if (element.value === '') {
        document.querySelector('.msg-email').innerHTML = '*';            
        contErro++;        
    }
    else
        document.querySelector('.msg-email').innerHTML = '';

    element = document.getElementById('celular');
    if (element.value === '') {
        document.querySelector('.msg-celular').innerHTML = '*';            
        contErro++;        
    }
    else
        document.querySelector('.msg-celular').innerHTML = '';
    
    element = document.getElementById('cep');
    if (element.value === '') {
        document.querySelector('.msg-cep').innerHTML = '*';            
        contErro++;        
    }
    else
        document.querySelector('.msg-cep').innerHTML = '';

        
    element = document.getElementById('endereco');
    if (element.value === '') {
        document.querySelector('.msg-endereco').innerHTML = '*';            
        contErro++;        
    }
    else
        document.querySelector('.msg-endereco').innerHTML = '';
    
    element = document.getElementById('bairro');
    if (element.value === '') {
        document.querySelector('.msg-bairro').innerHTML = '*';            
        contErro++;        
    }
    else
        document.querySelector('.msg-bairro').innerHTML = '';
    
    element = document.getElementById('cidade');
    if (element.value === '') {
        document.querySelector('.msg-cidade').innerHTML = '*';            
        contErro++;        
    }
    else
        document.querySelector('.msg-cidade').innerHTML = '';
    

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