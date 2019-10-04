<?php

$a = 'X';
$b =& $a;
echo $b .' '. $a;
$erro = [
    'tipo' => 'Email',
    'codigo' => '01',
    'descricao' => 'O remetente não foi informado.'
];

$resultado = sprintf("Tipo: %s. Código: %s. Descrição: %s", $erro["tipo"], $erro["codigo"], $erro["descricao"]);

echo $resultado;

vprintf("<br>Tipo: %s. Código: %s. Descrição: %s. Percentual: 20%%", $erro);

/*
Não existe apenas o especificador %s para formatação dos dados. Na verdade, há uma imensidade deles. Algumas considerações:

    Um especificador de formato começa com um símbolo de porcentagem (%), que é acompanhado de um especificador de tipo.
    
    Outros modificadores opcionais podem ser inseridos entre os dois para modificar o comportamento:
    
    Um especificador de sinal (um sinal de menos – ou mais +) pode ser usado no número. Por padrão, somente o sinal – é usado no número, se ele for negativo. Este especificador força números positivos a ter o sinal +.
    Um especificador de preenchimento que informa o caractere a ser usado para preencher o resultado no tamanho certo. Pode ser um espaço ou 0 (caractere zero). O padrão é preencher com espaços. Um caractere alternativo de preenchimento pode ser especificado, colocando uma aspa simples ( ' ) antes.
    Um especificador de alinhamento que informa se o resultado deve ser alinhado à esquerda ou à direita. O padrão é alinhar à direita; um caractere – fará com que seja alinhado à esquerda.
    Um número, um especificador de tamanho, que informa quantos caracteres (mínimo) deve resultar da conversão.
    Um especificador de precisão que informa quantos dígitos decimais devem ser mostrados em números de ponto flutuante. Este especificador, quando usado na string, age como um ponto delimitador, definindo o máximo de caracteres-limite para a string.
    Um especificador de tipo que informa que o argumento deve ser tratado como tipo.
    Os tipos possíveis são:
    
    % - Um caractere porcento. Não é requerido nenhum argumento.
    b - O argumento é tratado como um inteiro, e mostrado como um binário.
    c - O argumento é tratado como um inteiro, e mostrado como o caractere ASCII correspondente.
    d - O argumento é tratado como um inteiro, e mostrado como um número decimal com sinal.
    e - O argumento é tratado como notação científica (e.g. 1.2e+2). O especificador de precisão indica o número de dígitos depois do ponto decimal (PHP 5.2.1 ou maior).
    u - O argumento é tratado como um inteiro, e mostrado como um número decimal sem sinal.
    f - O argumento é tratado como um float, e mostrado como um número de ponto flutuante (do local configurado).
    F - O argumento é tratado como um float, e mostrado como um número de ponto flutuante (não usa as configurações do local informado).
    o - O argumento é tratado como um inteiro, e mostrado como um número octal.
    s - O argumento é tratado e mostrado como uma string.
    x - O argumento é tratado como um inteiro, e mostrado como um número hexadecimal (com as letras minúsculas).
    X - O argumento é tratado como um inteiro, e mostrado como um número hexadecimal (com as letras maiúsculas).
    */

$valor1 =  4395;
$valor2 = 20.99;
$valor3 =  -4395;
$caractere = 67; // O decimal 67 da tabela ASCII equivale ao caractere C

printf('%b <br>', $valor1); // Representação binária

printf('%c <br>', $caractere); // Imprime o caractere C ( igual a função chr() )

printf('%e <br>', $valor1); // Notação científica

printf('%d <br>', $valor2); // Parte inteira do valor (o valor é truncado)

printf('%+d <br>', $valor1); // Valor inteiro positivo (força o valor a ter o sinal de +)

printf('%-d <br>', $valor3); // Valor inteiro negativo (força o valor a ter o sinal de -)


echo '<br><strong>especificadores de alinhamento:</strong>';


$s = 'Alex';

printf("[%s]\n",      $s); // Impressão padrão da string
printf("[% 20s]\n",    $s); // alinhamento à direita com espaços.
printf("[% - 20s]\n",   $s); // alinhamento à esquerda com espaços.