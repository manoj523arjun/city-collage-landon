<?php

   $fName = $_REQUEST["firstName"];
   $lName = $_REQUEST["lastName"];
   print($fName);
   $to = "bellamkondamanojb@gmail.com";
   $subject = "Contact details of $fName";
   
   $message = "<b>This is HTML message.</b>";
   $message .= "<h1>This is headline.</h1>";
   
   $header = "From:manoj523arjun@gmail.com \r\n";
   // $header .= "Cc:afgh@somedomain.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   
   $retval = mail ($to,$subject,$message,$header);
   
   if( $retval == true ) {
      echo "Message sent successfully...";
   }else {
      echo "Message could not be sent...";
   }
?>