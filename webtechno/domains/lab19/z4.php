<?php

$list_sites = ['https://www.yandex.ru', 'https://www.google.com', 'https://yahoo.com/'];
$site1='';   
foreach($list_sites as $val)
{
	$listing .= '<option value='.$val.'>'.$val.'</option>';
}
$html = '
	<form action="" method="post" />
		<select name="site">
			'.$listing.'
        </select>
    <input type="submit" value="Перейти" />
    </form>
		';
     
if($_POST['site'])
{
	$site = $_POST['site'];
	header("Location: $site");
	exit($site);
	
}
if (empty($site1))
	echo $html;
else
	header("Location: $site1");
	
	
    
    
?>
