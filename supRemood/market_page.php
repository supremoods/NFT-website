<!DOCTYPE html>
<html lang="en">

<head>
  <title>Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/market.css" type="text/css">
  <link rel="stylesheet" href="assets/css/navMarket.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js">
  </script>
</head>

<body>

  <div class="header">
    <nav class="nav-bar">
      <div class="content">
        <div class="logo"><a href="#"><img src="images/logo.png" alt=""><p>ALPAS</p></a></div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li class="links"><a class="btn-link1" href="index.php#cover-section">Home</a></li>
          <li class="links"><a class="btn-link2" href="index.php#about-section">About us</a></li>
          <li class="links"><a class="btn-links" href="market_page.php">Gallery</a></li>
          <li class="links"><a class="btn-link3" href="index.php#contact-us">Contact Us</a></li>
          <?php
          session_start();
          if(!ISSET($_SESSION['id'])){
            echo"
              <li><a id='log-in-btn' href='log_in.php'>Log in</a></li>
              <li><a id='reg-btn' href='register.php'>Register</a></li>
            ";
          }else{
            echo '
            <li>
            <a href="manageAccount.php" class="desktop-link child_1"><i class="fas fa-user-astronaut"></i></a>
            <input type="checkbox" id="show-features">
            <ul class = "drop-down">
            <li><a href="#">Account</a></li>
            <li><a href="#">Sell Arts</a></li>
            <li><a href="#">Order</a></li>
            <li><a href="#">Collections</a></li>
              <li><a class="btn-link3" href="phpFunctions/logout.php">Logout</a></li>
            </ul>
            </li>
            ';
          }
          ?>
        </ul>
        <div class="icon menu-btn">
          <i class="fab fa-mendeley"></i>
        </div>
      </div>
    </nav>
  </div>

  <div class="wrap">
    <div class="topnav">
      <a href="#all"> All </a>
      <a href="#digital"> Digital Art </a>
      <a href="#digital"> Painting </a>
      <a href="#digital"> Pixel Art </a>
      <a href="#digital"> Intergrated Art </a>
      <a href="#chibi"> Chibi Art </a>
      <a href="#vector"> Vector Art </a>
      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>

    <hr>

    <div class="grid-container">
      <?php
        include("phpFunctions/marketPage.php");
      ?>
      <br><br><br><br><br>
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
  <script src="assets/js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- PROTECT IMAGE -->
<script src="https://cdn.jsdelivr.net/gh/ColonelParrot/ProtectImage.js@v1.2/src/ProtectImage.min.js">
</script>

<script>
  $("body").on("contextmenu", "img", function(e) {
    return false;
  });
</script>
</body>



</html>