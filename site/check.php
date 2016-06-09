<?php

if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['username']) 	||
   empty($_POST['password'])	||
   empty($_POST['file'])		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

	if (isset($_POST['submit'])) 
	{	
		   $headers  = 'MIME-Version: 1.0' . "\r\n";
		   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		   $headers .= "From: "."suacharya@olivemedia.co";
		   $recipient = trim($_POST["email"]);
		   $subject = "test email from localhost";
		  
		
	$msg='<html><body><h1> name:'.$_POST['name']."\n"
		.'email:'.$_POST['email']."\n"
		.'username:'.$_POST['username']."\n"
		// .'password:'.$_POST['password']."\n"
		.'file:'.$_POST['file'];
		
	
		// $chck=;


		if(mail($recipient, $subject, $msg, $headers)) {
			http_response_code(200);   
	     	echo "Thank You! Your message has been sent.";
	     	echo '<script>alert("mail  sent")
	     	window.location.href = "product.php";
	     	</script>'; 
	     	
	    } 
		else {
   			http_response_code(500);
            echo "Oops! Something went wrong message was not sent";
            echo '<script>alert("Sorry Mail was not sent")
	     	window.location.href = "contact.php";
	     	</script>'; 
            			  
       	}
 			 
	}
	else{
		http_response_code(403);
        echo "There was a problem with your submission, please try again.";
        echo '<script>alert("mail  sent")
	     	window.location.href = "contact.php";
	     	</script>'; 
		}


?>