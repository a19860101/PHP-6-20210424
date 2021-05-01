<?php
    //* 第一種
    // require_once("conn.php");
    // extract($_REQUEST);
    // $sql = "DELETE FROM students WHERE id = ".$id;
    // mysqli_query($conn,$sql);

    // // header("location:index.php");

    // echo "<script>alert('資料已刪除');</script>";
    // header("refresh:0;url=index.php");

    //* 第二種 prepare
    require_once("conn.php");
    extract($_REQUEST);
    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();

    echo "<script>alert('資料已刪除');</script>";
    header("refresh:0;url=index.php");