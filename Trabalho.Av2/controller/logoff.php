<?php 

    session_start();
    $_SESSION["AUTH"] = false;
    header('Location: ../index.php');
