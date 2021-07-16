<!doctype html>
<html class="gallerybg">
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
    <a href="ContactMe.php">CONTACT</a>
  </div>
</div>
<div class="row"> 
    <div class="gallery">
    <div class="gallery__item gallery__item--1 column" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
      <img src="img/1.png" class="gallery__img" alt="1">
    </div>
    <div class="gallery__item gallery__item--2 column" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      <img src="img/2.png" class="gallery__img" alt="2">
    </div>
    <div class="gallery__item gallery__item--3 column" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
      <img src="img/3.png" class="gallery__img" alt="3">
    </div>
    <div class="gallery__item gallery__item--4 column" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      <img src="img/4.png" class="gallery__img" alt="4">
    </div>
    <div class="gallery__item gallery__item--5 column" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
      <img src="img/5.png" class="gallery__img" alt="5">
    </div>
    <div class="gallery__item gallery__item--6 column" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
      <img src="img/6.png" class="gallery__img" alt="6">
    </div>
  </div>
</div>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="img/1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="img/2.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="img/3.png" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="img/4.png" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5/ 6</div>
      <img src="img/5.png" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6/ 6</div>
      <img src="img/6.png" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img/1.png" style="width:100%%" onclick="currentSlide(1)" alt="1">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/2.png" style="width:100%%" onclick="currentSlide(2)" alt="2">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/3.png" style="width:100%%" onclick="currentSlide(3)" alt="3">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/4.png" style="width:100%%" onclick="currentSlide(4)" alt="4">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/5.png" style="width:100%%" onclick="currentSlide(4)" alt="5">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/6.png" style="width:100%%" onclick="currentSlide(4)" alt="6">
    </div>
  </div> 
</div> 



<script src="script.js"></script>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'DB.php';

if(isset($_POST['commentSubmit'])){

  
  $name = $_POST['name'];
  $message = $_POST['message'];

    $sql = "INSERT INTO saraksts (name, message)
    VALUES ('$name','$message')";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>

<div class="commentsection">
  <form action="" method="post" class="form">
  <input type="text" class="name" name="name" placeholder="Name"><br>
    <textarea name="message" class="comment-text" cols="30" rows="10" placeholder="Message"></textarea><br>
    <button type="submit" class="btn-submit-comment" name="commentSubmit">Comment</button>
  </form>
</div>
<div class="content">
  <div class="contentbox">
  <?php 
      $sql = "SELECT * FROM saraksts";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    
  ?>
  <div class="namebox"><h3><?php echo $row['name']; ?></h3>
  <!--<div class="textbox">--><p><?php echo $row['message']; ?></p>
  </div>
  <?php } } ?>
  </div>
</div>


<div class="footer">
    <div class="footer1">
      <a class="icon" href="https://www.facebook.com/edijsr" target="_blank"><img src="img/facebook.svg" alt="facebook"></a>
      <a class="icon" href="https://www.linkedin.com/in/edijs-rindzs-568a98214/" target="_blank"><img src="img/linkedin.svg" alt="linkedin"></a>
      <a class="icon" href="https://www.instagram.com/edijsrindzs/" target="_blank"><img src="img/instagram.svg" alt="instagram"></a>
      <a class="icon" href="https://github.com/erindzs" target="_blank"><img src="img/github.svg" alt="github"></a>
    </div>
    <div class=footer2>
        &copy; Edijs Rindžs
      </div>
</div>  
  

    </body>
</html>