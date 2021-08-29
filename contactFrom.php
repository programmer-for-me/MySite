<?php 

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$subject = $_POST["subject"];
	$mailForm = $_POST["mail"];
	$message = $_POST["message"];

	$mailTo = "programmer.for.me@gmail.com";
	$headers = "From: ". $mailForm;
	$txt = "You have received an e-mail from: ". $name. ".\n\n". $message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend-succesfully");
}