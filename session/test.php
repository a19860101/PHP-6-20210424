<?php
    session_start();
    if(isset($_SESSION["AUTH"])){
        extract($_SESSION["AUTH"]);
        echo $user;
        echo "<br>";
        echo $pw;
        echo "<br>";
        echo $mail;
    }
    ?>