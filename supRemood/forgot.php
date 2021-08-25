<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/forgot.css">
</head>

<body>
  <div class="background">
    <p>Choose another Password</p><br><br>
    <form class="form">
      <br><br>
      <div class="pass">
        <label> New Password </label><br><br>
        <input class="textplace" id="password" type="password" placeholder="Password" required>
        <br><br><br>
        <label> Re-enter Password </label><br><br>
        <input class="textplace" id="co_password" type="password" placeholder="Re-enter password" required><br>
        <button id="submit-button" class="button">Confirm</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js"></script>
</body>

</html>
