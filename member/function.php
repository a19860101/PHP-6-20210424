<?php
    function store($request){
        $pdo = pdo();
        extract($request);
        $sql = "INSERT INTO users(user,pw,mail,created_at)VALUES(?,?,?,now())";
        $stmt = $pdo->prepare($sql);
        $pw = sha1(md5($pw));
        try{
            $stmt->execute([$user, $pw, $mail]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }