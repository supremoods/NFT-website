<?php
        
        $sql = "SELECT * FROM temp_value";
        $query =  $conn->query($sql) or die ($conn->error);
        $get_ID = $query->fetch_assoc();
        
?>