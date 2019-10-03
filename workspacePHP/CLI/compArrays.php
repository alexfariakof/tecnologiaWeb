<?php 

$prods1 = [1 => 'Camiseta', 0 => 'Tennis', 'Boné'];
$prods2 = ['Tennis', 'Camiseta', 'Boné'];
$prods3 = [1, 'Camiseta', 'Boné'];

if ($prods1 == $prods2)
    echo 'Iguais';
else
    echo 'Diferentes';

    echo '<br>';
    

if ($prods2 !== $prods3)
    echo 'Diferentes';
else
    echo 'Iguais';


$diff = array_diff($prods1, $prods3);
var_dump($diff);

$diff = array_diff($prods3, $prods1);
var_dump($diff);

//contador da quantidade de elementos dentro do array
echo count($diff);


//verificar se um elemento existe dentro e um array 
in_array($diff);


#reset() – Aponta o ponteiro interno para o primeiro elemento do array e devolve o seu valor.
#end() – Aponta o ponteiro interno para o último elemento do array e devolve o seu valor.
#next() – Aponta o ponteiro interno para o próximo elemento do array e devolve o seu valor.
#prev() – A ponta o ponteiro interno para o elemento anterior do array e devolve o seu valor. Funciona de maneira inversa à função next().
#current() – Devolve o valor do elemento atual do array, indicado pelo ponteiro interno.
#key() - Funciona de maneira semelhante à função current() mas, ao invés de devolver o valor do elemento indicado pelo ponteiro interno do array, devolve o seu índice/chave.


$cursos = array("PHP","CSS3","HTML5","MySQL");

var_dump( current($cursos) ); // Retorna: PHP
var_dump( next($cursos) ); // Retorna: CSS3
var_dump( key($cursos) ); // Retorna: Íncice do elemento atual = 1
var_dump( current($cursos) ); // Retorna: CSS3
var_dump( prev($cursos) ); // Retorna: PHP
var_dump( end($cursos) ); // Retorna: MySQL
var_dump( current($cursos) ); // Retorna: MySQL
var_dump( prev($cursos) ); // Retorna: HTML5
var_dump( key($cursos) ); // Retorna: Íncice do elemento atual = 2


#sort() - A função mais simples de ordenação de arrays. Ordena os elementos de um array em ordem crescente. O índice dos elementos muda, de acordo com a ordem em que são exibidos.
#rsort() - Funciona de maneira inversa à função sort(): Ordena os elementos de um array em ordem decrescente. O índice dos elementos muda, de acordo com a ordem em que são exibidos.
#asort() - Tem o funcionamento semelhante à função sort(): Ordena os elementos de um array em ordem crescente, porém mantém os índices sem alterá-los.
#arsort() - Funciona de maneira inversa à função asort(). Ordena os elementos de um array em ordem decrescente, porém mantém os índices sem alterá-los.
#Shuffle() – Diferente das outras, essa “desordena” completamente o array. Quando aplicada, os elementos são distribuídos de forma randômica. Seus índices não são mantido


