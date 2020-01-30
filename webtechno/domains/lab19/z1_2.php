<html> <head>
<title> Чтение данных формы
</title> </head> <body>
<?php
$q=$_POST["0"];
$a=$_POST["1"];
$b=$_POST["2"];
print "<body>";
print "<p><table border=1 width=100 height=100 align=center></p>";
echo "<tr align=$a valign=$b>";
echo "<td>";
echo "<font color=$q>";
echo "Текст";
echo "</font>";
echo "</td>";
echo "</tr>";
echo "</table>";
print "<p align=center><a href='z1_1.html'>назад</a>";
?>
</body> </html>

