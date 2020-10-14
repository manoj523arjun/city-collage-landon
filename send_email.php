<?php

   $fName = $_REQUEST["firstName"];
   $lName = $_REQUEST["lastName"];
   $email = $_REQUEST["email"];
   $programme = $_REQUEST["programme"];
   $programme = $_REQUEST["phoneNumber"];
   $country = $_REQUEST["countryInput"];
   $comments = $_REQUEST["comments"];

   print($fName);
   $to = "bellamkondamanojb@gmail.com";
   $subject = "Contact details of $fName";
   
   $message = "<table>";

   $message .= "<tr><td>First Name</td><td>:</td><td>$fName</td></tr>";
   $message .= "<tr><td>Last Name</td><td>:</td><td>$lName</td></tr>";

   $message .= "<tr><td>Email</td><td>:</td><td>$email</td></tr>";
   $message .= "<tr><td>Programme</td><td>:</td><td>$programme</td></tr>";

   $message .= "<tr><td>Phone Number</td><td>:</td><td>$programme</td></tr>";
   $message .= "<tr><td>Country</td><td>:</td><td>$country</td></tr>";

   $message .= "<tr><td>Comments</td><td>:</td><td>$comments</td></tr>";

   $message .= "</table>";
   
   $header = "From:manoj523arjun@gmail.com \r\n";
   // $header .= "Cc:afgh@somedomain.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $header .= "Access-Control-Allow-Origin: *\r\n";
   
   $retval = mail ($to,$subject,$message,$header);
   
   if( $retval == true ) {
      echo "Message sent successfully...";
   }else {
      echo "Message could not be sent...";
   }
?>