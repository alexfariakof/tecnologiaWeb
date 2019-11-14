<?php

if (isset($_POST["email"]) && isset($_POST["senha"])){

    include('../m_login.php');
    $contato = new Login();

    if ($contato->isValidLogin($_POST["email"], $_POST["senha"]) == true) {
        header('Location: ../index.php');
    }

}
