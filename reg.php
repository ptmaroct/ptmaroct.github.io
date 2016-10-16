<?php 
error_reporting(E_ALL ^ ~E_WARNING);

if(isset($_POST['phone']))
    { 	
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$name = $fname." ".$lname;
	$pno=$_POST['phone'];
	$mail=$_POST['email'];
	$rollno=$_POST['roll'];
	$sec=$_POST['Sec'];
	$role=$_POST['Role'];

  	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $host = 'mysql.hostinger.in';
    $user = 'u164117485_admin';
    $password = 'gauravsatish';
    $dbname = 'u164117485_reg';


    $cxn = mysqli_connect($host,$user,$password,$dbname) or echo ('<div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Error connecting to database.</div>'); //connection to database

    //checking if the username already exists
    $query = "select roll from society_auditions where roll like '$rollno'";

    $result = mysqli_query($cxn,$query);
    if ($result == NULL) {	//means roll number doesn't exists, and can be registered

		    $query = "insert into society_auditions(id,name,roll,phone,email,section,role) values(NULL,'$name','$rollno','$pno','$mail','$sec','$role')";

			if(mysqli_query($cxn,$query)){ //on successful registration
				echo '<div class="alert alert-info alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		Thank you for participating. You have been registered!
     </div>';
			}
			else
			{
				echo '<div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Error submitting data.</div>';
			}
			mysqli_close($cxn);
			}
			else {
    	
    	echo '<div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     This roll number has already been registered!</div>';
    	
    	}
    }

mysqli_close($cxn); //close the connection

?>