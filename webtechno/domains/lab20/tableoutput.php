<html> <head>
<title> Вывод записей таблицы
</title> </head> <body>
<?php
$user = 'root';
$pass = '';
$database = 'forlaba';
$table = 'vladmitya';
$link = mysqli_connect("localhost", $user, $pass);
if (! $link ) die("Not connected to MySQLi");
mysqli_select_db($link, $database) or die ("Can\'t open $database: ".mysql_error());
if ($result = mysqli_query ($link, "SELECT * FROM $table"));
	{
	$field_cnt = mysqli_num_fields($result);
	$rez = mysqli_query($link, "SELECT COUNT(*) as total FROM $table");
	$num_rows=mysqli_fetch_assoc($rez);
	if ($num_rows>4)
		print ("Таблица содержит $num_rows[total] строки и $field_cnt полей");
	else
		print ("Таблица содержит $num_rows[total] строк и $field_cnt полей");
	print "<p><table border=1>";
	print "<tr>";
	for ($x=0; $x<$field_cnt; $x++)
		{
			$finfo = mysqli_fetch_field_direct ($result, $x);
			print "<th> $finfo->name </th>";
		}
	print "</tr>";
	while ($a_row = mysqli_fetch_row($result))
		{
		print "<tr>";
		foreach ($a_row as $field) 
		print "<td>$field</td>";
		print "</tr>";
		}
	print "</table>";
	mysqli_close($link);
	}

?>
</body>
