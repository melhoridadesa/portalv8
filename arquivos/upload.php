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

if($_FILES) {
    if(validaArquivo($_FILES['arquivo']['name']))
    {
        //Criar uma função para o upload
        //Essa função deve validar se já existe o arquivo com o nome passado
        //Se tudo estiver OK exibe em tela Arquivo enviado com sucesso!
        criarPasta('files');
        $file = move_uploaded_file($_FILES['arquivo']['tmp_name'], 'files/teste.jpg');
        var_dump($file);
    }
}