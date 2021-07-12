<!doctype html>
<html class="contactbg">
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<head>
    <title>Portfolio</title>
</head>



<body>
<div class="container">
  <div class="topnav"> 
    <a href="index.html">HOME</a>
    <a href="AboutMe.html">ABOUT </a>
    <a href="Work.html">WORK</a>
    <a href="Gallery.php">GALLERY</a>
    <a href="ContactMe.php">CONTACT </a>
  </div>
</div>


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'DB.php';

if(isset($_POST['commentSubmit'])){

  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

    $sql = "INSERT INTO comments (name, email, message)
    VALUES ('$name', '$email','$message')";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>


<div class="contact-section">
  <h1>CONTACT</h1>
  <div class="contacts">
    <form action="" method="post" class="form">
      <input type="text" name="name" class="contact-form-text" placeholder="Your Name">
      <input type="email" name="email" class="contact-form-text" placeholder="Your Email">  
      <textarea class="contact-form-text" name="message" placeholder="Your Message"></textarea>
      <button type="submit" class="contact-form-btn" name="commentSubmit">Send</button>
    </form>
  </div>
</div>

<div class="footer">
    <div class="footer1">
      <a class="icon" href="#"><img src="img/facebook.svg" alt="facebook"></a>
      <a class="icon" href="#"><img src="img/linkedin.svg" alt="linkedin"></a>
      <a class="icon" href="#"><img src="img/instagram.svg" alt="instagram"></a>
      <a class="icon" href="#"><img src="img/github.svg" alt="github"></a>
    </div>
    <div class=footer2>
        &copy; Edijs Rindžs
      </div>
</div>  
    </body>
</html>