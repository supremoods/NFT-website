<?php
 
	include("phpFunctions/dbConnect.php");
  include("phpFunctions/retrieveTemp.php");
  session_start();
  if(!ISSET($_SESSION['id'])){
   echo "<script> window.location = 'log_in.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALPAS | Product Details</title>
  <link rel="stylesheet" href="assets/css/navMarket.css">
  <link rel="stylesheet" href="assets/css/product-details.css">
  <link rel="stylesheet" href="assets/css/bid.css">
  <link rel="stylesheet" href="assets/css/check-verified-product.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>

  <div class="header">
    <nav class="nav-bar">
      <div class="content">
        <div class="logo"><a href="index.php"><img src="images/logo.png" alt="">
            <p>ALPAS</p>
          </a></div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li class="links"><a class="btn-link1" href="index.php#cover-section">Home</a></li>
          <li class="links"><a class="btn-link2" href="index.php#about-section">About us</a></li>
          <li class="links"><a class="btn-links" href="market_page.php">Gallery</a></li>
          <li class="links"><a class="btn-link3" href="index.php#contact-us">Contact Us</a></li>
          <?php

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

  <div class="return-button">
    <a href="market_page.php"><i class="fas fa-chevron-left"></i></a>
  </div>
  
  <div class="product-details">
    
    <div class="card">
      <!-- card left -->
      <div class="product-figures">
        <div class="product-image">
          <?php
            $id_temp = (int) $get_ID['temp'];
         
            $sql = "SELECT * FROM product WHERE product_id = '$id_temp'";
            $query =  $conn->query($sql) or die ($conn->error);
            $fetch = $query->fetch_assoc();
          ?>
          <img src="<?php echo $fetch['image'] ?>" alt="shoe image" protected>
        </div>
        <div class="product-description">
          <h3>Description</h5>
            <div class="desc-txt">
              <p><?php echo $fetch['description'] ?></p>
         
            </div>
        </div>

      </div>
    </div>

    <!-- card right -->
    <div class="product-content">
      <div class="product-title"><?php echo $fetch['name'] ?></div>
      <h3>Auction Ends</h3>
      <div class="countdown-container">
        <div class="countdown-el days-c">
          <p class="big-text" id="days">0</p>
          <span>Days</span>
        </div>
        <div class="countdown-el hours-c">
          <p class="big-text" id="hours">0</p>
          <span>Hours</span>
        </div>
        <div class="countdown-el mins-c">
          <p class="big-text" id="mins">0</p>
          <span>Mins</span>
        </div>
        <div class="countdown-el seconds-c">
          <p class="big-text" id="seconds">0</p>
          <span>Secs</span>
        </div>
      </div>

      <p id="price-parag">Current Bid</p>
      <p class="product-price"><img style="width: 35px; height: 35px; padding-top: 10px;" src="images/logo.png" alt=""><span
          id="alp-price"><?php echo $fetch['price'] ?></span><span id="usd-price"> = <?php echo $fetch['price'] * 30?> PHP</span></p>

      <button class="button-buy" id="buy-button">Buy now</button>
      <div class="product-list">

        <div class="bid-title">Bid History</div>
        <!--
               <ul>
                  <li> <i class="fas fa-circle"></i> <span>Listed by</span> @supermood</li>
                  <p class="bid-time">2021-08-20 22:16:12</p>
                  <li> <i class="fas fa-circle"></i> <span>Listed by</span> @tagryze</li>
                  <p class="bid-time">2021-08-20 23:16:12</p>
                  <li> <i class="fas fa-circle"></i> <span>Listed by</span> @maki</li>
                  <p class="bid-time">2021-08-20 23:19:14</p>
               </ul>
               -->
      </div>
    </div>
  </div>

  </div>

  <!-- Modal Confirmation payment -->


  <div class="buy-modal">
    <div class="buy-container">
      <div class="buy-head">
        <p class="label">Buy with Your Credit/Debit Card</p>
        <span tabIndex="0" class="close"><i class="fas fa-times"></i></span>
      </div>
      <div class="buy-spend" tabindex="0">
        <p class="input-text">Spend</p>
        <div class="spend-input">
          <input id="deposit-amount" type="number" name="amount" maxlength="8" placeholder="> current bid">
          <div class="currency">
            <div><i class="icon-2 fab fa-gg"></i></div>
            <span>ALP</span>
          </div>
        </div>
      </div>
      <p class="error-message"></p>
      <p class="error-message2"></p>

      <div class="buy-receive" tabindex="0">
        <p class="input-text">Receive</p>
        <div class="receive-input">
          <input id="receive-amount" type="number" name="amount" maxlength="10" placeholder="0.00">
          <div class="currency">
            <div><i class="icon-2 fab fa-gg"></i></div>
            <span>ALP</span>
          </div>
        </div>
      </div>

      <input id="buy-submit" type="button" value="Continue">
    </div>
    <div class="confirm-container">
      <div class="confirm-head">
        <span tabIndex="0" class="back"><i class="fas fa-chevron-left"></i></span>
        <p class="label">Pay with Credit/Debit Card</p>
        <span tabIndex="0" class="close"><i class="fas fa-times"></i></span>
      </div>
      <div class="confirm-summary">
        <div class="summary-cont">
          <div class="spend">
            <div class="currency">
              <div><i class="icon-2 fab fa-gg"></i></div>
              <span>ALP</span>
            </div>
            <p class="alp-val"></p>
          </div>
          <i class="equal fas fa-equals"></i>
          <div class="receive">

            <div class="currency">
              <div><i class="icon-1 fas fa-ruble-sign"></i></div>
              <span>PHP</span>
            </div>
            <p class="usd-val"></p>
          </div>
        </div>
      </div>
      <input id="confirm-submit" type="submit" value="Continue">
    </div>
    <div class="verification">
      <div class="verification-head">
        <p class="label">Please Wait...</p>
      </div>
      <div class="check-container">
        <input type="checkbox" id="check">
        <label for="check">
          <div class="check-icon"></div>
        </label>
      </div>
      <input id="close-button" type="button" value="Close">
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
      <li><a href="index.php#cover-section">Home</a></li>
      <li><a href="market_page.php">Gallery</a></li>
      <li><a href="#about-section">About us</a></li>
      <li><a href="#contact-us">Contact us</a></li>
    </ul>

    <p class="copyright">
      ALPAS @ 2021
    </p>
  </section>

  <script>
    // var ctrl = 1;
    // if(ctrl == 1){
    //   window.location.reload();
    //   ctrl = 0;
    // }
    window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
  }
    
  </script>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
 
  <script type="text/javascript" src="assets/js/bid.js">
      console.log(currentBidUsd +"231231231");
</script>

  <script src="assets/js/countdown.js"></script>
  <script src="assets/js/script.js"></script>
 

  <script>
  $("body").on("contextmenu", "img", function(e) {
    return false;
  });
</script>
</body>

</html>