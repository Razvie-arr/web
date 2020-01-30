<?php

$host='localhost';
$user='root';
$pass='';
$link = mysqli_connect($host, $user, $pass);
if (!$link ) 
	die ("Not connected to MySQLi");
$database='forlaba';
if (mysqli_select_db($link, $database) or die ('Can\'t open $database'))
	print "<p style='color:green';>Connected successfully</p>";
?>