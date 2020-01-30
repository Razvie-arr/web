<html>
<head>
<title> Заполнение таблицы </title> </head>
<body>
<?php
$database="forlaba";
$table="Orders";
$link = mysqli_connect ('localhost', 'root', '');
if (!$link) {"No connect with MySQLi";}
mysqli_select_db($link, $database) 
or die ("Can\'t open: $database: " .mysqli_error($link));
$query = "INSERT INTO $table (id, Имя_потребителя, Наименование_заказа, Стоимость, Адрес, Дата_заказа, Время_заказа
)
VALUES('1', 'Бястинов Влад', 'Альфредо из Папы Джонс', '500', 'Сакко и Ванцетти 31/1','2019-12-02', '0:51:00'),
('2', 'Юзов Митя', 'Большую из Гриль Хауса', '250', 'Либо около Мочище, либо у бабушки','2019-12-02', '0:54:00'),
('3', 'Новикова Кристина', 'Вкусная без халапеньо из Горчицы', '180', 'подгоните к четверке','2019-12-02', '0:55:00'),
('4', 'Толоконникова Надежда', 'Вкусная без халапеньо из Горчицы', '180', 'На линии метро','2019-12-02', '0:55:00')
";
mysqli_query($link, $query)
or die ("Can\'t fill $table: " .mysqli_error($link));
echo "<p> Data filled to $table succesfully";
mysqli_close($link);
?>
</body> </html>