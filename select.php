<?php
    $id = $_POST["pId"];

    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',            // 密碼
        'supermarket');
    $sql = "select * from product where pID = '$id'";
    $result = mysqli_fetch_assoc(mysqli_query($link,$sql));
    
    echo "ID:$result[pID]</br>屬性:$result[pAttribute]</br>價格:$$result[pPrice]</br>入庫時間:$result[pInStockTime]</br></br>";
    echo "<a href=index.php>返回主畫面</a>";


    mysqli_close($link);
?>