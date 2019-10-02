
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


function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('endereco').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('estado').value=("");
    document.getElementById('cep').value=("");
}


function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('endereco').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('estado').value=(conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('endereco').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('estado').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
            document.getElementById("numero").focus();

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            
            alert("Formato de CEP inválido.");
            document.getElementById("cep").focus();
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};
