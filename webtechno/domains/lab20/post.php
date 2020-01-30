<html> <head>
<title> Добавление в базу данных, введенных пользователем
</title> </head> <body>
<?php
function Add_to_database ($FIO, $DATA_R, $mail, &$dberror)
{
$user = "root";
$pass = "";
$db = "forlaba";
$table = "vladmitya";
$conn = mysql_connect("localhost", $user, $pass);
if (!$conn )
{ $dberror = "Нет соединения с MySQL сервером";
return false; }
if (! mysql_select_db($db, $conn))
{ $dberror = mysql_error();
return false;
}
$query = "INSERT INTO $table (FIO, DATA_R, mail) VALUES('$FIO', '$DATA_R',
'$mail')";
if (! mysql_query($query, $conn))
{ $dberror = mysql_error();
return false;
}
return true;
}
function Write_form()
{
global $PHP_SELF;
print "<form action='$PHP_SELF' method='POST'>";
print "<p>Введите фамилию: ";
print "<input type='text' name='FIO'> ";
print "<p>Введите дату рождения: \n";
print "<input type='text' дату рождения name='DATA_R'> ";
print "<p>Введите ваш e-mail: ";
print "<input type='text' name='mail'> ";
print "<p><input type='submit' value='Записать! '>
</form>\n";
}
if (isset($FIO) && isset($DATA_R) && isset($mail) )
{// Проверяем, что вводит пользователь!
// Ввод данных в таблицу
$dberror = "";
$ret = Add_to_database ($FIO, $DATA_R, $mail,$dberror);
if (!$ret)
{print "Ошибка: $dberror<br>";}
else {print "Данные записаны!";
$id = mysql_insert_id();
print "<p>Номер записи-".$id."<br>";
}
}
else
Write_form();
?> </body> </html>