<?php
    require_once('pdo.php');
    extract($_REQUEST);
    try {
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $student = $stmt->fetch();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
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
    <h2>學員資料 #<?php echo $student["id"];?></h2>
    <ul>
        <li><?php echo $student["name"]; ?></li>
        <li><?php echo $student["mail"]; ?></li>
        <li><?php echo $student["edu"]; ?></li>
        <li><?php echo $student["gender"]; ?></li>
        <li><?php echo $student["skill"]; ?></li>
        <li><?php echo $student["comment"]; ?></li>
    </ul>
    <a href="index.php">學員列表</a>
    <hr>
    <a href="edit.php?id=<?php echo $student["id"]; ?>">編輯</a>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $student["id"];?>">
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
    </form>
</body>
</html>