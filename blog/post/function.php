<?php
    function showAllPost(){
        $pdo = pdo();
        $sql = "SELECT * FROM posts";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute();
            $students = $stmt->fetchAll();
            return $students;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function showPost(){}
    function storePost($request){
        $pdo = pdo();
        extract($request);
        $sql = "INSERT INTO posts(title,content,created_at,updated_at)VALUES(?,?,now(),now())";
        $stmt = $pdo->prepare($sql);
        
        try {
            $stmt->execute([$title,$content]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
