<?php

    extract($_REQUEST);
    // print_r($_REQUEST);
    unlink($img);
    header("refresh:0;url=create.php?gallery=1");