<?php
$colnum;
echo("<table border=1 margin=0 width=80% height=80%>");
echo("<tr>");
echo("<th>*</th>");
for($k=1;$k<31;$k++)
{
   echo("<td align='center' width=15px height=15px><b>".$k."</b></td>");  
}
echo("</tr>");
for($i=1;$i<31;$i++)
{
	echo("<tr>");
	echo("<td align='center' width=15px height=15px><b>".$i."</b></td>");
	for($k=1;$k<31;$k++)
		{	
			
			$colnum=($i*$k)%7;
			switch ($colnum)
			{
				case 0:
					$color='white';
					break;
				case 1:
					$color='aqua';
					break;
				case 2:
					$color='blue';
					break;
				case 3:
					$color='yellow';
					break;
				case 4:
					$color='purple';
					break;
				case 5:
					$color='red';
					break;	
				case 6:
					$color='lime';
					break;
			}
			echo("<td align='center' bgcolor=$color width=15px height=15px size=1>"."&nbsp"."</td>");
		}
   echo("</tr>");
};
echo("</table>");


?>