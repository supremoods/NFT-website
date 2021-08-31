<?php
    include('dbConnect.php');

    $sql = "SELECT * FROM `product`";
    $products = $conn->query($sql) or die ($conn->error);
    $row = $products->fetch_assoc();

    $php = 30;

    do{ 
        echo'
        <div class="grid-item">
            <div>
            <img class="thumbnail" src="'.$row['image'].'" alt="sample image">
                <div class="artwork-description">
                    <h6>'.$row['name'].'</h6>
                    <div class="line">
                        <p>Current bid</p>
                        <div class="bid-price">
                            <img class="token" src="images/logo.png" height="20" width="20">
                            <h5>'.$row['price'].' ALP </h5>
                        </div>
                    </div>
                    <div class="line w-price">
                        <p class="price">= PHP '.$row['price'] * $php.'</p>
                    </div>
                    <div class="line creator">
                        <p class="p-content"> Creator </p>
                        <h5>'.$row['creator'].'</h5>
                    </div>
                </div>
            </div>
        </div>
        ';        
    } while ($row = $products->fetch_assoc());
?>

    