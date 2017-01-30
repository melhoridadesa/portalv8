<?php

class App
{
	private $page = null;

	public function __construct($param)
	{
		$this->page = $param;
	}

	public function getArrPage()
	{
		return $this->page;
	}

	public function getPage()
	{
		$page = ucwords($this->page['page']);
		require_once "$page.php";
	}
}