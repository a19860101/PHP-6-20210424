<?php
    $foods = ["Apple","Banana","rice","latte","Bread"];
    $users = [
        "name" => "John",
        "mail" => "john@gmail.com",
        "gender" => "male",
        "age"   =>"20"
    ];

    // 陣列->字串
    echo implode("---",$foods);
    echo implode(",",$users);
    echo "<br>";

    // 字串->陣列
    $string = "HELLO,PHP,MYSQL";
    print_r(explode(",",$string));
    echo "<br>"; 
    
    //關聯陣列轉換
    // $name = $users["name"];
    // $mail = $users["mail"];
    // $gender = $users["gender"];
    // $age = $users["age"];
    extract($users);//解構
    echo $name.$mail.$gender.$age;
    echo "<br>"; 

    $title = "HELLO PHP";
    $content = "test test test";
    $date = "20210424";
    // $post = [$title,$content,$date];
    $post = compact("title","content","date");
    print_r($post);
    echo "<br>"; 
    
    //in_array(),is_array()

    var_dump(in_array("Apple",$foods));
    var_dump(in_array("20",$users));
    var_dump(is_array($foods));
    echo "<br>"; 
    
    //count()
    echo count($foods);
    echo "<br>";
    
    //shuffle()
    echo implode(",",$foods);
    echo "<br>";
    shuffle($foods);
    echo implode(",",$foods);