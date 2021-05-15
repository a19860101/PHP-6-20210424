<?php
    function showAllPosts(){
        $pdo = pdo();
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute();
            $posts = $stmt->fetchAll();
            return $posts;
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
