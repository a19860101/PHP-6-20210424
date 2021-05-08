<?php
    require_once("pdo.php");
    require_once("function.php");
    store($_REQUEST);

    echo "<script>alert('資料已新增');</script>";
    header("refresh:0;url=index.php");