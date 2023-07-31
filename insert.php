<?php

$ID = $_POST["ID"];
$Attribute = $_POST["Attribute"];
$Price = $_POST["Price"];

    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',            // 密碼
        'supermarket');
        
    date_default_timezone_set('Asia/Taipei');
    $Time = date('Y-m-d H:i:s');

    $sql = "INSERT INTO `product`(`pID`, `pAttribute`, `pPrice`, `pInstockTime`) VALUES ('$ID','$Attribute','$Price','$Time')";
    echo "建立成功！";
    echo "<a href=index.html>返回主畫面</a>";
    mysqli_query($link, $sql);
    mysqli_close($link);
?>
