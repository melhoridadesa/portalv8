<?php

//Responsavel por carregar as classes do sistema
require_once 'lib/app.php';
require_once 'lib/validarpagina.php';

//Singleton
$app = new App($_GET);

//Pagina do portal
$page = new ValidarPagina($app);

if($page->validateTotal && $page->validatePage) {
	if($page->pageExists($app->getArrPage())) {
		$contentBlock = $app->getPage();
	}
}