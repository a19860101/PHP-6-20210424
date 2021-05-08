<?php
    // print_r($_FILES["img"]);

    // echo $_FILES["img"]["name"];
    // echo $_FILES["img"]["error"];

    extract($_FILES["img"]);
    // echo $name;
    // echo "<br>";
    // echo $type;
    // echo "<br>";
    // echo $tmp_name;
    // echo "<br>";
    // echo $error;
    // echo "<br>";
    // echo $size;
    switch($type){
        case "image/jpeg":
            $ext = ".jpg";
            break;
        case "image/png":
            $ext = ".png";
            break;
        case "image/gif":
            $ext = ".gif";
            break;
        default:
            echo "<script>alert('請使用正確的圖檔')</script>";
            header("refresh:0;url=index.php");
            return;
    }
    $img_name = md5(time()).$ext;
    if(!is_dir("images")){
        mkdir("images");
    }
    if($error == 0){
        move_uploaded_file($tmp_name,"images/".$img_name);
        header("location:index.php");
    }