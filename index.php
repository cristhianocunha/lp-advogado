<?php

$htmlFile = __DIR__ . '/views/index.html';

if (file_exists($htmlFile)) {

    include($htmlFile);
} else {
    echo "Erro: O arquivo index.html não foi encontrado.";
}
// env('APP_SERVER')