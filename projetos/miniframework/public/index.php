<?php

	require_once "../vendor/autoload.php";

	$route = new \App\Route;	//Route está contido dentro desse namespace

	echo 'tudo certo';
	echo '<hr>';
	print_r($route->getUrl());
	echo '<hr>';
	echo '<pre>';
	print_r($route->getRoutes());
	echo '</pre>';

?>