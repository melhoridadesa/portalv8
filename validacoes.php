<?php

function validarNome($nome)
{
	return (is_string($nome) && !is_null($nome) && (bool)$nome);
}

function validarCelular($celular)
{
	$retirar = array('/', '-', '(', ')', ' ');
	$celularLimpo = str_replace($retirar, "", $celular);

	return (is_numeric($celularLimpo) && !is_null($celularLimpo) && (bool)$celularLimpo);
}