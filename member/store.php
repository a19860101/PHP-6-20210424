<?php
    require_once("pdo.php");
    require_once("function.php");

    store($_REQUEST);

    echo "<script>alert('會員註冊成功，請重新登入')</script>";
    header("refresh:0;url=index.php");