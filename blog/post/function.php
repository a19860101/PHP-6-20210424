<?php
    function showAllPosts(){
        $pdo = pdo();
        $sql = "SELECT posts.*,users.user,users.mail,categories.title AS c_title FROM posts 
                LEFT JOIN users ON posts.user_id = users.id 
                LEFT JOIN categories ON posts.category_id = categories.id 
                ORDER BY id DESC";
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
        $sql = "SELECT posts.*,users.user,users.mail,categories.title AS c_title FROM posts 
                LEFT JOIN users ON posts.user_id = users.id 
                LEFT JOIN categories ON posts.category_id = categories.id 
                WHERE posts.id = ? ";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$id]);
            $post = $stmt->fetch();
            return $post;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function createPost(){
        $pdo = pdo();
        $sql = "SELECT * FROM categories ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute();
            $categories = $stmt->fetchAll();
            return $categories;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function storePost($request,$cover){
        $pdo = pdo();
        extract($request);
        $sql = "INSERT INTO posts(title,cover,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,?,now(),now())";
        $stmt = $pdo->prepare($sql);
        $user_id = $_SESSION["AUTH"]["id"];
        try {
            $stmt->execute([$title,$cover,$content,$category_id,$user_id]);
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
    function uploadCover($files){
        extract($files);
        switch($type){
            case "image/jpeg":
                $ext = ".jpg";
                break;
            case "image/png":
                $ext = ".png";
                break;
            case "image/gif":
                $ext = ".gif";
                break;
            default:
                // echo "<script>alert('請使用正確的圖檔')</script>";
                // header("refresh:0;url=create.php?error=1");
                $msg = "請使用正確的圖檔";
                return $msg;
        }
        $img_name = md5(time()).$ext;
        if(!is_dir("images")){
            mkdir("images");
        }
    
        if($error == 0){
            if(move_uploaded_file($tmp_name,"images/".$img_name)){
                // echo "<script>alert('圖片已上傳');</script>";
                // header("refresh:0;url=index.php");
                return $img_name;
            }else{
                echo "上傳失敗";
            }
        }else{
            echo "上傳錯誤";
        }
    }
    function showPostWithCategory($request){
        $pdo = pdo();
        extract($request);
        $sql = "SELECT * FROM posts WHERE category_id = ? ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$category_id]);
            $posts = $stmt->fetchAll();
            return $posts;
        }catch(PDOException $e){
            echo $e->getMessage(); 
        }
    }
    function showPostWithUser($request){
        $pdo = pdo();
        extract($request);
        $sql = "SELECT * FROM posts WHERE user_id = ? ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$user_id]);
            $posts = $stmt->fetchAll();
            return $posts;
        }catch(PDOException $e){
            echo $e->getMessage(); 
        }
    }
    function showUser($request){
        $pdo = pdo();
        extract($request);
        $sql = "SELECT * FROM users WHERE id = ? LIMIT 1";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$user_id]);
            $user = $stmt->fetch();
            return $user["user"];
        }catch(PDOException $e){
            echo $e->getMessage(); 
        }
    }
    function showCategory($request){
        $pdo = pdo();
        extract($request);
        $sql = "SELECT * FROM categories WHERE id = ? LIMIT 1";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$category_id]);
            $category = $stmt->fetch();
            return $category["title"];
        }catch(PDOException $e){
            echo $e->getMessage(); 
        }
    }
    
