<?php
    require_once("conn.php");
    extract($_REQUEST);

    $skill = implode(",",$skill);
    // print_r($skill);
    $sql = "INSERT INTO students(name,mail,gender,edu,skill,comment)VALUES('$name','$mail','$gender','$edu','$skill','$comment')";
    mysqli_query($conn,$sql);

    // header("location:index.php");
    // echo "資料已新增";
    echo "<script>alert('資料已新增');</script>";
    header("refresh:0;url=index.php");
