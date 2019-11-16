<?php

if (isset($_POST["email"]) && isset($_POST["senha"])){

    include('../m_login.php');
    $contato = new Login();
    $contato->isValidLogin($_POST["email"], $_POST["senha"]);
    header('Location: ../index.php');

}
