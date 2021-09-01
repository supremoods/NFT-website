<?php
    include('dbConnect.php');

    
    if(isset($_POST['submit'])){
        if(!empty($_POST['email'])){

            $email = $_POST['email'];
            $checkEmail = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'"));
            setcookie("userEmail", $email, time() + 900);

            if($checkEmail == 0){
                echo '
                <div id="toast-id">
                  <div class="toast">
                    <div class="toast-container">
                      <div class="toast-content">
                        <div class="toast-icon">
                          <i class="fas fa-exclamation"></i>
                        </div>
                        <p class="toast-message"></p>
                      </div>
                      <div class="toast-dismiss">
                        <i class="fas fa-times"></i>
                      </div>
                    </div>
                    <div id="toast-progress"></div>
                  </div>
                </div>
                <script>
                  $(function () {
                    $(".toast-message").text("User doesn\'t exist");
                  });
                </script>
              ';            
        }else{
            echo '
              <section id="reset-container">
                <div class="reset">
                  <div id="close"><i class="fas fa-times"></i></div>
                  <p>Enter a new password for</p>
                  <p><strong>'. $email .'</strong></p>
                  <form class="reset-input" method="post">
                  <input type="password" name="newPassword" id="password" class="textplace" placeholder="New password" required>
                  <i class="toggleView-1 far fa-eye-slash" id="togglePassword"></i><br>

                  <br><br>
                  <input type="password" id="co_password" name="co_password" class="textplace" placeholder="Confirm password" required>
                  <i class="toggleView-2 far fa-eye-slash" id="togglePassword"></i><br>

                  <br><input type="submit" name="changePassword" id="submitNew">
                  </form>
                </div> 
              </section>
              <script src="assets/js/reset.js"></script>
            ';
        }
    }
 
}

if(isset($_POST['changePassword'])){
  $eml = $_COOKIE['userEmail'];
  if(!empty($_POST['newPassword']) || !empty($_POST['co_password'])){
    $pass = $_POST['newPassword'];

    $query = "UPDATE `user` SET `password`='$pass' WHERE `email` = '$eml'";
    $cmd = mysqli_query($conn,$query);
    header("location:log_in.php");
  }
}

?>