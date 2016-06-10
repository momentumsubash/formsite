<!DOCTYPE html>
<html>
<body>


<h1 align="center">Product Page</h1>
<?php
require_once("session_start.php");
// Echo session variables that were set on previous page

echo "<h3>List of selected product</h3>";

		
	foreach ($_SESSION["cart"] as $cart_itm)
        {
            //set variables to use in content below
            $item = $cart_itm["name"];
            $price = $cart_itm["price"];

            
            echo "<li><ol>"."Product name ::&nbsp<b>".$item."&nbsp</b>". "And its price::&nbsp<b>".$price." </b></ol></li><br>";

        }

      

?>

</body>
</html>