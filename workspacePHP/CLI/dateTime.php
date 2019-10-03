<?php
header("Content-Type: text/html; charset=utf-8");
var_dump( date("d/m/Y") ); // dd/mm/yyyy
echo "<br>";
var_dump( date("d-m-Y") ); // dd-mm-yyyy
echo "<br>";
var_dump( date("Y-m-d") ); // yyyy-mm-dd (Esse formato é um padrão muito utilizado, principalmente por bancos de dados.)
echo "<br>";
var_dump( date("m/Y") ); // mm-yyyy
echo "<br>";
var_dump( date("m/y") ); // mm-yy
echo "<br>";
#Formatos para dia:

// Supondo que o dia de hoje é: 06

var_dump(date("d")); // Ex: 06
echo "<br>";
var_dump(date("j")); // Ex: 6
echo "<br>";
var_dump(date("D")); // Ex: Sun
echo "<br>";
var_dump(date("N")); // Ex: 7 (Sun)
echo "<br>";
var_dump(date("w")); // Ex: 0 (Sun)
echo "<br>";
var_dump(date("z")); // Ex: 19 (Dia do ano)


#Formatos para semana e mês:

// Semana

var_dump(date("W")); // Ex: 03 (Terceira semana do ano)
echo "<br>";
// Mês

var_dump(date("F")); // Ex: January
echo "<br>";
var_dump(date("m")); // Ex: 01 (representação numérica)
echo "<br>";
var_dump(date("M")); // Ex: Jan (forma abreviada)
echo "<br>";
var_dump(date("n")); // Ex: 1 (representação numérica)
echo "<br>";
var_dump(date("t")); // Ex: 31 (total de dias deste mês)
echo "<br>";

// Formatos Para Ano 



var_dump(date("Y")); // Ex: 2013
echo "<br>";
var_dump(date("y")); // Ex: 13
echo "<br>";
if( date("L") ) {
    echo "<br>Este ano de " . date("Y") . " é bissexto.";
} else {
    echo "<br>Este ano de " . date("Y") . " não é bissexto.";
}

echo "<br>";
#date("L") retorna 1 se o ano for bissexto e 0 caso contrário. Na avaliação condicional 0 é interpretado como FALSE e 1 como TRUE.

//Formatos para timezones (fusos horários):

var_dump(date("e")); // Ex: Europe/Berlin

var_dump(date("P")); // Ex: +01:00


#O exemplo indica que o fuso horário usado no PHP é o de Berlin. A função date_default_timezone_set() pode ser usada para a alterar o fuso horário de data, usado no PHP.

#Consulte as referências dos fuso horários suportados, das Américas, acessando: http://php.net/manual/pt_BR/timezones.america.php

date_default_timezone_set("America/Sao_Paulo");

var_dump(date("e")); // Ex: America/Sao_Paulo

var_dump(date("P")); // Ex: -02:00 (por causa do horário de verão. Fora dele: -03:00)


/* dia  */

#d | Dia do mês, 2 digitos com preenchimento de zero | 01 até 31

#D | Uma representação textual de um dia, três letras | Mon até Sun

#j | Dia do mês sem preenchimento de zero | 1 até 31

#l ('L' minúsculo) | A representação textual completa do dia da semana | Sunday até Saturday

#N | Representação numérica ISO-8601 do dia da semana | 1 (para Segunda) até 7 (para Domingo)

#S | Sufixo ordinel inglês para o dia do mês, 2 caracteres | st, nd, rd ou th. Funciona bem com j

#w | Representação numérica do dia da semana | 0 (para domingo) até 6 (para sábado)

#z | O dia do ano (começando com 0) | 0..365


/* Semana */ 
 
#W | Número do ano da semana ISO-8601, semanas começam na Segunda | Exemplo: 42 (a semana de número 42 do ano)

/* Mês */

#F | Uma representação completa do mês, como January ou March | January até December

#m | Representação numérica de um mês, com zeros à esquerda. | 01 a 12

#M | A representação textual curta de um mês, três letras. | Jan a Dec

#n | Representação numérica de um mês sem zeros à esquerda. | 1 a 12

#t | Número de dias de um dado mês | Entre 28 e 31j


/* Mes */

#L | Se está em um ano bissexto | 1 se está em ano bissexto, 0 caso contrário.

#o |  Número do ano ISO-8601. Este tem o mesmo valor como Y, exceto que se o número da semana ISO (W) pertence ao anterior ou próximo ano, o ano é usado ao invés. | Exemplos: 1999 ou 2003

#Y | Representação numérica de um ano, com 4 digitos. | Exemplos: 1999 ou 2003

#y | Representação numérica de um ano, com 2 digitos. | Exemplos: 99 ou 03



header('Content-Type: text/html; charset=utf-8');
function dataSaudacao()
{
    $diaSemana = array(
        1 => 'Segunda',
        2 => 'Terça',
        3 => 'Quarta',
        4 => 'Quinta',
        5 => 'Sexta',
        6 => 'Sábado',
        0 => 'Domingo'
    );

    $mesAno = array(
        1   => 'Janeiro',
        2   => 'Fevereiro',
        3   => 'Março',
        4   => 'Abril',
        5   => 'Maio',
        6   => 'Junho',
        7   => 'Julho',
        8   => 'Agosto',
        9   => 'Setembro',
        10  => 'Outubro',
        11  => 'Novembro',
        12  => 'Dezembro'
    );

    return $diaSemana[date('w')] . ", " . date('d') . " de " . $mesAno[date('n')] . " de " . date('Y');
}

// Imprime
echo dataSaudacao();

// Formato 'extenso'
echo "<br>Olá, hoje é <b>" . dataSaudacao() . ".</b> <br>";

// Formato 'abreviado'
echo "<br>Olá, hoje é <b>" . dataSaudacao('abreviado') . ".</b>";
echo "<br>";

echo '<strong>strtotime() Conversão de string para Date</strong>';
#Uma string pode ser convertida para uma data válida e isso é feito a partir da função strtotime(). Ela retorna um unix timestamp se houver sucesso. Caso contrário, retorna FALSE. Deve-se passar para essa função uma string contendo um formato de data em inglês (US). Além disso, é possível fazer pequenas operações de adição/subtração de forma muito dinâmica.

var_dump( date("d/m/Y", strtotime("20 August 2006")) ); // 20/08/2006
echo "<br>";
var_dump( date("d/m/Y", strtotime("+1 day")) ); // A data de amanhã
echo "<br>";
var_dump( date("d/m/Y", strtotime("+2 day")) ); // A data de depois de amanhã
echo "<br>";
var_dump( date("d/m/Y", strtotime("-2 day")) ); // A data de ontem
echo "<br>";
var_dump( date("d/m/Y", strtotime("+1 week")) ); // A data atual + semana
echo "<br>";
var_dump( date("d/m/Y H:i:s", strtotime("+2 week 3 days 4 hours 10 minutes 20 seconds")) ); // A data atual + 2 semanas, 3 dias, 4 horas 10 minutos e 20 segundos
echo "<br>";
var_dump( date("d/m/Y", strtotime("next Thursday")) ); // Próxima quinta-feira
echo "<br>";
var_dump( date("d/m/Y", strtotime("last Thursday")) ); // Última quinta-feira
echo "<br>";
var_dump( date("d/m/Y", strtotime("last day of june 2014")) ); // Último dia de junho de 2014
echo "<br>";
var_dump( date("d/m/Y", strtotime("last day of march")) ); // Último dia de março do ano atual
echo "<br>";
var_dump( date("d/m/Y", strtotime("first day of march")) ); // Primeiro dia de março deste ano.
echo "<br>";
var_dump( date("d/m/Y", strtotime("first day of +3 month")) ); // Primeiro dia do mês +3 (Se estiver em janeiro, vai retornar o primeiro dia de abril)
echo "<br>";
var_dump( date("d/m/Y", strtotime("today")) ); // Hoje.
echo "<br>";
var_dump( date("d/m/Y", strtotime("tomorrow")) ); // Amanhã
echo "<br>";
var_dump( date("d/m/Y", strtotime("2013-01-25 -5day")) ); // 20/01/2013
echo "<br>";



echo '<strong>Calculo de diferença de dias</strong>';
echo '<br>';

function diferencaDias($dataInicial, $dataFinal) {
    // Timestamp inicial e final (Faixa de datas)
    $timestamp_inicial = strtotime($dataInicial);
    $timestamp_final = strtotime($dataFinal);

    // Calcula a diferença de segundos entre as duas datas:
    $diferenca = $timestamp_final - $timestamp_inicial; // XX Segundos

    // Retorna a diferença de dias
    return (int) floor( $diferenca / (60 * 60 * 24)); // XX Dias
}

// Imprime

var_dump( diferencaDias("2013-01-10", "2013-02-10") ); // 31 dias

var_dump( diferencaDias("2013-04-10", "2013-05-10") ); // 30 dias

var_dump( diferencaDias("2013-11-11", "2013-12-25") ); // 44 dias