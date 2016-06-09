<!DOCTYPE html>
<html>
<body>

<?php
require_once("session_start.php");
// Echo session variables that were set on previous page
foreach($_SESSION['cart'] as $item)
{
    echo "Your Procucts" .$item."<br>";
}

?>

</body>
</html>