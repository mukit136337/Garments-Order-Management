<?php
session_start();
require_once 'system.helper.php';

spl_autoload_register('myAutoLoader');

function myAutoLoader ($className) {
	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$extention = '.class.php';

	if (strpos($url, 'includes') != false) {
		$path = '../model/';
	} elseif (strpos($url, 'templates') != false) {
		$path = '../model/';
	} else {
		$path = '../model/';
	}

	


	
	
	// echo "$path";
	require_once $path . $className . $extention;
	// include("{$_SERVER['DOCUMENT_ROOT']}model/" . $className . $extention);
	
}