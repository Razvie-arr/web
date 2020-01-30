<html>
<head>
<title>
Обработка файла
</title>
<body>
<table border=1 padding = 10>
<?php
include "link.inc";
$file = 'vladmitya.txt';

if (is_file ($file))
{	
	print "Файл $file уже существует" . "<br>";
    print "<br>";
    $fp = fopen("$file", "r");
    $lines = file($file);
    
    foreach ($lines as $value)
    {
        echo "<tr>";
        echo "<td>";
        $newval = rtrim ($value, " | \n");
        $pattern = '|';
        $replacement = '</td><td>';
        $rez1 = str_replace ($pattern, $replacement, $newval);
        $pat = '/(\S+)@([а-яА-ЯёЁa-zA-Z0-9.-]+)/is';
        $rep = '<a href="mailto:$0">$0</a>';
        echo preg_replace ($pat, $rep, $rez1); 
        echo "</tr>";
        echo "</td>";
        
    }
    echo "</table>" . "<br>";
    $true_time = filemtime($file) + (9 * 60 * 60);
    echo "Файл $file в последний раз был изменен: " . date("F d Y H:i:s.", $true_time);
}
else 
    print "Файл $file отсутствует";



include "endofdatabase.inc";
?>
</body>
</html>