<?php

#max() retorna o maior valor encontrado.
#min() retorna o menor valor encontrado.

$valores = array(300,500,801,503,800);

// max()

var_dump(max($valores)); // 801

var_dump(max(21,12,22,34,56,67,58,32)); // 67

// min()

var_dump(min($valores)); // 300

var_dump(min(21,12,22,34,56,67,58,32)); // 12


// Funções Matematicas de Arredondamento
#round() — Arredonda um número.
#ceil() — Arredonda frações para cima.
#floor() — Arredonda frações para baixo.



var_dump(round(2.4));           // 2
var_dump(round(5.5));           // 6
var_dump(round(5.6));           // 6
var_dump(round(5.4));           // 5
var_dump(round(3.6, 0));        // 4
var_dump(round(3.665, 1));      // 3.7
var_dump(round(3.665, 2));      // 3.67

// Arredondando frações para cima

var_dump(ceil(3.665));  // 4
var_dump(ceil(3.66));   // 4
var_dump(ceil(3.45));   // 4
var_dump(ceil(3.2));    // 4
var_dump(ceil(-2.12));  // -2

// Arredondando frações para baixo

var_dump(floor(3.665));  // 3
var_dump(floor(3.66));   // 3
var_dump(floor(3.45));   // 3
var_dump(floor(3.2));    // 3
var_dump(floor(-2.12));  // -3

//Valores Aleatorios
#rand(min, max) — Gera um inteiro aleatório.
#mt_rand(min, max) — Versão melhorada da rand(), é mais segura e mais rápida na geração dos números. Portanto, use-a no lugar de rand().
#getrandmax(void) — Retorna o valor máximo que pode ser gerado em uma chamada à função rand().
#mt_getrandmax(void) — Versão melhorada da getrandmax(). Retorna o valor máximo que pode ser gerado em uma chamada à função mt_rand().

//Capturando argumentos dinamicamente
#func_num_args() – Retorna o número de argumentos passados para a função.
#func_get_arg() – Retorna o valor de um argumento em particular, basta que seu índice seja informado.
#func_get_args() – Retorna um array com todos os argumentos.