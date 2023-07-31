<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '',            // 密碼
            'supermarket');
        $sql = "select pID from product";
        $result = mysqli_query($link,$sql);

        while($row = mysqli_fetch_assoc($result)){
        $pId[] = $row["pID"];
        }
        
        mysqli_close($link);
    ?>
    <form method="post" action="DBupdate.php">
        pID:
        <select name="pId">
            <?php
                foreach($pId as $id){
                    echo "<option value=$id>$id</option>";
                }
            ?>
        </select>
        </br>
        價格:
        <input type="text" name="price">
        </br>
        <input type="submit" value="更新">
    </form>
</body>
</html>