<?php
    require_once("../pdo.php");
    require_once("function.php");
    updatePost($_REQUEST);

    echo "<script>alert('文章已修改');</script>";
    header("refresh:0;url=index.php");