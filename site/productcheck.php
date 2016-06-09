<?php
	require_once("session_start.php");

	

	   if (isset($_POST['submit'])) 
	{
		$_SESSION['cart'] = array();
		$_SESSION['cart'][] = $_POST['name'];
		

		echo '<script>alert("Product added")
	     	window.location.href = "payment.php";
	     	</script>'; 
	}

 		
	 
	 



