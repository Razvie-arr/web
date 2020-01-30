<?php
echo "<p class='greentext'>";
if(mysqli_close($link))
	echo "Connection closed";
echo "</p>";
?>