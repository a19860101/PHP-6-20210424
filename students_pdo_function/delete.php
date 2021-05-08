<?php
    require_once("pdo.php");
    require_once("function.php");

    delete($_REQUEST);
   
    echo "<script>alert('資料已刪除]');</script>";
    header("refresh:0;url=index.php");