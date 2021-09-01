<?php

    include('phpFunctions/dbConnect.php');
    $id = $_SESSION['id'];            

    $query = "SELECT * FROM `user` WHERE `userID` = $id";
    $cmd = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($cmd);
    echo $row['username']; //SHOW THE USERNAME IN ALP WALLET

    if(isset($_POST['inputBuy'])){
        $deposit = (float)$_POST['receiveAmount'];
        $deposit += (float)$row['balance'];
        $updateBalance = "UPDATE `user` SET `balance`= $deposit  WHERE `userID`= '$id'";
        $cmd = mysqli_query($conn,$updateBalance);
        echo '
        <div class="verification-modal">
            <div class="verification">
                <div class="verification-head">
                <p class="label">Please Wait...</p>
                </div>
                <div class="check-container">
                <input type="checkbox" id="check">
                <label class="verified-check" for="check">
                    <div class="check-icon"></div>
                </label>
                </div>
                <input id="close-button" type="button" value="Close">
            </div>
        </div> 
        ';
        $query = "SELECT * FROM `user` WHERE `userID` = $id";
        $cmd = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($cmd);

    }
?>  