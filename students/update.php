<?php
    require_once("conn.php");
    extract($_REQUEST);
    $skill = implode(",",$skill);
    $sql = "UPDATE students 
            SET 
                name    = '$name',
                mail    = '$mail',
                gender  = '$gender,
                edu     = '$edu',
                skill   = '$skill',
                comment = '$comment'
            WHERE id = {$id}";
    mysqli_query($conn,$sql);

    // header("location:show.php?id={$id}");