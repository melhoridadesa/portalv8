<?php

if($_GET) {
	$pagina = $_GET;
	//AQUI TEM UM PROBLEMA DE LOGICA
	// E SE O ARQUIVO NAO EXISTIR ?
	// file_exists
	if($pagina['pagina'] == 'faleconosco') {
		require_once 'FaleConosco.php';
	}
} else {
	require_once '404.php';
}