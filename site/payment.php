<!DOCTYPE html>
<html>
<body>

<?php
require_once("session_start.php");
// Echo session variables that were set on previous page

echo "<h3>List of selected product</h3>";

	foreach($_SESSION['cart'] as $item)
	{	
				foreach($_SESSION['price'] as $price)
				{
	   				echo "<li><ol>".$item." and its price .$price</ol></li><br>";
				}
	}



?>

</body>
</html>