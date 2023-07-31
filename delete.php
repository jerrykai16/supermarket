<?php
    $id = $_POST["pId"];

    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',            // 密碼
        'supermarket');
    $sql = "delete from product where pID = '$id'";


    if(mysqli_query($link,$sql))
        echo "刪除成功!";
    else
        echo "刪除失敗!";
    echo "</br><a href=index.html>返回主畫面</a>";
    
    mysqli_close($link);
?> 