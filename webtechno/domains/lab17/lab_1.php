<?php
global $size;
function Weekday($day, $color)
{
		if ($day=='pn')
		{
			$size=7;
			echo "<font size=$size color=$color> Понеdieльник</font>";
		}
		if ($day=='vt')
		{
			$size=6;
			echo "<font size=$size color=$color> вТОРник</font>";	
		}
		if ($day=='sr')
		{
			$size=5;
			echo "<font size=$size color=$color> Один</font>";
		}
		if ($day=='ct')
		{
			$size=4;
			echo "<font size=$size color=$color> Четверг</font>";
		}
		if ($day=='pt')
		{
			$size=3;
			echo "<font size=$size color=$color> Питница</font>";
		}
		if ($day=='sub')
		{
			$size=2;
			echo "<font size=$size color=$color> Шоубота</font>";
		}
		if ($day=='vskr')
		{
			$size=1;
			echo "<font size=$size color=$color> Восресенье</font>";
		}
}
Weekday(pn,red);
echo "<br>";
Weekday(vt,blue);
echo "<br>";
Weekday(sr,green);
echo "<br>";
Weekday(ct,black);
echo "<br>";
Weekday(pt,brown);
echo "<br>";
Weekday(sub,pink);
echo "<br>";
Weekday(vskr,orange);
echo "<br>";
?>