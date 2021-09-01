<?php
    include('dbConnect.php');

    if (isset($_POST['digital_button'])) {
        $sql = "SELECT * FROM `product` where `category` = 'digital_art';";
    } else if (isset($_POST['painting_button'])) {
        $sql = "SELECT * FROM `product` where `category` = 'painting_art';";
    } else if (isset($_POST['pixel_button'])) {
        $sql = "SELECT * FROM `product` where `category` = 'pixel_art';";
    } else if (isset($_POST['integrated_button'])) {
        $sql = "SELECT * FROM `product` where `category` = 'integrated_art';";
    } else if (isset($_POST['chibi_button'])) {
        $sql = "SELECT * FROM `product` where `category` = 'chibi_art';";
    } else if (isset($_POST['vector_button'])) {
        $sql = "SELECT * FROM `product` where `category` = 'vector_art';";
    } else if (isset($_POST['search'])) {
        $search = $_POST['searchField'];
        $sql = "SELECT * FROM `product` where `name` like '$search';";
    } else {
        $sql = "SELECT * FROM `product`";
    }

    $products = $conn->query($sql) or die ($conn->error);
    $row = $products->fetch_assoc();

    $php = 30;

    if (!empty($row)){

        do{ 
            echo'
            <div class="grid-item" id="'.$row['product_id'].'">
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
    } else {
        echo 'None '; 
    }
?>

    