<!doctype html>
<html>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<head>
    <title>Portfolio</title>
</head>

<h1>Portfolio</h1>

<body>
    

<div class="container">
  <div class="topnav"> 
    <a href="/index.php">Home</a>
    <a href="/AboutMe.php">About </a>
    <a href="/Work.php">Work</a>
    <a href="/Gallery.php">Gallery</a>
    <a href="/ContactMe.php">Contact </a>
  </div>
</div>

<div class="contact-section">
  
  <h1>Contact</h1>
  <div class="border"></div>
  <form class="contact-form" action="ContactMe.php" method="post">
  <input type="text" class="contact-form-text" placeholder="Your Name">
  <input type="email" class="contact-form-text" placeholder="Your Email">
  <textarea class="contact-form-text" placeholder="Your Message"></textarea>
  <input type="submit" class="contact-form-btn" value="Send">
  </form>
</div>


<!--
   <div class="contact">
     <h2>Contact</h2>
      <form action="">
        <input type="text" id="name"  placeholder="Enter Name">
        <input type="email"id="email" placeholder="Enter Email">
        <textarea name="field" cols="30" rows="10" placeholder="Type your message"></textarea>
        <input type="submit" value="Send">
      </form>

   </div>
-->

<div class="footer">
    <div class="footer1">
      <a href="#"><img src="img/facebook.svg" alt="facebook"></a>
      <a href="#"><img src="img/twitter.svg" alt="twitter"></a>
      <a href="#"><img src="img/linkedin.svg" alt="linkedin"></a>
      <a href="#"><img src="img/instagram.svg" alt="instagram"></a>
    </div>
    <div class=footer2>
        &copy; Edijs Rindžs
      </div>
      
</div>  


    </body>
</html>