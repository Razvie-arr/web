<?php
$treug=[];
$kvd=[];
$n=1;
echo "Треугольные числа: ";
for ($i=0; $i<=9; $i++)
	{
		$x=($n*($n+1)/2);
		$y=($n*$n);
		$n++;
		$treug[]=$x;
		echo $treug[$i] . "  ";
		$kvd[]=$y;
	}
echo "<br>"."Квадраты чисел: ";
foreach ($kvd as $value)
{
	$value=$value . "  ";
	echo $value;
}
echo "<br>"."Объединенный массив: ";
$rez=array_merge($treug, $kvd);
foreach ($rez as $value)
{
	$value=$value . "  ";
	echo $value;
}
echo "<br>"."Отсортированный массив: ";
asort($rez);
foreach ($rez as $value)
{
	$value=$value . "  ";
	echo $value;
}
array_shift($rez);
echo "<br>"."Без первого элемента: ";
foreach ($rez as $value)
{
	$value=$value . "  ";
	echo $value;
}
echo "<br>" . "Без повторяющихся чисел: ";
$rez1=array_unique($rez);
foreach ($rez1 as $value)
{
	$value=$value . "  ";
	echo $value;
}
?>