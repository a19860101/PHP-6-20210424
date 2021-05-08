<?php
    require_once("pdo.php");
    $sql = "SELECT * FROM galleries";
    $stmt = $pdo->prepare($sql);;
    $stmt->execute();
    $imgs = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="index.php">上傳圖片</a>
    </div>
    <?php foreach($imgs as $img){ ?>
        <div>
            <img src="images/<?php echo $img["img_name"]; ?>" width="200">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $img["id"];?>">
                <input type="submit" value="刪除">
            </form>
        </div>
    <?php } ?>
    <?php
        // if(isset($_POST["img"])){
        //     // echo $_POST["img"];
        //     unlink($_POST["img"]);
        //     header("location:list.php");
        // }
    ?>
</body>
</html>