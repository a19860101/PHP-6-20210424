<?php
    require_once("../pdo.php");
    require_once("function.php");
    deletePost($_REQUEST);

    echo "<script>alert('文章已刪除');</script>";
    header("refresh:0;url=index.php");