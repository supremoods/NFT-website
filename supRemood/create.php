<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/create.css" />
  <link rel="stylesheet" href="assets/css/nav.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
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
          <li class="links"><a class="btn-link1" href="index.html#cover-section">Home</a></li>
          <li class="links"><a class="btn-link2" href="index.html#about-section">About us</a></li>
          <li class="links"><a class="btn-links" href="market_page.html">Gallery</a></li>
          <li class="links"><a class="btn-link3" href="index.html#contact-us">Contact Us</a></li>
          <li><a id="log-in-btn" href="Log In.html">Log in</a></li>
        </ul>
        <div class="icon menu-btn">
          <i class="fab fa-mendeley"></i>
        </div>
      </div>
    </nav>
  </div>
  <div class="regContainer">
    <div id="registerContainer">
      <br>
      <div id="registerhead">
        <h1 id="registerheader"> REGISTER</h1>
        <img src="photo1629544662-removebg-preview.png" class="center">
      </div>

      <form class=registerhead1>

        <i class="fa fa-user "></i>
        <input class="textbox" type="text" name="username" id="username" placeholder="Username " required /><br>

        <i class="fa fa-envelope"></i>
        <input class="textbox" type="email" name="email" id="email" placeholder="Email " required /><br>

        <i class="fas fa-unlock-alt "></i>
        <input class="textbox" type="password" name="password" id="password" placeholder="Password" required />
        <i class="toggleView-1 far fa-eye-slash" id="togglePassword"></i>
        <br>



        <i class="fas fa-unlock-alt "></i>
        <input class="textbox" type="password" name="co_password" id="co_password" placeholder="Confirm Password " required />
        <i class="toggleView-2 far fa-eye-slash" id="togglePassword"></i><br>

        <a href="Log In.html" class="haveacc">Already have an account?</a>

      </form>

      <div class="RegisterButton">
        <input id="submit-button" type="submit" value="Register"></input>
      </div>
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
  <script type="text/javascript" src="assets/js/account.js"></script>
  <script src="assets/js/script.js"></script>
</body>
