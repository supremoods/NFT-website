<?php
	include('phpFunctions/dbConnect.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>ALPAS | Account</title>
  <link rel="icon" href="images/logo.png" />
  <link rel="stylesheet" href="assets/css/sidebar.css">
  <link rel="stylesheet" href="assets/css/navMarket.css">
  <link rel="stylesheet" href="assets/css/buy.css">
  <link rel="stylesheet" href="assets/css/check-verified.css">
  <!-- Boxiocns CDN Link -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/64d58efce2.js">
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="header">
    <nav class="nav-bar">
      <div class="content">
        <div class="logo"><a href="#"><img src="images/logo.png" alt=""><p>ALPAS</p></a></div>
        <ul class="menu-list">
          <div class="icon cancel-btn cancel-btn_siderbar">
            <i class="fas fa-times"></i>
          </div>
          <li class="links"><a class="btn-link1" href="index.php#cover-section">Home</a></li>
          <li class="links"><a class="btn-link2" href="index.php#about-section">About
              us</a></li>
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
              <a href="manageAccount.php" class="desktop-link child_1"><i class="fas
                  fa-user-astronaut"></i></a>
              <input type="checkbox" id="show-features">
              <ul class="drop-down">
                <li><a href="manageAccount.php">Account</a></li>
                <li><a href="manageAccount.php">Sell Arts</a></li>
                <li><a href="manageAccount.php">Order</a></li>
                <li><a href="manageAccount.php">Collections</a></li>
                <li><a class="btn-link3" href="phpFunctions/logout.php">Logout</a></li>
              </ul>
            </li>
            ';
            }
            ?>
        </ul>
        <div class="icon menu-btn menu-btn_sidebar">
          <i class="fab fa-mendeley"></i>
        </div>
      </div>
    </nav>
  </div>
  <div class="sidebar close down">
    <div class="logo-details">
      <i class='bx bxl-angular'></i>
    </div>
    <ul class="nav-links">
      <li>
        <div class="iocn-link">
          <a href="#home-section">
            <i class='bx bx-user-circle'></i>
            <span class="link_name">Acount</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#home-section">Acount</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">ALP wallet</a></li>
        </ul>
      </li>
      <li>
        <a href="#Sell-content">
          <i class='bx bx-money'></i>
          <span class="link_name">Sell Arts</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Sell Arts</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt'></i>
            <span class="link_name">Order</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Order</a></li>
          <li><a href="#">Track Bid</a></li>
        </ul>
      </li>


      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection'></i>
            <span class="link_name">Collections</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Collections</a></li>
          <li><a href="#">Artworks</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link bottom ">
          <i class='bx bx-chevron-up arrow-btn'></i>
        </div>
      </li>

    </ul>
  </div>

  <section id="home-section" class="home-section">
    <div class="prof_container">
        <div class="profile_section">
          <div class="dp-card">
            <div class="img-section">
              <img src="images/profile.jpg">
              <span>
                <i onclick="$('.file-upload-input').trigger( 'click' )"class='bx bx-image-add'></i>
              </span>
            </div>
          </div>
          <div class="input-section">
            <?php
               $id = (int) $_SESSION['id'];

               $query = mysqli_query ($conn, "SELECT * FROM user WHERE userID = '$id' ") or die (mysqli_error());
               $fetch = mysqli_fetch_array ($query);
               include('phpFunctions/profileFunct.php');
            ?>
           
            <table class="input-content">
              <tr>
                <form method="post">
                  <td class="col-1"><label>Email</label></td>
                  <td class="col-2"><input class="input-textbox" type="email" name="email" id="email" value="<?php echo $fetch['email'] ?>" required /></td>
                  <td class="col-3"><button name="submitEmail"><i class='bx bx-edit-alt edit_email'></i></button></td>
                </form>
              </tr>
              <tr>
              <form method="post">
                <td class="col-1"><label>Username</label></td>
                <td class="col-2"><input class="input-textbox" type="text" name="username" id="username" value="<?php echo $fetch['username'] ?>" required /></td>
                <td class="col-3"><button name="submitUser"><i class='bx bx-edit-alt edit_username'></i></td>
                </form>
              </tr>
              <tr>
              <form method="post">
                <td class="col-1"><label>Password</label></td>
                <td class="col-2"><input class="input-textbox" type="password" name="password" id="password" value="<?php echo $fetch['password'] ?> " required /></td>
                <td class="col-3"><button name="submitPass"><i class='bx bx-edit-alt edit_pass'></i></td>
                </form>
              </tr>
            </table>
            
          </div>
        </div>
    </div>

    

  </section>

  <!-- wallet alp -->
  <section class="home-section">
    <div class="home-content">
        <div class="profile">
          <div class="dp-card">
 
          </div>
          <div class="input-section">

          </div>
        </div>
    <div class="home-content wallet-balance">
      <table class="wallet-alp">
        <tr>
          <td>
            <i class="icon-1 fas fa-user-circle"></i>
            <h4 style = "margin-top: 45px;"> Username: </h4>
            <p class = "username">
              <?php 
                include('phpFunctions/manage.php');
              ?></p>
          </td>
        </tr>

        <tr>
          <td>
            <h3 style = "float: left; padding: 0; margin-left: 70px; color: #222328;"> Balance </h3>
            <h3 class = "ALP" style = "float: center; color: black; padding: 0; margin-left: 150px;"><?php echo $row['balance'] ?> ALP</h3>
            <h3 class = "USD" style = "float: right; padding: 0; margin-right: 60px;"> = <?php echo $row['balance'] * 30 ?> PHP</h3>
          </td>
        </tr>
      </table>
    <div class="button-container">
      <button type="button" id="buy-button" name="button"><i class="far fa-credit-card"></i></button>
    </div>
    <div class="buy-modal">
        <form method="post" class="buy-container">
          <div class="buy-head">
            <p class="label">Buy with Your Credit/Debit Card</p>
            <span tabIndex="0" class="close-buy"><i class="fas fa-times"></i></span>
          </div>
          <div class="buy-spend" tabindex="0">
            <p class="input-text">Spend</p>
            <div class="spend-input">
              <input id="deposit-amount" type="text" name="depoAmount" maxlength="8" placeholder="1000.00 - 100000.00">
              <div class="currency">
                <div><img class="logo-buy" src="https://cdn3.iconfinder.com/data/icons/major-currencies-24px-1/24/peso_philippine_business_PHP-512.png" alt=""></div>
                <span>PHP</span>
              </div>
            </div>
          </div>
          <p class="error-message">The limit per transaction is between 1000.00 - 100000.00 PHP. Please adjust the amount.</p>
          <div class="buy-receive" tabindex="0">
            <p class="input-text">Receive</p>
            <div class="receive-input">
              <input id="receive-amount" type="text" name="receiveAmount" maxlength="10" placeholder="0.00">
              <div class="currency">
                <div><img class="logo-buy" src="images/logo.png" alt=""></div>
                <span>ALP</span>
              </div>
            </div>
          </div>
          <input id="buy-submit" type="submit" name="inputBuy" value="Continue">
        </form>
    </div>
  </section>

  <section id="Sell-content" class="sell-section">
    <div class="home-content">
        <h1>Sell Art Section</h1>
    </div>
  </section>

  <section id="Order" class="order-section">
    <div class="home-content">
        <h1>Order</h1>
    </div>
  </section>

  <section id="Collections" class="collect-section">
    <div class="home-content">
        <h1>Collections</h1>
    </div>
  </section>
  <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
    $(function (){
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      } 
    $("body").css("overflow-y", "scroll");

    })
  </script>
  <script src="assets/js/sidebar.js"></script>
  <script src="assets/js/scroll-out.js"></script>
  <script>
    ScrollOut({
      targets: 'div, img, h1'
    })
  </script>
  <script src="assets/js/buy.js"></script>
</body>

</html>