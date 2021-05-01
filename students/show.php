<?php
    require_once("conn.php");
    
    // $sql = "SELECT * FROM students WHERE id =".$_GET["id"];
    
    extract($_GET);
    $sql = "SELECT * FROM students WHERE id =".$id;
    $result = mysqli_query($conn,$sql);
    $student = mysqli_fetch_assoc($result);
    print_r($student);
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
</body>
</html>