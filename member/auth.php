<?php
    session_start();
    require_once("pdo.php");
    require_once("function.php");

    auth($_REQUEST);

    echo "<script>alert('登入成功')</script>";
    header("refresh:0;url=index.php");