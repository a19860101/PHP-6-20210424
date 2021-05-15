<?php
    require_once("../pdo.php");
    require_once("function.php");

    auth($_REQUEST);

    header("refresh:0;url=../post/index.php");
