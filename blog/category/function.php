<?php
    function showAllCategories(){
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
    function storeCategory($request){
        $pdo = pdo();
        extract($request);
        $sql = "INSERT INTO categories(title,slug,created_at,updated_at)VALUES(?,?,now(),now())";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$title,$slug]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function deleteCategory($request){
        $pdo = pdo();
        extract($request);
        $sql = "DELETE FROM categories WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function accessDenied(){
        session_start();
        if(!isset($_SESSION["AUTH"])){
            header('location:../post/index.php');
            return;
        }
    }
    function accessDeniedAdmin(){
        session_start();
        if(!isset($_SESSION["AUTH"]) || $_SESSION["AUTH"]["role"] != 0){
            header('location:../post/index.php');
            return;
        }
    }