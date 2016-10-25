<?php

	$name = $_GET['name'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];
	$subject = $_GET['subject'];
	$message = $_GET['message'];

	 // Establishing Connection with Server 
	$host = 'mysql.hostinger.in';
	$user = 'u164117485_admin';
	$password = 'gauravsatish';
	$dbname = 'u164117485_reg';

	$cxn = mysqli_connect($host,$user,$password,$dbname) or die('Could not connect'); //connection to database
	  
	$query = "insert into contact(name,phone,email,subject,message) values('$name','$phone','$email','$subject','$message')";

	$result = mysqli_query($cxn,$query);

	if($result){ //On successful sending
		echo '<div class="alert alert-info alert-dismissible" role="alert">
	     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Thank you, your message has been sent. We will reach back to you asap.
	     </div>';
	} else {
	echo '<div class="alert alert-danger alert-dismissible" role="alert">
	     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			There was an error sending your message. Please try again later.
	     </div>';
	}

	mysqli_close($cxn);

?>