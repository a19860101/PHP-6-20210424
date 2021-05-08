<?php
    require_once("pdo.php");
    extract($_REQUEST);

    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    echo "<script>alert('資料已刪除]');</script>";
    header("refresh:0;url=index.php");