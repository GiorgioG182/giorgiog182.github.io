<?php
	$email = $_REQUEST['email'];
	$name = $_REQUEST['name'];
    $phone = $_REQUEST['phone']
	$message = $_REQUEST['message'];
	$message = "MESSAGGIO RICEVUTO DAL PORTFOLIO ---" . $_REQUEST['message'];
	
	//settaggi funzionanti per Gmail!!!
    ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "giachetti-giorgio@hotmail.it");
    $headers = "From: $email";
    mail("giachetti-giorgio@hotmail.it", $name . " -- " . $subject, $message, $headers);
    
    //redirigo alla home
    header("Location: index.html");
    die();
?>
