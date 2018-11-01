<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
$to = 'alejoendo@hotmail.com';
$email_subject = "$name, te ha contactado";
$email_body = "Se ha recibido un mensaje a traves del formulario de Contacto del sitio Web.\n\n"."Datos:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>