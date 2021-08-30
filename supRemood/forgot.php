<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/forgot.css">
  <link rel="stylesheet" href="assets/css/nav.css">
  <link rel="stylesheet" type="text/css" href="assets/css/toast.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
  <div class="header">
    <nav class="nav-bar">
      <div class="content">
        <div class="logo"><a href="#">ALPAS</a></div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li class="links"><a class="btn-link1" href="index.php#cover-section">Home</a></li>
          <li class="links"><a class="btn-link2" href="index.php#about-section">About us</a></li>
          <li class="links"><a class="btn-links" href="market_page.php">Gallery</a></li>
          <li class="links"><a class="btn-link3" href="index.php#contact-us">Contact Us</a></li>
          <li><a id="log-in-btn" href="log_in.php">Log in</a></li>
        </ul>
        <div class="icon menu-btn">
          <i class="fab fa-mendeley"></i>
        </div>
      </div>
    </nav>
  </div>

  <div class="background">
    <form class="form" method="POST">
    <p>RESET PASSWORD</p><br><br>
      <div class="pass">
        <input type="email" class="textplace-1" id="email" placeholder="Email" name="email" required><br><br>
        <!--
        <label> New Password</label><br>
        <input class="textplace" id="password" type="password" placeholder=" password">
        <br><br>
        <label> Re-enter Password</label><br>
        <input class="textplace" id="co_password" type="password" placeholder="Re-enter password"><br>
        -->
        <div class="RegisterButton">
         <input id="submit-button" type="submit" value="Proceed" name="submit"></input>
        </div>
      </div>
    </form>
  </div>
  <section class="footer">
    <div class="social">
      <a href="http://"><i class="fab fa-instagram"></i></a>
      <a href="http://"><i class="fab fa-facebook"></i></a>
      <a href="http://"><i class="fab fa-twitter"></i></a>
      <a href="http://"><i class="fab fa-discord"></i></a>
    </div>

    <ul class="list">
      <li><a href="#home">Home</a></li>
      <li><a href="#gallery-section">Gallery</a></li>
      <li><a href="#about-section">About us</a></li>
      <li><a href="#contact-us">Contact us</a></li>
    </ul>

    <p class="copyright">
      ALPAS @ 2021
    </p>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/toast.js"></script>
  <?php
    include("phpFunctions/reset.php");
  ?>
</body>

</html>
