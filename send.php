     <?php
     $url="http://www.technoblitzkec.com/";
     if (isset($_POST['email']))  {
     
     $to="technoblitz16@gmail.com";
        $subject = "Registrations";
         $reqmail= $_POST['email'];
         $reqnm=$_POST['name'];
         $reqpno=$_POST['phone'];
         $reqsec=$_POST['section'];
		  $reqbr=$_POST['branch'];
		   $reqyr=$_POST['year'];
       
         $message = 'Name : ' .$reqnm."\r\n".
          'Contact No : ' .$reqpno."\r\n".
          'Section : '.$reqsec."\r\n".
		  'Branch : '.$reqbr."\r\n".
		  'Year : '.$reqyr."\r\n";
       
        $headers = 'From: '.$reqmail."\r\n".
 
'Reply-To: '.$to."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
@mail ($to,$subject,$message,$headers);
   
  echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $url . '">';
  echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
exit();
  
   }
    else  { 
      echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $url . '">';
  echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
    
    }
      ?>