<?php
    require_once("../pdo.php");
    require_once("function.php");
    
    
    $cover = uploadCover($_FILES["cover"]);

    storePost($_REQUEST,$cover);
     
    echo "<script>alert('文章已新增');</script>";
    header("refresh:0;url=index.php");