<?php
	$num_goods = 0;
	session_start();

	if($_POST['goods'] != ''){
		$arr = $_SESSION['basket'];
		$arr[count($arr)] = $_POST['goods'];
		$_SESSION['basket'] = $arr;
		$num_goods = count($arr);
	}
	
	require_once('shop.html');
?>