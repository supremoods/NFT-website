
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/styleFeat.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js">
  </script>
  <title>ALPAS</title>
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
          <li class="links"><a class="btn-link1" href="#cover-section">Home</a></li>
          <li class="links"><a  class="btn-link2" href="#about-section">About us</a></li>
          <li class="links"><a class="btn-links" href="market_page.php">Gallery</a></li>
          <li class="links"><a class="btn-link3" href="#contact-us">Contact Us</a></li>

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

  <div class="cover" id="cover-section">
    <div class="slider">
      <!-- fade css -->
      <div class="myslide fade">
        <div class="txt">
          <center>
          <img src="images/logo.png" alt="">
          </center>
          <h1>ALPAS</h1>
          <p>Let your imagination free</p>
          <div class="btn-explore">
          <button class="btn-exp">EXPLORE</button>
          </div>
        </div>
        <img class="slide-img" src="images/slide1.jpg" style="width: 200vh; height: 120vh;">
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1 c;a>NFT Art Market</h1>
          <p>Discover and Collect rare digital artwork</p>
          <div class="btn-explore">
          <button class="btn-exp1">EXPLORE</button>
          </div>
        </div>
        <img class="slide-img" src="images/slide2.jpg" style="width: 200vh; height: 120vh;">
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1 class="txt-2">Creativity St<span>ARTS</span> Here</h1>
          <div class="btn-explore">
          <button class="btn-exp2">EXPLORE</button>
          </div>
        </div>
        <img class="slide-img" src="images/slide4.jpg" style="width: 200vh; height: 120vh;">
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>Be a Collector</h1>
          <div class="btn-explore">
          <button class="btn-exp3">EXPLORE</button>
          </div>
        </div>
        <img class="slide-img" src="images/slide5.jpg" style="width: 200vh; height: 120vh;">
      </div>


      <!-- /fade css -->

      <!-- onclick js -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
      <!-- /onclick js -->
    </div>

  </div>
  <div id="about-section" class="about-us">
    <h1>About Section</h1>
  </div>

  <div id="gallery-section" class="gallery">
   
    <div class="app">
       <div class="feat-txt">
      <h1>Featured Art</h1>
    </div>
      <div class="cardList">
        <button class="cardList__btn btn btn--left">
          <i style="color: #fff; font-size: 2em;" class="fas fa-angle-left"></i>
        </button>
        <div class="cards__wrapper">
          <div class="card current--card">
            <div class="card__image">
              <img class="img-feat" src="images/1.jpg" alt="" />
            </div>
          </div>
          <div class="card next--card">
            <div class="card__image">
              <img class="img-feat" src="images/2.png" alt="" />
            </div>
          </div>
          <div class="card next--next--card">
            <div class="card__image">
              <img class="img-feat" src="images/4.jpg" alt="" />
            </div>
          </div>
          <div class="card previous--card">
            <div class="card__image">
              <img class="img-feat" src="images/3.jpg" alt="" />
            </div>
          </div>
          <div class="card previous--previous--card">
            <div class="card__image">
              <img class="img-feat" src="images/5.jpg" alt="" />
            </div>
          </div>
        </div>
        <button class="cardList__btn btn btn--right">     
          <i style="color: #fff; font-size: 2em;" class="fas fa-angle-right"></i>
        </button>
      </div>
      <!---- and more ----->
      <div class="infoList">
        <div class="info__wrapper">
          <div class="info current--info">
            <h1 class="text name"> Goldfish </h1>
            <h4 class="text location">z--ed</h4>
            <p class="text description">creator</p>
          </div>
          <div class="info next--info">
            <h1 class="text name">Chloe </h1>
            <h4 class="text location">Aris Jerome</h4>
            <p class="text description">creator</p>
          </div>
          <div class="info next--next--info">
            <h1 class="text name">Alisa </h1>
            <h4 class="text location">Kumography</h4>
            <p class="text description">creator</p>
          </div>
          <div class="info previous--info">
            <h1 class="text name">Barbara </h1>
            <h4 class="text location">Razaras</h4>
            <p class="text description">creator</p>
          </div>
          <div class="info previous--previous--info">
            <h1 class="text name">Some day</h1>
            <h4 class="text location">Kerantenita</h4>
            <p class="text description">creator</p>
          </div>
        </div>
      </div>

      <div class="app__bg">
        <div class="app__bg__image current--image">
          <img class="img-feat" src="images/1.jpg" alt="" />
        </div>
        <div class="app__bg__image next--image">
          <img class="img-feat" src="images/2.png" alt="" />
        </div>
        <div class="app__bg__image next--next--image">
          <img class="img-feat" src="images/4.jpg" alt="" />
        </div>
        <div class="app__bg__image previous--image">
          <img class="img-feat" src="images/3.jpg" alt="" />
        </div>
        <div class="app__bg__image previous--previous--image">
          <img class="img-feat" src="images/5.jpg" alt="" />
        </div>
      </div>
      <div class="loading__wrapper">
        <div class="loader--text">Loading...</div>
        <div class="loader">
          <span></span>
        </div>
      </div>
      <svg class="icons" style="display: none;">
        <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
          <polyline points='328 112 184 256 328 400'
            style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
        <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
          <polyline points='184 112 328 256 184 400'
            style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
      </svg>
    </div>
  </div>
  <script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js'></script>
  <script src="assets/js/scriptFeat.js"></script>

  <div class="contact-section" id="contact-us">
    <h1>Contact Us</h1>
    <div class="border"></div>
    <form class="contact-form" action="index.html" method="post">
        <input type="text" class="contact-form-text" placeholder="Your name">
        <input type="email" class="contact-form-text" placeholder="Your email">
        <input type="text" class="contact-form-text" placeholder="Your phone">
        <textarea class="contact-form-text" placeholder="Your message"></textarea>
        <input type="submit" class="contact-form-btn" value="Send">
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
      <li><a href="index.php#cover-section">Home</a></li>
      <li><a href="market_page.php">Gallery</a></li>
      <li><a href="#about-section">About us</a></li>
      <li><a href="#contact-us">Contact us</a></li>
    </ul>

    <p class="copyright">
      ALPAS @ 2021
    </p>
  </section>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
</body>


</html>