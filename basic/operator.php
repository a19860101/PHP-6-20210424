<?php
    // 運算子

    // 算術運算子

    $x = 100;
    $y = 60;

    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";

    // 比較運算子
    $a = 10;
    $b = "10";
    var_dump($x > $y);
    echo "<br>";
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($a == $b);
    echo "<br>";
    var_dump($a === $b); //值與資料型態皆須相等
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";

    // 指定運算子

   echo  $x = $y;
   echo "<br>";
   echo  $x += $y;
   echo "<br>";
   echo  $x -= $y;
   echo "<br>";
   echo  $x *= $y;
   echo "<br>";
   echo  $x /= $y;
   echo "<br>";
   echo  $x %= $y;
   echo "<br>";


   // 邏輯運算子

   var_dump($x > 0 && $y > 0);//and
   var_dump($x > 0 || $y > 0);//or
   var_dump(!$x);
   echo "<br>";
   // 字串運算子

   $user = "John";
   $n = 268;

    // echo $user."你好";
    // echo $user.'你好';
    // echo "$user 你好";
    // echo '$user 你好';

    // echo "{$user}你好";
    // echo '{$user}你好';

    // echo "您是第".$n."位訪客";
    echo "您是第{$n}位訪客";
