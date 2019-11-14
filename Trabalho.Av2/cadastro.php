<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Contatos </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/cadastro.js" ></script>
</head>
<body>
    <div id="titulo">
        <h1 > Cadastros de Contatos </h1>   
    </div>
    <form id="form-contato" action="" method="POST"  >
        <label for="nome">Nome</label><br>
        <input type="text" class="form-control" id="nome" name="nome" placeHolder="Informe seu Nome"  />
        <span class="msg-erro msg-nome" ></span><br>

        <label for="Sexo">Sexo</label><br>
        <input type="radio" class="form-control" id="sexoM" name="sexo" value="M" checked  />
        <label for="sexoM">Masculino</label>
        <input type="radio" class="form-control" id="sexoF" name="sexo" value="F"   />
        <label for="sexoF">Femenino</label>
        <span class="msg-erro msg-sexo" ></span><br>

        <label for="E-mail">E-mail</label><br>
        <input type="email" class="form-control" id="email" name="email" placeHolder="Informe seu email" />
        <span class="msg-erro msg-email" ></span><br>

        <label for="Celular">Celular</label><br>
        <input type="text" class="form-control" id="celular" name="celular" placeHolder="Informe seu Celular" />
        <span class="msg-erro msg-celular" ></span><br>

        <label for="CEP">CEP</label><br>
        <input type="text" class="form-control" id="cep" name="cep" placeHolder="Informe seu CEP" />
        <span class="msg-erro msg-cep" ></span><br>

        <label for="Endereço">Endereço</label><br>
        <input type="text" class="form-control" id="endereco" name="endereco" placeHolder="Informe seu Endereço" />
        <input type="text" class="form-control" id="numero" name="numero" placeHolder="Informe seu Número" />
        <span class="msg-erro msg-endereco msg-numero " ></span><br>

        <label for="Complemento">Complemento</label><br>
        <input type="text" class="form-control" id="complemento" name="complemento" placeHolder="Informe seu Complemento" />        
        <span class="msg-erro msg-complemento" ></span><br>

        <label for="Bairro">Bairro</label><br>
        <input type="text" class="form-control" id="bairro" name="bairro" placeHolder="Informe seu Bairro" />
        <span class="msg-erro msg-bairro" ></span><br>

        <label for="Cidade">Cidade</label><br>
        <input type="text" class="form-control" id="cidade" name="cidade" placeHolder="Informe seu Cidade" />
        <span class="msg-erro msg-cidade" ></span><br>

        <label for="Estado">Estado</label><br>
        <select class="form-control" id="estado" name="estado" >
                <option value=""></option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
        </select>        
        <span class="msg-erro msg-estado" ></span><br>

        <label for="Senha">Senha</label><br>
        <input type="text" class="form-control" id="senha" name="senha" placeHolder="Digite a Senha" maxlength="6" />
        <span class="msg-erro msg-senha" ></span><br>

        <label for="Repita Senha">Repita Senha</label><br>
        <input type="text" class="form-control" id="rSenha" name="rSenha" placeHolder="Repita a Senha" maxlength="6" />
        <span class="msg-erro msg-rSenha" ></span><br>

        <div class="lineButtons"></div>
        <input type="button" value="Salvar" onclick="validateForm();" />
    </form>
</body>
</html>