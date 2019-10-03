<?php

// Nome do arquivo
$nomeArquivo = "cursos.txt";

// Abre o arquivo apenas para leitura
$arquivo = fopen ($nomeArquivo, "r");

if( $arquivo )
{
    // Lê todo o conteúdo do arquivo
    $conteudo = fread ($arquivo, filesize($nomeArquivo));

    // Imprime na tela
    echo nl2br($conteudo); // Troca quebras de linha pela tag HTML de quebra de texto <br>
}
else
{
    // Em caso de erro na leitura do arquivo
    echo "Não foi possível abrir o arquivo.";
}

// Finaliza a operação com o arquivo
fclose($arquivo);