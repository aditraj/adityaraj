<?php
$username	=	$_POST['username'];
$email		=	$_POST['email'];
$mobile		=	$_POST['mobile'];
$enqType	=	$_POST['enqType'];
$Message	=	$_POST['Message'];

$to			=	"uptechzsolutions@gmail.com";
$subject	=	"Web Site Enquery";
$message	.=	"Name : ".$username."\r\n";
$message	.=	" Email : ".$email."\r\n";
$message	.=	" Mobile : ".$mobile."\r\n";
$message	.=	" Enquery Type : ".$enqType."\r\n";
$message	.=	" Message : ".$Message."\r\n";
$from		=	"From:".$email;
mail($to, $subject, $message, $from);
header("location:index.html");
?>