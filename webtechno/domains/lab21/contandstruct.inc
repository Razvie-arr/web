<?php
function content($table)
{
	
	$eng_names=['id' => 'id', 'Название' => 'Title', 'Авторитет' => 'autority', 'Местоположение' => 'Place', 'Ценовая_категория' => 'Price Category', 'Количество_товара' => 'Quantity of Goods', 'Имя' => 'Name', 'Делал_ли_эту_лабу' => 'Did this lab', 'Размер_пуза' => 'Stomach size','Оплата' => 'Payment', 'Красавчик_ли' => 'Krasavchik', 'Имя_потребителя' => 'Customer\'s name', 'Наименование_заказа' => 'Order\'s title', 'Стоимость' => 'Price', 'Адрес' => 'Address', 'Дата_заказа' => 'Date', 'Время_заказа' => 'Time'];
	echo "<br>";
	$user = 'root';
	$pass = '';
	$database = 'forlaba';
	$link = mysqli_connect("localhost", $user, $pass);
	if (! $link ) die("Not connected to MySQLi");
	mysqli_select_db($link, $database) or die ("Can\'t open $database: ".mysqli_error());
	if ($result = mysqli_query ($link, "SELECT * FROM $table"));
		{
		$field_cnt = mysqli_num_fields($result);
		$rez = mysqli_query($link, "SELECT COUNT(*) as total FROM $table");
		$num_rows=mysqli_fetch_assoc($rez);
		if ($num_rows>4)
			print ("Таблица содержит $num_rows[total] строк и $field_cnt полей");
		else
			print ("Таблица содержит $num_rows[total] строки и $field_cnt полей");
	echo "<p>";
	echo ("<h4>Контент таблицы \"$table\": </h4>");
	echo "</p>";
		print "<p><table border=1>";
		print "<tr>";
		for ($x=0; $x<$field_cnt; $x++)
			{
				$finfo = mysqli_fetch_field_direct ($result, $x);
				foreach ($eng_names as $key => $value)
					{
					if ($finfo->name == $key)
					print "<th> $value <br> $finfo->name </th>";
					}
			}
		print "</tr>";
		while ($a_row = mysqli_fetch_row($result))
			{
			print "<tr>";
			foreach ($a_row as $field) 
			print "<td>$field</td>";
			print "</tr>";
			}
		print "</table> </p>";
		mysqli_close($link);
		}
	echo "<br>";
	
}
function structure($table)
	{
	echo "<p>";
	echo ("<h4>Структура таблицы \"$table\": </h4>");
	echo "</p>";
	echo "<p><table border=1>";
	$user = 'root';
	$pass = '';
	$database = 'forlaba';
	$link = mysqli_connect("localhost", $user, $pass);
	if (! $link ) die ("Not connected to MySQLi");
	mysqli_select_db($link, $database) or die ("Can\'t open $database: ".mysqli_error());
	$query = "SHOW COLUMNS FROM $table";
	$rez = mysqli_query($link, $query);
	while($row = mysqli_fetch_assoc($rez))
		{
		echo "<tr>";
		echo "<td>" . $row["Field"] . "&nbsp;" . "</td>";
		echo "<td>" .$row["Type"] . "<br />". "</td>"; 
		echo "</tr>";
		}
	echo "</p></table>";
	}		
	
?>
