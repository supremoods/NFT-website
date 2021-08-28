<?php
    include('dbConnect.php');

    if(isset($_POST['submit'])){
        if(!empty($_POST['email'])){

            $email = $_POST['email'];
            $checkEmail = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'"));

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
                    $(".toast-message").text("Email doesn\'t exist");
                  });
                </script>
              ';            
        }else{
            echo "AVAILABLE UNG EMAIL SA DB";
        }
    }

    else{
        echo " WALA PA";
    }
}

?>