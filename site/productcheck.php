<?php
	require_once("session_start.php");

	

	   if (isset($_POST['submit'])) 
	{
						
				
				
				$products= array($_POST['apple'],$_POST['banana'],)
				$prices= array($_POST['value1'],$_POST['value2'],)

				
				foreach ($products as $value) {
				    

				    

						    $_SESSION['cart'] = array();
							$_SESSION['cart'][] = $products;

							$_SESSION['price'] = array();
							$_SESSION['price'][] = $prices;

				    }
				    


				 
				    
				}
		

		// $check=array(	'apple' => $_POST['apple'], 
		// 		'price' => $_POST['value1']
		// 	);
		// $apple=$check['apple'];
		// $price1=$check['price'];

		
		// $_SESSION['cart'] = array();
		// $_SESSION['cart'][] = $apple;

		// $_SESSION['price'] = array();
		// $_SESSION['price'][] = $price1;

		


		// $_SESSION['cart'][] = $_POST['banana'];
		// $_SESSION['cart'][] = $_POST['orange'];
		// $_SESSION['price'] = array();
		

		


		

		echo '<script>alert("Product added")
	     	window.location.href = "payment.php";
	     	</script>'; 
	}

 		
	 
	 



