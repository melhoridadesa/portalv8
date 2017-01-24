<?php
function validaArquivo($arquivo)
{
    $extensao = explode(".", $arquivo);
    $tipoDoArquivo = end($extensao);
    return ($tipoDoArquivo == 'jpg');
}

function criarPasta($pasta)
{
    if(!file_exists("./{$pasta}")) {
        mkdir("./{$pasta}");
    }
}

function moveArquivo($arquivo, $nomeDoArquivo)
{
    if(!file_exists($nomeDoArquivo)) {
        return move_uploaded_file($arquivo, "files/{$nomeDoArquivo}.jpg");
    }
}

if($_FILES) {
    if(validaArquivo($_FILES['arquivo']['name']))
    {
        criarPasta('files');
        if(moveArquivo($_FILES['arquivo']['tmp_name'], 'teste')) {
            echo 'Arquivo criado com sucesso!';
        }
    }
}