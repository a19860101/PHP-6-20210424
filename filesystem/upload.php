<?php
    // print_r($_FILES["img"]);

    // echo $_FILES["img"]["name"];
    // echo $_FILES["img"]["error"];

    extract($_FILES["img"]);
    // echo $name;
    // echo "<br>";
    // echo $type;
    // echo "<br>";
    // echo $tmp_name;
    // echo "<br>";
    // echo $error;
    // echo "<br>";
    // echo $size;
    if(!is_dir("images")){
        mkdir("images");
    }
    if($error == 0){
        move_uploaded_file($tmp_name,"images/".$name);
    }