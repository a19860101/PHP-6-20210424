<?php
    require_once("pdo.php");
    extract($_REQUEST);
    $sql = "INSERT INTO students(name, mail, gender, edu, skill, comment)VALUES(?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $skill = implode(",",$skill);
    
    try {
        $stmt->execute([$name,$mail,$gender,$edu,$skill,$comment]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    echo "<script>alert('資料已新增');</script>";
    header("refresh:0;url=index.php");