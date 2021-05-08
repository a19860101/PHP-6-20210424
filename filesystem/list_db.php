<?php
    require_once("pdo.php");
    $sql = "SELECT * FROM galleries";
    // $stmt = $pdo->prepare($sql);;
    // $stmt->execute();
    // $imgs = $stmt->fetchAll();

    // $result = $pdo->query($sql);
    // $imgs = $result->fetchAll();

    $imgs = $pdo->query($sql)->fetchAll();
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
                <input type="hidden" name="img_name" value="<?php echo $img["img_name"];?>">
                <input type="submit" value="刪除" onclick="return confirm('確認刪除？');">
            </form>
        </div>
    <?php } ?>
    <?php
        if(isset($_POST["id"])){
            extract($_POST);
            unlink("images/".$img_name);
            $sql = "DELETE FROM galleries WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);

            header("location:list_db.php");
        }
    ?>
</body>
</html>