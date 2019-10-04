<?php

#O nowdoc é para o heredoc o que as aspas simples (‘ ‘) são para as aspas duplas (“ “). No nowdoc o texto é impresso da forma que foi digitado, sem intervenção do interpretador.'

$inserindoHereDoc = 'Exemplo de Usuio HereDoc';
$dados = <<<XML
 {$inserindoHereDoc}
    <curso>
        <nome>PHP Intermediário</nome>
        <categoria>Programação</categoria>
    </curso>

    <curso>
        <nome>PHP Avançado</nome>
        <categoria>Programação 
       </categoria>
    </curso>
    <br>
XML;

echo $dados;


$inserindoHereDoc = 'Exemplo de Usuio NowDOc';
$dados = <<<'XML'
{$inserindoHereDoc}
    <curso>
        <nome>PHP Intermediário</nome>
        <categoria>Programação</categoria>
    </curso>

    <curso>
        <nome>PHP Avançado</nome>
        <categoria>Programação 
        </categoria>
    </curso>
    
XML;

echo $dados;

