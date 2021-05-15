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
    function showPost($request){
        $pdo = pdo();
        extract($request);
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$id]);
            $post = $stmt->fetch();
            return $post;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

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
    function deletePost($request){
        $pdo = pdo();
        extract($request);
        $sql = "DELETE FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
