<?php

$ID = $_POST["ID"];
$Attribute = $_POST["Attribute"];
$Price = $_POST["Price"];
$Time = $_POST["time"];

    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',            // 密碼
        'supermarket');
        
        $sql = "INSERT INTO `product`(`pID`, `pAttribute`, `pPrice`, `pInsotckTime`) VALUES ('$ID','$Attribute','$Price','$Time')";
        echo "$sql";
        mysqli_query($link, $sql);


    mysqli_close($link);
?>
