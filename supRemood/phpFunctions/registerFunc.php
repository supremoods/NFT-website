<?php
    include('dbConnect.php');

    if(isset($_POST['submit'])){

        if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

    
            $checkUsername = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username'"));
            $checkEmail = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'"));

            if($checkUsername == 1 || $checkEmail == 1){
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
              ';
              if ($checkEmail == 1 && $checkUsername == 1){
                echo '
                  <script>
                  $(function () {
                    $(".toast-message").text("Username and Email is already taken.");
                  });
                  </script>
                  <div id="toast-id">
                  <div class="toast">
                    <div class="toast-container">
                      <div class="toast-content">
                        <div class="toast-icon">
                          <i class="fas fa-exclamation"></i>
                        </div>
                        <p class="toast-message">Username and Email is already taken.</p>
                      </div>
                      <div class="toast-dismiss">
                        <i class="fas fa-times"></i>
                      </div>
                    </div>
                    <div id="toast-progress"></div>
                  </div>
                </div>
                ';
              } elseif ($checkUsername == 1 && $checkEmail == 0){
                echo '
                <script>
                  $(function () {
                    $(".toast-message").text("Username is already taken");
                  });
                </script>
                <div id="toast-id">
                <div class="toast">
                  <div class="toast-container">
                    <div class="toast-content">
                      <div class="toast-icon">
                        <i class="fas fa-exclamation"></i>
                      </div>
                      <p class="toast-message">Username is already taken</p>
                    </div>
                    <div class="toast-dismiss">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div id="toast-progress"></div>
                </div>
              </div>
                ';
              } else {
                echo '
                  <script>
                    $(function () {
                      $(".toast-message").text("Email is already taken");
                    });
                  </script>
                  <div id="toast-id">
                  <div class="toast">
                    <div class="toast-container">
                      <div class="toast-content">
                        <div class="toast-icon">
                          <i class="fas fa-exclamation"></i>
                        </div>
                        <p class="toast-message">Email is already taken</p>
                      </div>
                      <div class="toast-dismiss">
                        <i class="fas fa-times"></i>
                      </div>
                    </div>
                    <div id="toast-progress"></div>
                  </div>
                </div>
                ';
              }
            
            }else{
                
                $query = "INSERT INTO user(userID,username,email,password,balance) VALUES(NULL,'$username','$email','$password',0)";

                $cmd = mysqli_query($conn,$query) or die(mysqli_error());
                
    
                if($cmd){
                   // echo " Registration Succcesful !";
                   header ("location:log_in.php");
                }else{
                   // echo " Registration not Succcesful";
                }
            }

           

        }else{
            echo "all fields required!";
        }
    }

?>