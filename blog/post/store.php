<?php
    require_once("../pdo.php");
    require_once("function.php");
    
    
    if($_FILES["cover"]["name"]){
        $cover = uploadCover($_FILES["cover"]);
    }else{
        $cover = "";
    }

    
    if($cover == "請使用正確的圖檔"){
        echo "<script>alert('請使用正確的圖檔!!!')</script>";
        header("refresh:0;url=create.php?error=1");
        return ;
    }

    storePost($_REQUEST,$cover);
     
    echo "<script>alert('文章已新增');</script>";
    header("refresh:0;url=index.php");