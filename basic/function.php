<?php
    function test(){
        echo "HELLO WORLD";
    }

    
    function square($w){
        echo $w * $w;
    }
    // square(66);

    function rect($w,$h){
        echo $w * $h;
    }
    rect(100,60);

    function tax($price){
        return $price * 1.1;
    }

    // echo tax(1000);
    $total = tax(1000);
    echo $total;

    function error($e){
        switch($e){
            case 0:
                return "success";
                break;
            case 1:
                return "連線錯誤";
                break;
            case 2:
                return "檔案錯誤";
                break;
        }
    }

    $err = error(2);
    echo $err;
