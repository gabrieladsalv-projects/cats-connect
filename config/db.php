<?php

    $db_name = "cats_room";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "Magikarp2.";

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Consulta SQL para selecionar os registros da tabela de postagens
        $query = "SELECT * FROM posts ORDER BY post_date DESC LIMIT 8";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    
        // Atribuir os resultados da consulta à variável $posts
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
    }