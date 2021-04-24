<?php
    $x = 123;

    //if
    if($x > 0){
        echo "大於零";
    }

    // if...else
    if($x > 0){
        echo "大於零";
    }else{
        echo "error";
    }

    // if...elseif...

    if($x > 0){
        echo "大於零";
    }elseif($x < 0){
        echo "小於零";
    }

    if($x > 0){
        echo "大於零";
    }elseif($x < 0){
        echo "小於零";
    }else{
        echo "error";
    }
    echo "<br>";

    if($x > 100){

    }elseif($x > 80){

    }elseif($x > 60){

    }

    //switch
    switch($x){
        case 0:
            echo 0;
            break;
        case 10:
            echo 10;
            break;
        case 100:
            echo 100;
            break;
        default:
            echo "error";
    }
    echo "<br>";

    switch(true){
        case $x > 0:
            echo "> 0";
            break;
        case $x < 0:
            echo "< 0";
            break;
        default:
            echo "error";
    }

    echo "<br>";
    // 三元運算子

    $a = 321;
    // echo $a > 0 ? "success":"error" ;

    echo $a == 0 ? "success":"error";