<?php
	session_start();
	$basket = $_SESSION['basket'];

	$goods = array("g1" => "Мастер и Маргарита (Михаил Булгаков)", "g2" => "1984 (Джордж Оруэлл)", "g3" => "Мартин Иден (Джек Лондон)", 
		"g4" => "Сто лет одиночества (Габриэль Гарсиа Маркес)", "g5" => ">Сага о Ведьмаке (Анджей Сапковский)", "g6" => "451 градус по Фаренгейту (Рэй Брэдбери)", 
		"g7" => "Автостопом по галактике (Дуглас Адамс)", "g8" => "inDriver: от Якутска до Кремниевой долины (Арсен Томский)");

	echo "<h3> Корзина: </h3>";
	echo "<ul>";
	for ($i=0; $i < count($basket); $i++) { 
		echo "<li>";
		echo $goods[$basket[$i]];
		echo "</li>";
	}
	echo "</ul>";
	echo "<p><a href='/index.php'>Назад</a></p>";
?>