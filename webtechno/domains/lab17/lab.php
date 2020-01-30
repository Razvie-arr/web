<?php
$lang=(isset($_GET['lang'])) ? $_GET ['lang']: null;
$color=(isset($_GET['color'])) ? $_GET ['color']: null;
function Ru($color)
{
	echo "<strong style='color: $color;'> Здравствуйте!</strong>";
}
function En($color)
{
	echo "<strong style='color: $color;'> Hello!</strong>";
}
function De($color)
{
	echo "<strong style='color: $color;'> Guten tag!</strong>";
}
function Fr($color)
{
	echo "<strong style='color: $color;'> Bonjour!</strong>";
}

if ($lang == 'ru')
	Ru($color);
elseif ($lang == 'en')
	En($color);
 elseif ($lang == 'de')
	De($color);
elseif ($lang == 'fr')
	Fr($color);
?>	