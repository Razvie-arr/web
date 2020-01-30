<html>
<head>
<title> Заполнение таблицы </title> </head>
<body>
<?php
$database="forlaba";
$table="Customers";
$link = mysqli_connect ('localhost', 'root', '');
if (!$link) {"No connect with MySQLi";}
mysqli_select_db($link, $database) 
or die ("Can\'t open: $database: " .mysqli_error($link));
$query = "INSERT INTO $table (id, Имя, Делал_ли_эту_лабу, Размер_пуза, Оплата, Красавчик_ли)
VALUES('1', 'Бястинов Влад', 'Да', 'Чуть больше среднего', 'Безналичные','Самый красава из красав'), 
('2', 'Юзов Митя', 'Конечно', 'Среднее', 'Наличка (обитает в средневековье)','Тоже вроде не лох'),
('3', 'Новикова Кристина', 'Без комментариев', 'Норм вроде', 'Безналичные', 'Лох потому что не делала'),
('4', 'Толоконникова Надежда', 'Без комментариев', 'Норм вроде', 'Безналичные', 'Лох потому что не делала')
";
mysqli_query($link, $query)
or die ("Can\'t fill $table: " .mysqli_error($link));
echo "<p> Data filled to $table succesfully";
mysqli_close($link);
?>
</body> </html>