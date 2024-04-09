<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'C:\Users\User\vendor\autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['birth'])) {
        
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $birth = $_POST['birth'];

        
        if ($password !== $confirm_password) {
            
            $error_message = "As senhas não coincidem. Por favor, tente novamente.";
        
            
            header("Location: register.php?error=" . urlencode($error_message));
            exit; 
        }
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@catsroom.com'; 
        $mail->Password = 'catsroom'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('contato@catsroom.com', 'CatConnect Team');
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Registro';
        $mail->Body = 'Seu registro foi concluído com sucesso!';

        if ($mail->send()) {
            echo 'E-mail de confirmação enviado com sucesso!';
        } else {
            echo 'Erro ao enviar e-mail: ' . $mail->ErrorInfo;
        }

    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    echo "O formulário não foi enviado.";
}