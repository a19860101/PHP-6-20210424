<?php
    require_once("conn.php");
    extract($_REQUEST);
    $skill = implode(",",$skill);
    $sql = "UPDATE students 
            SET 
                name    = '$name',
                mail    = '$mail',
                gender  = '$gender',
                edu     = '$edu',
                skill   = '$skill',
                comment = '$comment' 
                WHERE id = {$id}";


    mysqli_query($conn,$sql);

    // header("location:show.php?id={$id}");

    echo "<script>alert('資料已更新');</script>";
    header("refresh:0;url=show.php?id={$id}");