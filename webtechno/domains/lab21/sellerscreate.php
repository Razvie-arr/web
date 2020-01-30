<?php
$link = mysqli_connect("localhost", 'root', '');
if (!$link ) 
	die ("Not connected to MySQLi");
$database='forlaba';
mysqli_select_db($link, $database) or die ('Can\'t open $database');
print "Connected successfully";
$drop = "drop table if exists sellers";
$table="create table Sellers(
id int not null auto_increment,
primary key(id),
Название varchar(50),
Авторитет varchar(100),
Местоположение varchar(50),
Ценовая_категория  varchar(50),
Количество_товара int(30)
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