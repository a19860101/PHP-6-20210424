<?php
    //* 第一種
    // require_once("conn.php");
    
    // // $sql = "SELECT * FROM students WHERE id =".$_GET["id"];
    
    // extract($_GET);
    // $sql = "SELECT * FROM students WHERE id =".$id;
    // $result = mysqli_query($conn,$sql);
    // $student = mysqli_fetch_assoc($result);
    // print_r($student);
    
    //* 第二種prepare
    require_once("conn.php");
    extract($_GET);
    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
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