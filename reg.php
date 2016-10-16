<?php 
error_reporting(E_ALL ^ ~E_WARNING);

if(isset($_POST['phone']))
    { 		$fname=$_POST['first_name'];
			$lname=$_POST['last_name'];
			$pno=$_POST['phone'];
			$mail=$_POST['email'];
            $rollno=$_POST['roll'];
			$sec=$_POST['Sec'];
			$role=$_POST['Role'];
  // Establishing Connection with Server by passing server_name, user_id and password as a parameter
 $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "TB";
    $prefix = "";
    $connection = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    $db = mysql_select_db("TB", $connection);

	mysql_query("insert into TBAUD_16 values('$fname','$lname','$pno','$mail','$rollno','$sec','$role')");
	
	}
else
header("Location: contactus.htm"); // Redirecting To Register Page

?>