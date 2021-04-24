<?php
    // if($_POST){
    //     print_r($_POST);
    //     echo "<br>";
    //     echo $_POST["name"];
    //     echo "<br>";
    //     echo $_POST["mail"];
    // }


    // if($_GET){
    //     print_r($_GET);
    //     echo "<br>";
    //     echo $_GET["name"];
    //     echo "<br>";
    //     echo $_GET["mail"];
    // }

    // print_r($_REQUEST);
    // echo "<br>";
    // echo $_REQUEST["name"];
    // echo "<br>";
    // echo $_REQUEST["mail"];

    extract($_REQUEST);
    echo $name;
    echo "<br>";
    echo $mail;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $edu;
    echo "<br>";
    echo implode(",",$skill);