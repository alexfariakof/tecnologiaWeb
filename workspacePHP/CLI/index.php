<?php require 'funcoes.php' ?>
<!DOCTYPE html>
<?php 
    $nome = 'Alex Ribeiro de Fariaaa';
    $idade = 36;
    const EMAIL = 'alexfariakof@gmail.com';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> Treinando PHP</title>
 </head>
 <body>
    <?php
        if(true)
            define('SMTP', '192.168.0.1');
    ?>
     <label>Nome : </label><strong> <?php echo $nome ?></strong><br>
     <label>Idade : </label> <?php echo $idade ?><br>
     <label>SMTP : </label><strong><?php echo SMTP ?></strong><br>
     <label>Email : </label><strong><?php echo EMAIL ?></strong><br>
    <?php
        if (1) {
            echo '<h1> Verdadeiro </h1>';
        }
        else{
            echo '<h1> Falso </h1>';
        }
    ?>

<?php

    // Declaração das variáveis

    $v_string = "TreinaWeb Cursos";
    $v_boolean = TRUE;
    $v_integer = 100;
    $v_float = 100.9;

    // Impressão dos tipos

    echo gettype($v_float); // Retorna o tipo da variável.
    
    var_dump($v_float); // Retorna o tipo e o valor da variável
    
    var_dump( $v_boolean ); // Retorna o tipo e o valor da variável
    
    // Verificação de tipos

    if( is_int($v_integer) ){
      echo '$v_integer é um inteiro. <br />';
    }

    if( !is_bool($v_string) ){
      echo '$v_string não é um valor booleano.';
    }

    
    $decimal = 12345;
    $octa = 0755;
    $hexa = 0xff;
    var_dump($decimal); // Decimal
    echo gettype($decimal);
    var_dump( -12345 ); // Decimal negativo
    var_dump($octa); // Octal, equivalente a 493 em decimal
    echo gettype($octa);
    var_dump($hexa); // Hexadecimal, equivalente a 255 em decimal
    echo gettype($hexa);


    var_dump(25/7); // Float
    var_dump( round(25/7) ); // Float

    var_dump( (int) round(25/7) ); // Inteiro



    // Valor Maximo de um Inteiro 
    $maxInt = PHP_INT_MAX;
    
    var_dump($maxInt);

    var_dump($maxInt+ 2000);


    var_dump($maxInt+ 20000000000000000000000000000000000000);

    //Formatando saida  de um valor flutuante 
    $salario = 4000.89;

    echo 'R$ ' . number_format($salario, 2, ',', '.');


    //arrays 

    $cursos = ['PHP', 'Java', 'C#', 'Python'];

    foreach($cursos as $curso){
        //echo "<br/>"."Curso de $curso"; //  São equivalentes as duas linhas de concatenação
        echo "<br/>"."Curso de ".$curso;
    }

    echo "<br>".$cursos[2];


    $filmes = ['The Lord of the Rings' => 2002, 'Hobbit' => 2012]; // Array Associativo KeyValue

    var_dump($filmes);

    $livro[] = 'Green Book';
    $livro[] = 'Design Pattrens';
    $livro[] = 'O Caçador';
    $livro[] = 1000;
    var_dump($livro);

    echo "{$livro[2]} <br>";

    $opcao[] = 1;

    switch($opcao){

        case 1:
            echo 'Primeira opção foi selecionada.';
            break;

        case 2:
            echo 'Seguunda opção foi selecionada.';
            break;

        default:
            echo 'Nenhum das opções foi selecionada.';
            break;
    }

    $a = 20;  // Estrutura de repetiçao While
    while ($a < 30) {
        $a++;
    }    
    var_dump($a); // int 30

    $valor = 1; // Estrutura de repetição doWhile
    do {
        echo "Executou.";
    } while ($valor>1);

    for ($i = 10; $i < 13; $i++) {
        echo "{$i} <br>";
    }


    $items = array(
        "um" => 1,
        "dois" => 2,
        "três" => 3,
        "sete" => 7
    );
    
    foreach($items as $item => $valor){
            echo $item . ": " . $valor . "<br />";
    } 

 
    
    $filmes = [
        'Argo' => 2012,
        'Taken 2' => 2012,
        'Gangster Squad' => 2013
    ];
    
    $jogadores = [
        'Diego Souza' => 'Cruzeiro',
        'Lúcio' => 'São Paulo',
        'Neymar' => 'Santos',
        'Marcelo Moreno' => 'Grêmio',
        'Messi' => 'Barcelona'
    ];
    
    // Imprimindo os arrays
    
    printArray($filmes);
    printArray($jogadores);
    

    echo media(2, 3, 6, 8) . "<br>";
    echo media(5,  6). "<br>";
    echo media(3, 7, 2). "<br>";
    echo '<br>';


    printArrayVariadic(...$livro);

    echo $soma(2,4)."<br>";

    
    execFun(4, $soma);
    
    phpinfo();
?>    
</body>
</html>
