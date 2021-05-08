<?php
    session_start();
    extract($_REQUEST);
    $_SESSION["USER"] = $user;

    echo $_SESSION["USER"];