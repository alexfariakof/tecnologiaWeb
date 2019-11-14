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
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <script type="text/javascript" src="css/datatables.min.js" ></script>

    <script src="css/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="css/DataTables-1.10.20/js/dataTables.buttons.min.js"></script>
    <script src="css/DataTables-1.10.20/js/buttons.flash.min.js"></script>
    <script src="css/DataTables-1.10.20/js/buttons.html5.min.js"></script>


</head>
<body>
    <div id="titulo">
        <h1 > Login  </h1>   
    </div>
    <form id="form-login" action="" method="POST"  >
        <?php 
        if (isset($_SESSION["AUTH"]) && ($_SESSION["AUTH"] == true)) { ?>
           <span>Usuario Logado </span>
           <input class="btnLogOff" type="button" value="Sair"  />
            <?php 
                  include('m_cadastro.php');
                  $contato = new Cadastro();
                  $dados = $contato->getAll();

            ?>
           <table id="tableContato" class="table table-striped table-bordered responsive dataTable no-footer">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>CEP</th>
                        <th>Endereco</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (empty($dados)) {
                        ?>
                        <tr>
                            <td colspan="8">Não foram encontrados dados.</td>
                        </tr>
                        <?php
                    } else {
                        foreach ($dados as $dado) {
                            ?>
                            <tr>
                                <td><?= $dado['nome']; ?></td>
                                <td><?= $dado['sexo']; ?></td>
                                <td><?= $dado['email']; ?></td>
                                <td><?= $dado['celular']; ?></td>
                                <td><?= $dado['cep']; ?></td>
                                <td><?= $dado['endereco']; ?></td>
                                <td><?= $dado['complemento']; ?></td>
                                <td><?= $dado['bairro']; ?></td>
                                <td><?= $dado['cidade']; ?></td>
                                <td><?= $dado['estado']; ?></td>
                            </tr>
                            <?php
                        }
                    };
                    ?>
                </tbody>
            </table>
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
