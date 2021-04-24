<?php
    //陣列 array

    // $a = array();
    // $a[0] = "Apple";
    // $a[1] = "Banana";
    // $a[2] = "Cat";

    // $a = array("Apple","Banana","Cat");

    $foods = ["Apple","Banana","rice","latte"];

    // print_r($foods);
    // echo $foods[0];
    // echo $foods[1];
    // echo $foods[2];
    // echo $foods[3];

    //陣列迭代
    for($i=0;$i<4;$i++){
        echo $foods[$i];
        echo "<br>";
    }
    foreach($foods as $food){
        echo $food;
        echo "<br>";
    }
    print_r($foods);
    echo "<br>";
    
    //關聯陣列
    $users = [
        "name" => "John",
        "mail" => "john@gmail.com",
        "gender" => "male"
    ];
    echo "<br>";
    print_r($users);
    echo "<br>";

    foreach($users as $key => $value){
        echo "{$key}:{$value}";
        echo "<br>";
    }