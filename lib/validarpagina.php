<?php

class ValidarPagina
{
	public $validateTotal;
	public $validatePage;

	public function __construct(App $app)
	{
		$this->validateTotal = (bool)$app->getArrPage();
		$this->validatePage = array_key_exists('page', $app->getArrPage());
	}

	public function pageExists($page)
	{
		$pagina = ucwords($page['page']);
		return file_exists("$pagina.php");
	}
}