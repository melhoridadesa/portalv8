<?php

function __autoload($class)
{
	if(!file_exists($class)) {
		require_once strtolower("$class.php");
	}
}