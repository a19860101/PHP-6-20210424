<?php 
    require_once("function.php");
    uploadCover($_FILES["img"]);
    header("refresh:0;url=create.php?gallery=1");