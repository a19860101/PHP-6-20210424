<?php
    function showAllPosts(){
        $pdo = pdo();
        $sql = "SELECT posts.*,users.user,users.mail FROM posts LEFT JOIN users ON posts.user_id = users.id";
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
        $sql = "SELECT * FROM posts WHERE id = ? ";
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
        $sql = "INSERT INTO posts(title,content,user_id,created_at,updated_at)VALUES(?,?,?,now(),now())";
        $stmt = $pdo->prepare($sql);
        $user_id = $_SESSION["AUTH"]["id"];
        try {
            $stmt->execute([$title,$content,$user_id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function editPost($request){
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
    function updatePost($request){
        $pdo = pdo();
        extract($request);
        $sql = "UPDATE posts SET title=?,content=?,updated_at=now() WHERE id=?";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$title,$content,$id]);
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
