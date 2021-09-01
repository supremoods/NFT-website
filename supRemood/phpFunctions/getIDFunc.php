<?php
        $p1 = json_decode($_POST['temp_data']);
        print_r($_POST['temp_data']);

        include("phpFunctions/passValue.php");
        $p2 = $p1;
        passID($p2);

?> 