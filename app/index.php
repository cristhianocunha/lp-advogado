<?php
header("Content-Type: text/html; charset=UTF-8");

$caminho_html = __DIR__ . '/views/index.html';

if (file_exists($caminho_html)) {
    // Carrega e exibe o conteúdo do arquivo
    readfile($caminho_html);
} else {
    // Caso o arquivo não exista
    echo "Erro: O arquivo index.html não foi encontrado.";
}
