<?php

require_once("db.php");
session_start();


if(isset($_POST['email']) && isset($_POST['password'])) {
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

   
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
    if($user && password_verify($password, $user['password'])) {
        
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        
        header("Location: discover.php");
        exit();
    } else {
        
        $error_message = "Credenciais inválidas. Por favor, tente novamente.";
        header("Location: login.php?error=" . urlencode($error_message));
        exit();
    }
} else {
   
    header("Location: login.php");
    exit();
}
