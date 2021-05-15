<?php
    function storeUser($request){
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
            echo "<script>alert('註冊成功，請重新登入')</script>";
            header("refresh:0;url=../post/index.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function auth($request){
        $pdo = pdo();
        extract($request);
    
        $sql = "SELECT * FROM users WHERE user = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch();
        if(!$row){
            echo "<script>alert('帳號不存在')</script>";
            return ;
        }
        $pw = sha1(md5($pw));
        if($pw == $row["pw"]){
            $_SESSION["AUTH"] = $row;
            echo "<script>alert('登入成功')</script>";
        }else{
            echo "<script>alert('帳號或密碼錯誤')</script>";
        }
    }