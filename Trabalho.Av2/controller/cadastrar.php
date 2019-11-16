<?php
session_start();
require_once('../m_cadastro.php');
echo 'teste';
$contato = new Cadastro();

var_dump($_POST);
$dados = $_POST;

$contato->insertContato($dados);
header('Location: ../index.php');