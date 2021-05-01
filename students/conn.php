<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php-6-20210424";

    // define("DB_HOST","localhost");

    $conn = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫連線錯誤");
    // $conn = mysqli_connect("localhost","admin","admin","php-6-20210424");
    @mysqli_query($conn,"SET NAMES utf8mb4")or die("資料庫編碼錯誤");