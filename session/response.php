<?php
    session_start();
    // extract($_REQUEST);
    $_SESSION["AUTH"] = $_REQUEST;

    extract($_SESSION["AUTH"]);

    echo $user;
    echo "<br>";
    echo $pw;
    echo "<br>";
    echo $mail;