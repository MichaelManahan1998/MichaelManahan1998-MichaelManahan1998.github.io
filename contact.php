<?php

if (isset($_POST['submit'])){

  $Fname    = $_POST['form-FirstName'];
  $Lname    = $_POST['form-LastName'];
  $email   = $_POST['form-email'];
  $subject = $_POST['form-subject'];
  $message = $_POST['from-message'];

  $mailTo ="judemichaelmanahan.1998@gmail.com";
  $headers ="From: ".$email;
  $txt =" You Have Recieve an e-mail from ".$Fname.$Lname."\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
   
  header("Location: index.html?mailsend");
}
else
{
  echo"Somthing Went Wrong!";
}
?>