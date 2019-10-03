<?php

#strpos() - Encontra a posição da primeira ocorrência do caractere (substring) localizado.
#strstr() – Similar à strpos(). Porém, ao invés de retornar a posição, retorna o trecho da string a partir (ou antes) da primeira ocorrência encontrada.

#O oposto da strtolower() é a função strtoupper(), que transforma uma string em letra maiúscula. Exemplo:

#str_replace() - Substitui todas as ocorrências da string procurada pela string de substituição. Essa função é sensível à caixa.
#str_ireplace() – Idêntica à str_replace(), porém não diferencia letras maiúsculas de minúsculas.
# extrair partes de uma string usando a função substr(),

$nome = 'Treina123 Cur789';

$alteracoes = array(
    '123' => 'Web',
    '789' => 'sos'
);

echo strtr($nome, $alteracoes); // Retorno: TreinaWeb Cursos

$nome = strtr($nome, $alteracoes);;
// Sensível à caixa
if(strcmp($nome, 'treinaweb cursos') === 0) {
    // Não passa porque 'treinaweb cursos' é diferente de 'TreinaWeb Cursos'
}

// Não sensível
if(strcasecmp($nome, 'treinaweb cursos') === 0) {
    echo 'A strcasecmp() passou';
}

// Uma variação de strcasecmp
// Passou
if( strncasecmp($nome, 'Trei', 4) === 0) {
    echo 'Passou 1';
}

// Não passou
if( strncasecmp($nome, 'Tein', 4) === 0) {
    echo 'Passou 2';
}

$procurar = "web";
if(strpos($nome, $procurar)!==false) {
    echo "Encontrou o caractere 'w'";
}


if(strpos(strtolower($nome), strtolower($procurar))!==false) {
    echo "Encontrou o caractere 'w'";
}

$titulo = '<h1>%Alex Ribeiro%</h1>';

echo str_replace('%h1%', 'strong', $titulo);

//str_replace pode ser usado um array, com diversas definições de strings, para procura e substituição
$frase  = "Os cachorros não são sociáveis e muito menos amigos dos homens.";
$mentira = array("não", "menos");

echo str_replace($mentira, "", $frase);

$frase  = "Na minha dieta consumo sorvete, sanduíche e refrigerante.";
$ruim = array("sorvete", "sanduíche", "refrigerante");
$bom = array("pão integral", "peito de peru", "suco de laranja natural");

echo str_replace($ruim, $bom, $frase);

$string = 'abcdefgh';
var_dump( substr($string, 0, 1) );     // retorna 'a'