<?php
    session_start();
    require_once("pdo.php");
    require_once("function.php");

    auth($_REQUEST);

    
    header("refresh:0;url=index.php");