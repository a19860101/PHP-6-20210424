<?php
    function store($request){
        $pdo = pdo();
        extract($request);

        $sql_check = "SELECT * FROM users WHERE user = ?";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->execute([$user]);

        // echo $stmt_check->rowCount();
        if($stmt_check->rowCount() > 0){
            echo "<script>alert('帳號已存在，請重新選擇帳號')</script>";
            header("refresh:0;url=register.php");
            return ;
        }
        $sql = "INSERT INTO users(user,pw,mail,created_at)VALUES(?,?,?,now())";
        $stmt = $pdo->prepare($sql);
        $pw = sha1(md5($pw));
        try{
            $stmt->execute([$user, $pw, $mail]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }