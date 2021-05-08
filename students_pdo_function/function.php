<?php
    function showAll(){
        //全域變數
        global $pdo;
        $sql = "SELECT * FROM students";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute();
            $students = $stmt->fetchAll();
            return $students;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function show($request){
        global $pdo;
        extract($request);
        try {
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $student = $stmt->fetch();
            return $student;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }