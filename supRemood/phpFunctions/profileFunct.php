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
            $image = $_FILES['fileUpload']['name'];
            $target = "images/".basename($image);

            $query = mysqli_query ($conn, "UPDATE user SET image='$image' WHERE userID = '$id' ") or die (mysqli_error());
            // $fetch = mysqli_fetch_array ($query);

            if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target)) {
                echo "<script>window.location = 'manageAccount.php';</script>";
            }else{
                echo  "Failed to upload image";
            }
           
        }
        
?>