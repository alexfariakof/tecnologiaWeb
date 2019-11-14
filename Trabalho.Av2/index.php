<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Contatos </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/index.js" ></script>
</head>
<body>
    <div id="titulo">
        <h1 > Login  </h1>   
    </div>
    <form id="form-login" action="" method="POST"  >
        <?php 
        if (isset($_SESSION["AUTH"]) && ($_SESSION["AUTH"] == true)) { ?>
           <span>Usuario Logado </span>
        <?php
        }
        else {
        ?>
            <label for="E-mail">E-mail</label><br>
            <input type="email" class="form-control" id="email" name="email" placeHolder="Informe seu email" />
            <span class="msg-erro msg-email" ></span><br>

            <label for="Senha">Senha</label><br>
            <input type="text" class="form-control" id="senha" name="senha" placeHolder="Digite a Senha" maxlength="6" />
            <span class="msg-erro msg-senha" ></span><br>
            <div class="lineButtons"></div>
            <input class="btnLogin" type="button" value="Fazer Login"  />
        <?php 
        }
        ?>
    </form>
</body>
</html>
