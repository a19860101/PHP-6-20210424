<?php
    require_once("../pdo.php");
    require_once("function.php");
    storePost($_REQUEST);
    
    echo "<script>alert('文章已新增');</script>";
    header("refresh:0;url=index.php");