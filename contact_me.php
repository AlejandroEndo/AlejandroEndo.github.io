<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PORTAFOLIO</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/modernizr.js"></script>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    
</head>
<body>
<?php 
$myemail = 'misakinya2@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = $myemail;
$email_subject = "Nuevo mensaje de: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

 <img src="img/fondo.png" class="fon"> 
  <div class="container">
    <div id="contact">
      <div id="co1">
       <h3> Contact me</h3>
        <p>Email: alejoendo@hotmail.com</p>
        <p>Phone: (57) 320 706 5260</p>
        <ul>
            <li><a href=""><img src="img/fb.png" alt=""></a></li>
            <li><a href=""><img src="img/in.png" alt=""></a></li>
            <li><a href=""><img src="img/be.png" alt=""></a></li>
            <li><a href=""><img src="img/op.png" alt=""></a></li>
        </ul>
        <form method="post" action="contact_me.php">
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <textarea name="message" placeholder="Message"></textarea><br>
            <button type="submit">Send</button>
        </form>  
       </div> 
       <div id="co2">
           <img src="img/yo.png">
       </div>
    </div>       
    </div>
  <nav class="menu">
    <ul>
        <li><a href="index.html"><img src="img/h.png"></a></li>
        <li><a href="about.html"><img src="img/ab.png"></a></li>
        <li><a href="skills.html"><img src="img/sk.png"></a></li>
        <li><a href="work.html"><img src="img/w.png"></a></li>
        <li class="sel"><a href="contact.html"><img src="img/ct2.png"></a></li>
    </ul>
  </nav>
</body>
</html>