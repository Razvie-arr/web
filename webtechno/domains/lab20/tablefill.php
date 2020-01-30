<html>
<head>
<title> Заполнение таблицы </title> </head>
<body>
<?php
$database="forlaba";
$table="vladmitya";
$link = mysqli_connect ('localhost', 'root', '');
if (!$link) {"No connect with MySQLi";}
mysqli_select_db($link, $database) 
or die ("Can\'t open: $database: " .mysqli_error($link));
$query = "INSERT INTO $table (id, Имя, Город, адрес, День_рождения, Мыло)
VALUES('1', 'Бястинов Влад', 'Якутск', 'Lermontova 49', '1998-07-31','razvie-arr@mail.ru'), 
('2', 'Юзов Митя', 'Новосибирск', 'Мочище', '1998-12-10', 'mindfure@yandex.ru'),
('3', 'Новикова Кристина', 'Братск', 'Четвертая общага', '1998-07-10', 'lyublyukuznetsova@mail.ru'),
('4', 'Толоконникова Надежда', 'Новосибирск', 'Вроде на Заельцовке', '1998-12-10', 'marhasinonelove@yandex.ru')
";
mysqli_query($link, $query)
or die ("Can\'t fill $table: " .mysqli_error($link));
echo "<p> Data filled to $table succesfully";
mysqli_close($link);
?>
</body> </html>