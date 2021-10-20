<?php
    try{

    $host = 'localhost';
    $user = 'root';
    $dbname = 'receitas_da_vo';
    $pass = '';

    $conn = new PDO("mysql:host=$host",$user,$pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname;
            USE $dbname;
            CREATE TABLE receitas(
                id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                title VARCHAR(100),
                description VARCHAR(100),
                time INT(10),
                level VARCHAR(15)
            )";
    
    $conn->exec($sql);

    echo "Conexão bem sucedida";

    }catch(PDOException $e){
        $error = $e->getMessage();
        echo "Ocorreu o erro: $error";
    }

    $conn = null;
    
?>