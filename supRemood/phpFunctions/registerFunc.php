<?php
    include('dbConnect.php');

    if(isset($_POST['submit'])){

        if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            
            $checkUsername = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username'"));
            $checkEmail = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'"));

            if($checkUsername == 1){
                echo "
                    <div id='myModal' class='modal'>
                        <!-- Modal content -->
                        <div class='modal-content'>
                            <span class='close'>&times;</span>
                            <p>username already exist</p>
                        </div>
                    </div>
                ";	 
            }elseif($checkEmail == 1){
                echo "
                    <div id='myModal' class='modal'>
                        <!-- Modal content -->
                        <div class='modal-content'>
                            <span class='close'>&times;</span>
                            <p>email already exist</p>
                        </div>
                    </div>                  
                ";
            }else{
                
                $query = "INSERT INTO user(userID,username,email,password) VALUES(NULL,'$username','$email','$password')";

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