<?php
$link = mysqli_connect("localhost", 'root', '');
if (!$link ) 
	die ("Not connected to MySQLi");
$database='forlaba';
mysqli_select_db($link, $database) or die ('Can\'t open $database');
print "Connected successfully";
$drop = "drop table if exists customers";
$table="create table Customers(
id int not null auto_increment,
primary key(id),
Имя varchar(50),
Делал_ли_эту_лабу varchar(50),
Размер_пуза varchar(50),
Оплата varchar(50),
Красавчик_ли varchar(50)
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