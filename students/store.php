<?php
    require_once("conn.php");
    extract($_REQUEST);

    $skill = implode(",",$skill);
    print_r($skill);
    $sql = "INSERT INTO students(name,mail,gender,edu,skill,comment)VALUES('$name','$mail','$gender','$edu','$skill','$comment')";
    mysqli_query($conn,$sql);

    header("location:index.php");