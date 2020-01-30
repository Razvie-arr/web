<?php
$link = mysqli_connect("localhost", 'root', '');
if (!$link ) 
	die ("Not connected to MySQLi");
$database='forlaba';
mysqli_select_db($link, $database) or die ('Can\'t open $database');
print "Connected successfully";
$drop = "drop table if exists vladmitya";
$table="create table vladmitya(
id int not null auto_increment,
primary key(id),
Имя varchar(50),
Город varchar(50),
Адрес varchar(50),
День_рождения DATE,
Мыло varchar(50)
)";
echo "<br>";
if (mysqli_query($link, $drop))
	echo "Last table deleted";
else
	echo "Fail to delete table";
echo "<br>";
if (mysqli_query($link, $table))
	echo "New table created";
else
	echo "Fail to create table";


mysqli_close($link);
?>