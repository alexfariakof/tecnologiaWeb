<?php
header("Content-type: text/html; charset=utf-8"); 
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <script type="text/javascript" src="css/datatables.js" ></script>
    <script src="css/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>


</head>
<body>
<br>
    <form id="form-login" action="" method="POST"  >
        <?php 
        if (isset($_SESSION["AUTH"]) && ($_SESSION["AUTH"] == true)) { ?>
             <div class="btn-group" role="group" aria-label="Exemplo básico">
              <input class="btnLogOff" type="button" value="Sair" class="btn btn-primary" />
                <input class="btnNewContato btn btn-primary" type="button" value="Novo Contato" data-toggle="modal" data-target="#modalCadastro"  />
             </div>
             <br>
            <?php 
                  include('m_cadastro.php');
                  include('cadastro.php');
                  $contato = new Cadastro();
                  $dados = $contato->getAll();

            ?>
            <br>
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
            <button type="button"  class="btnLogin btn btn-success" >Fazer Login</button >
        <?php 
        }
        ?>
    </form>
</body>
</html>
