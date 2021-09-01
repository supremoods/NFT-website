<?php
	include("phpFunctions/dbConnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ALPAS | Gallery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/market.css" type="text/css">
  <link rel="stylesheet" href="assets/css/navMarket.css">
 
  <link rel="icon" href="images/logo.png" />
  <script src="https://kit.fontawesome.com/64d58efce2.js">
  </script>
</head>

<body>

  <div class="header">
    <nav class="nav-bar">
      <div class="content">
        <div class="logo"><a href="index.php"><img src="images/logo.png" alt=""><p>ALPAS</p></a></div>
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
            $id = (int) $_SESSION['id'];

            $query = mysqli_query ($conn, "SELECT * FROM user WHERE userID = '$id' ") or die (mysqli_error());
            $fetch = mysqli_fetch_array ($query);
            echo '
            <li>
            <a href="manageAccount.php" class="desktop-link child_1"><img src="images/'.$fetch['image'].'" ></a>
            <ul class = "drop-down">
            <li><a href="#" style="color:#04f3fc; pointer-events: none;">'.$fetch['username'].'</a></li>
            <li><a href="manageAccount.php#home-section">Account</a></li>
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
    <form class="topnav" method="post">
      <input type="submit" name="filter" value="All" />
      <input type="submit" name="digital_button" value="Digital Art" />
      <input type="submit" name="painting_button" value="Painting" />
      <input type="submit" name="pixel_button" value="Pixel Art" />
      <input type="submit" name="integrated_button" value="Intergrated Art" />
      <input type="submit" name="chibi_button" value="Chibi Art" />
      <input type="submit" name="vector_button" value="Vector Art" />
      <div class="search-container">
        <div>
          <input type="text" placeholder="Search.." name="searchField">
          <button type="submit" name="search"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>

    <hr>

    <div class="grid-container">
      <?php
        include("phpFunctions/marketPage.php");
     
      
        //  echo $temp;
        //  getID($temp);
        //  window.location = 'getIDFunction.php';
      ?>
      
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
    var p1   
     function reply_click(clicked_id)
        {     
            p1 = clicked_id;
            console.log(p1);   
            <?php 
            $temp = 'document.writeln(p1)';
            $prodID = $temp;
            setcookie("pID", $prodID, time() + 900);?>    
            window.location = 'product_details.php';       
        }
 </script>
<script>
  $("body").on("contextmenu", "img", function(e) {
    return false;
  });
</script>
  
</body>



</html>