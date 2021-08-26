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
                echo "
                <div id='myModal' class='modal'>
                    <!-- Modal content -->
                    <div class='modal-content'>
                        <span class='close'>&times;</span>
                        <p>Invalid Email or Password</p>
                    </div>
                </div>
            ";	 
            }

        }else{
            echo "all fields required!";
        }
    }
?>