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
            
            $error_message = "Passwords do not match. Please try again.";
        
            
            header("Location: register.php?error=" . urlencode($error_message));
            exit; 
        }
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@catsroom.com'; 
        $mail->Password = 'catsroom'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('contact@catsroom.com', 'CatConnect Team');
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Register';
        $mail->Body = 'Your registration has been completed successfully!';

        if ($mail->send()) {
            echo 'Confirmation email sent successfully!';
        } else {
            echo 'Error sending email: ' . $mail->ErrorInfo;
        }

    } else {
        echo "Please fill in all fields on the form.";
    }
} else {
    echo "The form was not sent.";
}
