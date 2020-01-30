<html>
<head>
<title>
Обработанные данные
</title>
<?php
$structsellers = $_GET['stsel'];
$contentsellers = $_GET['consel'];
$structcustomers = $_GET['cussel'];
$contentcustomers = $_GET['concus'];
$structorders = $_GET['stord']; 
$contentorders = $_GET['conord'];
$mass = [$_GET['stsel'], $_GET['consel'], $_GET['stcus'], $_GET['concus'], $_GET['stord'], $_GET['conord']];
$cus = "Customers";
$sel = "Sellers";
$ord = "Orders";
include "css.inc";
include "link.inc";
include "contandstruct.inc";
if ($mass[0] == 'on')
	structure($sel);
if ($mass[1] == 'on')
	content($sel);
if ($mass[2] == 'on')
	structure($cus);
if ($mass[3] == 'on')
	content($cus);
if ($mass[4] == 'on')
	structure($ord);
if ($mass[5] == 'on')
	content($ord);
$s=0;
foreach ($mass as $key => $value)
{
	if (empty($mass[$key]))
		$s+=1;
}
if ($s == '6')
	echo "You didn't push any button";
include "hyper.inc";
include "endofdatabase.inc";
?>
</body>