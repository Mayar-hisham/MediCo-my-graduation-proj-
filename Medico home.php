




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medico</title>
	<link rel="icon" href="imgs/logooo.png">
	<link rel="stylesheet" type="text/css" href="Medico home.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<style>

body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle; }

/* Slideshow container */
.slideshow-container {
    max-width: 1520px;
    position: relative;
    margin: auto;
   
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
 

}


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;

}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
	<!--Start nav bar-->
<header>
    
  

 <header id="header-wrap">
     
        <!-- Navbar Start -->
       <div id="navbar">
         <img  id= "logoo" src="imgs/medico.png" alt="logo" width="200"> 
  <a href="#home">Contact</a>
  <a href="#news">About us</a>
  <a href="Medico login.html#lo">Login</a>
  <a href="Register.html">Register</a>
  <a href="Medico home.html">Home</a>
  <script>
    var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

</div>
<div class="slideshow-container">


<div class="mySlides fade"> 
  <div class="numbertext">1 / 6</div>
  <img src="imgs/1.jpg" style="width: 100%" height="550">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="imgs/2.JFIF" style="width:100%"height="550">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="imgs/3.JFIF" style="width:100%"height="550" >
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="imgs/4.jpeg" style="width:100%"height="550">
  <div class="text">Caption four</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="imgs/6.jpeg" style="width:100%"height="550">
  <div class="text">Caption five</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="imgs/7.jpg" style="width:100%"height="550">
  <div class="text">Caption six</div>
</div>

</div>
<br>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
    <span class="dot"></span>

</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!--

                <section class="pics" >

    <marquee behavior="scroll" direction="left">
<img src="imgs/1.jpg" width="125" height="82" alt="Flying Bat">
<img src="imgs/2.JFIF" width="125" height="82" alt="Flying Bat">
<img src="imgs/3.JFIF" width="125" height="82" alt="Flying Bat">
<img src="imgs/4.jpeg" width="125" height="82" alt="Flying Bat">
<img src="imgs/5.jpeg" width="125" height="82" alt="Flying Bat">
<img src="imgs/6.jpeg" width="125" height="82" alt="Flying Bat">
</marquee>
</section>
-->
                </header>
<h2 align="center"> Try Our Tastey Cakes </h2>


<footer>
    <div>

   <p>  Copyright &copy Cake Corner-2022 </p>
   <h6>Cake Corner</h6>
   
</div>

<div class="content">
 <div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">Enter information to generate QR Code</div>
      <div class="panel-body">   
             <div class="input_field_wrapper">
  <div>
      <form method="post">
        <input type="text" name="item_id" value="" required />
      <input type="submit" class=" btn btn-primary" value="Generate QR Code" style=" margin:5px;">
      </form>
    </div>
</div>
</div></div></div>

</footer>
 <!--- end footer-->
</body>
</html>