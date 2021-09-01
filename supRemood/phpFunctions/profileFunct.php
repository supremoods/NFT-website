<?php
        if(isset($_POST['submitEmail'])){
            $email = $_POST['email'];
            $query = mysqli_query ($conn, "UPDATE user SET email='$email' WHERE userID = '$id' ") or die (mysqli_error());

            $query = mysqli_query ($conn, "SELECT * FROM user WHERE userID = '$id' ") or die (mysqli_error());
            $fetch = mysqli_fetch_array ($query);
        }
        if(isset($_POST['submitUser'])){
            $username = $_POST['username'];
            $query = mysqli_query ($conn, "UPDATE user SET username='$username' WHERE userID = '$id' ") or die (mysqli_error());

            $query = mysqli_query ($conn, "SELECT * FROM user WHERE userID = '$id' ") or die (mysqli_error());
            $fetch = mysqli_fetch_array ($query);
        }
        if(isset($_POST['submitPass'])){
            $password = $_POST['password'];
            $query = mysqli_query ($conn, "UPDATE user SET password='$password' WHERE userID = '$id' ") or die (mysqli_error());

            $query = mysqli_query ($conn, "SELECT * FROM user WHERE userID = '$id' ") or die (mysqli_error());
           
        }
        if (isset($_POST['uploadImage'])){
            if(!empty($_POST['fileUpload'])){
                $image = $_FILES['fileUpload']['name'];
                $target = "images/".basename($image);

                $query = mysqli_query ($conn, "UPDATE user SET image='$image' WHERE userID = '$id' ") or die (mysqli_error());
                // $fetch = mysqli_fetch_array ($query);

                if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target)) {
                    echo "<script>window.location = 'manageAccount.php';</script>";
                }else{
                    echo  "Failed to upload image";
                }
            }else{
                echo '
                <div id="toast-id">
                  <div class="toast">
                    <div class="toast-container">
                      <div class="toast-content">
                        <div class="toast-icon">
                          <i class="fas fa-exclamation"></i>
                        </div>
                        <p class="toast-message">Please upload first</p>
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
            
           
        }
        
?>