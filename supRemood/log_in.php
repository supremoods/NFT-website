<?php
	include("phpFunctions/loginFunc.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALPAS | Login</title>
  <link rel="icon" href="images/logo.png" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/Log_In.css">
	<link rel="stylesheet" type="text/css" href="assets/css/nav.css">
  <link rel="stylesheet" type="text/css" href="assets/css/toast.css">
  <link rel="stylesheet" href="assets/css/buy.css">
  <link rel="stylesheet" href="assets/css/check-verified.css">
	<script type="text/javascript" src="assets/js/account.js"></script>
</head>
<style>
 
</style>
<body>
  <div class="header">
    <nav class="nav-bar">
      <div class="content">
        <div class="logo"><a href="#"><img src="images/logo.png" alt=""><p>ALPAS</p></a></div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li class="links"><a href="index.php#cover-section">Home</a></li>
          <li class="links"><a href="index.php#about-section">About Us</a></li>
          <li class="links"><a href="market_page.php">Gallery</a></li>
          <li class="links"><a class="btn-link3" href="#contact-us">Contact Us</a></li>
          <li><a id="reg-btn" href="register.php">Register</a></li>
        </ul>
        <div class="icon menu-btn">
          <i class="fab fa-mendeley"></i>
        </div>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="loginbody">
      <img src="images/logo.png" class="center">
      <form method="post">
        <div class="form" >
          <div class="iconId">
            <i class="fa fa-user icon-1"></i>
            <input class="textplace" name="username" type="text" placeholder="Username" required><br>
            <i class="fas fa-unlock-alt icon-1"></i>
            <input class="textplace" name="password" type="password" placeholder="Password" required>
          </div>
          <a href="forgot.php" class="btnForgetPwd">Forgot Password?</a>
          <a href="register.php" class="donthaveacc">Register here</a><br>
          <center>
          <button name="submit" id="#submit-button" class="button">Login</button><br>
          </center>
        </div>
      </form>
    </div>
  </div>

  <section class="footer">
    <div class="social">
      <a href="http://"><i class="fab fa-instagram"></i></a>
      <a href="http://"><i class="fab fa-facebook"></i></a>
      <a href="http://"><i class="fab fa-twitter"></i></a>
      <a href="http://"><i class="fab fa-discord"></i></a>
    </div>

    <ul class="list">
      <li><a href="index.php#home">Home</a></li>
      <li><a href="market_page.php">Gallery</a></li>
      <li><a href="index.php#about-section">About us</a></li>
      <li><a href="index.php#contact-us">Contact us</a></li>
    </ul>

    <p class="copyright">
      digitrad @ 2021
    </p>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/toast.js"></script>
</body>

</html>
