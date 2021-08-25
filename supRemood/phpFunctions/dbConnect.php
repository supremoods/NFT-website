<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbName = "nft-db";

    $conn = mysqli_connect($server, $username, $password, $dbName);
    
    if(mysqli_connect_errno()){
       // echo "Database not Connected";
        exit();
    }else{
      //  echo "Congrats Motherfucker";
    }
?>