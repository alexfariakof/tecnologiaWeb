<?php

function formataValor($valor) {
    return  number_format($valor,2,",",".");
}

function printArray($array) {
    foreach($array as $chave => $valor) {
        echo $chave . ": " . $valor . "<br>";
    }
}

function media(){
    $params = func_get_args();
    $soma = 0;
    foreach($params as $param){
        $soma += $param;    
    }
    return $soma/count($params);
}

// Usando Variadic 
function printArrayVariadic(){
    $params = func_get_args();
    foreach($params as $param){
        echo $param."<br>";    
    }
}

// Função Anonima ou in Air
$soma = function ($a, $b) {
    return $a + $b;
};

function execFun($qtd, $callBack){
    for($i=0; $i <=$qtd; $i++)
        echo $callBack($i, $i+2)."<br>";    
}
