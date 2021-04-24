<?php

    // echo "hello world";

    // echo "<h1>HELLO WORLD!!!!</h1>";

    // print_r("<h1>HELLO WORLD!!!!</h1>");

    // $a = ['apple','banana'];

    // echo $a;
    // print_r($a);
    // var_dump($a);

    // 變數
    /*
        命名規則
        1.首字只可使用英文與底線
        2.大小寫有別
        3.符號可只使用底線
    */

    $_x = 100;
    $_X = 999;

    echo $_X;
    echo $_x;

    //常數
    define("MAIL","asdf@gmail.com");

    echo MAIL;
    echo "<br>";
    
    // 資料型態
    /*
        1. String 字串
        2. Integer 整數
        3. Float 浮點數
        4. Boolean 布林
    */

    $x = "HELLO WORLD";
    // $x = 'HELLO WORLD';
    // echo $x;
    $y = 100;
    // $y = 3.14;
    $z = true;
    // echo $z;

    var_dump($y);
    
    
?>