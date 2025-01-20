<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // In a real application, you would validate against a database
    // For this example, we'll use a hardcoded user
    $valid_email = "test@example.com";
    $valid_password = "password123";
    
    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        header("Location: / ");
        exit();
    } else {
        header("Location: /login?error=invalid");
        exit();
    }
}
?>