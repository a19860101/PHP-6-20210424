<?php
    require_once("conn.php");
    extract($_REQUEST);
    $sql = "DELETE FROM students WHERE id = ".$id;
    mysqli_query($conn,$sql);

    // header("location:index.php");

    echo "<script>alert('資料已刪除');</script>";
    header("refresh:0;url=index.php");