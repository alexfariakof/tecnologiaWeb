<?php

// Codificação de caracteres da página
header('Content-Type: text/html; charset=utf-8');

// Abre o arquivo somente para escrita
$arquivo = fopen("cursos.txt", "a");

// Sucesso ao abrir o arquivo?
if ($arquivo)
{
    // Escreve no arquivo
    for($i=1; $i<20; $i++) {
        $conteudo = "Curso {$i}" . PHP_EOL;
        fwrite($arquivo, $conteudo);
    }

    // Escreve que a operação de escrita foi finalizada
    echo "Arquivo criado. Operação de escrita finalizada.";
}
else
{
    // Em caso de erro
    echo "Erro ao abrir o arquivo.";
}

// Finaliza as operações com o arquivo
fclose($arquivo);

