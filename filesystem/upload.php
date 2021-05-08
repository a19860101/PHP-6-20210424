<?php
    require_once("pdo.php");
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

    $sql = "INSERT INTO galleries(name,img_name,created_at)VALUES(?,?,now())";
    $stmt = $pdo->prepare($sql);

    if($error == 0){
        if(move_uploaded_file($tmp_name,"images/".$img_name)){
            $stmt->execute([$name,$img_name]);
            echo "<script>alert('圖片已上傳');</script>";
            header("refresh:0;url=index.php");
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上傳錯誤";
    }