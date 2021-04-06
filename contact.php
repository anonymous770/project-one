<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$body = "User Namae: $name.\n User Message: $message";
	$to = "aslammiya5257@gmail.com";
	$subject = "Contact Form";
	$headers = "From: $email \r\n";
	mail($to,$subject,$body,$headers) or die("ERROR!!");
	echo "thank you";
?>