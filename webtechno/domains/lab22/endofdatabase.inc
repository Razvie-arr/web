<?php
echo "<p style='color:green'>";
if(mysqli_close($link))
	echo "Connection closed";
echo "</p>";
?>