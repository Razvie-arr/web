<?php
	$num_goods = 0;
	session_start();

	if(!isset($_SESSION['basket']))
		$_SESSION['basket'] = array();
	else
		$num_goods = count($_SESSION['basket']);
	require_once('shop.html');
?>