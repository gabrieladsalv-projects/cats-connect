<?php

    require_once('../../config/db.php');
    // Verifica se a consulta foi enviada
    if (isset($_GET['query'])) {
        // Pega a consulta do formulário
        $query = $_GET['query'];

        $stmt = $conn->prepare("SELECT * FROM posts WHERE title = :valor");
        $stmt->bindParam(':valor', $valor);
        $stmt->execute();
        $num_linhas = $stmt->rowCount();

        if ($num_linhas > 0) {
            header("Location: search.php?query=" . urlencode($query));
        
        } else {
            // Não há resultados
            echo "<h1 class='search-result'>Nenhum resultado encontrado para '$query'</h1>";
        }
    } else {
        echo "<h1 class='search-result'>Nenhuma consulta enviada.</h1>";
    }
