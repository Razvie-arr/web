<html> <head>
<title> Самовызов
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
print "<p align=center><a href='lab6_1.html'>назад</a>";
?>
<p><b>Выберите цвет:</b>
<form action="<?print$PHP_SELF?>" method="POST">
<p><input type="radio" name="0" value="red">red
<p><input type="radio" name="0" value="blue">blue
<p><input type="radio" name="0" value="green">green
<p><b>Выберите расположение по горизонтали</b>
<p><input type="radio" name="1" value="left" checked>left
<p><input type="radio" name="1" value="center">center
<p><input type="radio" name="1" value="right">right
<p><b>Выберите расположение по вертикали</b>
<p><input type="radio" name="2" value="top" checked>top
<p><input type="radio" name="2" value="middle">middle
<p><input type="radio" name="2" value="bottom">bottom
<p><input type="submit" value="Выполнить">
</body> </html>

