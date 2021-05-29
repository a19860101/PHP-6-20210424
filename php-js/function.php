<?php
    function showAll(){
        $pdo = pdo();
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
        $pdo = pdo();
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
    function store($request){
        $pdo = pdo();
        extract($request);
        $sql = "INSERT INTO students(name, mail, gender, edu, skill, comment)VALUES(?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $skill = implode(",",$skill);
        
        try {
            $stmt->execute([$name,$mail,$gender,$edu,$skill,$comment]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function edit($request){  
        $pdo = pdo();
        extract($request);
        $sql = "SELECT * FROM students WHERE id = ? ";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt ->execute([$id]);
            $student = $stmt->fetch();
            return $student;
        }catch(PDOException $e){
            echo $e->getMessage();
        }      
    }
    function update($request){
        $pdo = pdo();
        extract($request);
        $sql = "UPDATE students SET 
            name    =?,
            mail    =?,
            gender  =?,
            edu     =?,
            skill   =?,
            comment =?
            WHERE id = ?
            ";
        $stmt = $pdo->prepare($sql);
        $skill = implode(",",$skill);
        try {
            $stmt->execute([$name,$mail,$gender,$edu,$skill,$comment,$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($request){
        $pdo = pdo();
        extract($request);
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }