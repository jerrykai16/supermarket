<?php
    $id = $_POST["pId"];
    $price = $_POST["price"];

    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',            // 密碼
        'supermarket');
    $sql = "update product set pPrice = $price where pID = '$id'";
    if(mysqli_query($link,$sql))
        echo "更新成功!";
    else
        echo "更新失敗!";
    
    
    mysqli_close($link);
?> 