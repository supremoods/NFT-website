<?php
    include('dbConnect.php');

    if(isset($_POST['submit'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

            $cmd = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($cmd);
            $count = mysqli_num_rows($cmd);

            if($count == 1){
                session_start();
                $_SESSION['id'] = $row['userID'];
                header("location:index.php");
            }else{
                echo '
                <div id="toast-id">
                  <div class="toast">
                    <div class="toast-container">
                      <div class="toast-content">
                        <div class="toast-icon">
                          <i class="fas fa-exclamation"></i>
                        </div>
                        <p class="toast-message">The username or password you’ve entered is incorrect</p>
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
            echo "all fields required!";
        }
    }
?>
