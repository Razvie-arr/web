<html>
<head>
<title>
Обработка файла
</title>
<body>
<?php
include "link.inc";
$file = 'vladmitya.txt';
$table = 'vladmitya';
if (is_file ($file))
{	
	print "Файл $file уже существует";
	print "<br>";
	$fp = fopen ($file, "w");
	print "Файл $file открыт для записи";
}
else 
{
	touch ($file);
	print "Файл $file создан";
	print "<br>";
	$fp = fopen ($file, "w");
	print "Файл $file открыт для записи";
};
echo "<br>";
$ymd = date ('Y-m-d');
$dmy = date ('d-m-Y');
$query = "SELECT * FROM $table";
$result = mysqli_query($link, $query);
while ($a = mysqli_fetch_array($result))
	fwrite ($fp, "$a[Имя]" . " | " . "$a[Город]" . " | " . "$a[Адрес]" . " | " . date('d-m-Y', strtotime("$a[День_рождения]")) . " | " . "$a[Мыло]" . "\n");

include "endofdatabase.inc";
?>
</body>
</html>