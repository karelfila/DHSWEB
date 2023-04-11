<?php
  if(isset( $_POST['name']))
  $name = $_POST['name'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
if(isset( $_POST['subject']))
  $subject = $_POST['subject'];
  if(isset( $_POST['message']))
  $message = $_POST['message'];


  $content="From: $name \n Email: $email \n Message: $message";
  $recipient = "karelfila05@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Omlouváme se ale něco se nepovedlo! Zkuste prosím znovu později .");
  echo "Email byl odeslán! Děkujeme!";
?>