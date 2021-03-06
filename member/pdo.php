<?php
    function pdo(){

        $db_host = "localhost";
        $db_user = "admin";
        $db_pw = "admin";
        $db_name = "php-6-20210424";
        $db_charset = "utf8mb4";
        
        try {
            $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
            $pdo = new PDO($dsn, $db_user, $db_pw);
        }catch(PDOException $e){
            print_r($e->getMessage());
        }

        return $pdo;
    }