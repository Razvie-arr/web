<html><head>
<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=Windows-1251">
<title>
Результаты
</title></head><body>
<?php
$name=$_POST['name'];
print "Привет, "." <b> $name </b> <p>\n";
$vib = [$_POST['1'], $_POST['2'], $_POST['3'], $_POST['4'], $_POST['5'], $_POST['6'], $_POST['7']];
print "Викторина закончилась";
$choice=["msk"=>true, "vi"=>true, "ier"=>true, "knb"=>true, "asu"=>true, "otta"=>true, "tiflis"=>true];
echo "<br>";
echo "</b>";
echo "<br>";


foreach ($vib as $key=>$value)
{
	if ($choice[$value])
		$kolvo+=1;
}
echo "<b>";
print "Количество правильных ответов: $kolvo";
echo "<br>";

switch ($kolvo)
{
	case 0:
		print ("Вы не ответили верно ни на один вопрос! Жаль вас.");
		echo "<br>";
		break;
	case ($kolvo>=1 and $kolvo<=3):
		print ("Ответили вы так себе.");
		echo "<br>";
		break;
	case ($kolvo>=4 and $kolvo<=5):
		print ("Неплохо");
		echo "<br>";
		break;
	case ($kolvo>=6 and $kolvo<=7):
		print ("Супер! Красава");
		echo "<br>";
		break;
}
$otv=["Москва", "Вена", "Иерусалим", "Канберра" ,"Асуньсон", "Оттава", "Тбилиси"];
echo "<br>";
foreach ($otv as $key=>$value)
	{
		$key+=1;
		echo "Ответ на вопрос номер $key - ", $value;
		echo "<br>";
		switch ($vib[$key-=1])
		{
			case "msk":
				print "Ваш ответ: $otv[0]" . "<br>" . "Верно!";
				break;
			case "vi":
				print "Ваш ответ: $otv[1]" . "<br>" . "Верно!";
				break;
			case "ier":
				print "Ваш ответ: $otv[2]" . "<br>" . "Верно!";
				break;
			case "knb":
				print "Ваш ответ: $otv[3]" . "<br>" . "Верно!";
				break;
			case "asu":
				print "Ваш ответ: $otv[4]" . "<br>" . "Верно!";
				break;
			case "otta":
				print "Ваш ответ: $otv[5]" . "<br>" . "Верно!";
				break;
			case "tiflis":
				print "Ваш ответ: $otv[6]" . "<br>" . "Верно!";
				break;
			case "nsk":
				print "Ваш ответ: Новосибирск";
				break;
			case "ykt":
				print "Ваш ответ: Якутск";	
				break;
			case "drd":
				print "Ваш ответ: Дрезден";
				break;
			case "bro":
				print "Ваш ответ: Братислава";	
				break;
			case "yo":
				print "Ваш ответ: Йошкар-Ола";	
				break;
			case "tel":
				print "Ваш ответ: Тель-Авив";	
				break;
			case "sid":
				print "Ваш ответ: Сидней";	
				break;
			case "mbr":
				print "Ваш ответ: Мельбурн";	
				break;
			case "pos":
				print "Ваш ответ: Посадас";	
				break;
			case "ba":
				print "Ваш ответ: Буэнос-Айрес";	
				break;
			case "tor":
				print "Ваш ответ: Торонто";	
				break;
			case "vank":
				print "Ваш ответ: Ванкувер";	
				break;
			case "erev":
				print "Ваш ответ: Ереван";	
				break;
			case "kutois":
				print "Ваш ответ: Кутаиси";	
				break;
		}

		echo "<br>";
		echo "<br>";
	}

?>


</body>
</html>