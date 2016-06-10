<?php
	require_once("session_start.php");

	

	   if (isset($_POST['submit'])) 
	{
						
				// print_r($_POST);
				// exit();
				if(!empty($_POST['check_list'])){

					$item = array();
				// Loop to store and display values of individual checked checkbox.
					foreach($_POST['check_list'] as $selected){

							if ($selected=='apple') {
								$item[] = array('name'=>$selected,'price'=>$_POST['value1']);

							}

							if ($selected=='banana') {
								$item[] = array('name'=>$selected,'price'=>$_POST['value2']);
							}

							if ($selected=='mango') {
								$item[] = array('name'=>$selected,'price'=>$_POST['value3']);
							}
					// echo $selected;

					
						$_SESSION['cart'] = array();
						// echo $selected."<br>";
						$_SESSION['cart'] = $item;
						

						 

					}
				// print_r($item);
				
				
				echo '<script>alert("Product added")
	     	window.location.href = "payment.php";
	     	</script>';			
				
				   
		
		

				
				
}}

 		
	 
	 



