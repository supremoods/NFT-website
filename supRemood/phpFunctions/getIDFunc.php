<?php
        include('dbConnect.php');

        $p1 = json_decode($_POST['temp_data']);
        print_r($_POST['temp_data']);


        $query = mysqli_query ($conn, "UPDATE temp_value SET temp='$p1' WHERE 1 ") or die (mysqli_error());


?> 