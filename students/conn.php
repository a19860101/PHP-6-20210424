<?php

    //*  第一種連線方式
    // $db_host = "localhost";
    // $db_user = "admin";
    // $db_pw = "admin";
    // $db_name = "php-6-20210424";

    // // define("DB_HOST","localhost");

    // $conn = @mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫連線錯誤");
    // // $conn = mysqli_connect("localhost","admin","admin","php-6-20210424");
    // @mysqli_query($conn,"SET NAMES utf8mb4")or die("資料庫編碼錯誤");

    //*  第二種連線方式
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php-6-20210424";

    //建立mysqli實
    $conn = @new mysqli($db_host,$db_user,$db_pw,$db_name);
    // print_r($conn->connect_error);
    // print_r($conn->connect_errno);
    if($conn->connect_errno){
        // echo "資料庫連線錯誤";
        echo $conn->connect_error;
        return ;
    }

    $conn->query("SET NAMES utf8mb4");
