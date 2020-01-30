<?php
$link = mysqli_connect("localhost", 'root', '');
if (!$link ) 
	die ("Not connected to MySQLi");
$database='forlaba';
mysqli_select_db($link, $database) or die ('Can\'t open $database');
print "Connected successfully";
$drop = "drop table if exists orders";
$table="create table orders(
id int not null auto_increment,
primary key(id),
Имя_потребителя varchar(50),
Наименование_заказа varchar(50),
Стоимость int(50),
Адрес varchar(50),
Дата_заказа date,
Время_заказа time
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