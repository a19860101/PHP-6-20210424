<?php
    require_once("pdo.php");
    extract($_REQUEST);

    $sql = "UPDATE students SET 
            name    =?,
            mail    =?,
            gender  =?,
            edu     =?,
            skill   =?,
            comment =?
            WHERE id = ?
            ";
    $stmt = $pdo->prepare($sql);
    $skill = implode(",",$skill);
    try {
        $stmt->execute([$name,$mail,$gender,$edu,$skill,$comment,$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    echo "<script>alert('資料已修改');</script>";
    header("refresh:0;url=show.php?id={$id}");
    