<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    // In a real application, you would:
    // 1. Validate all inputs
    // 2. Hash the password
    // 3. Check if email already exists
    // 4. Store in database
    // 5. Send verification email
    
    // For this example, we'll just redirect to login
    $_SESSION['registration_success'] = true;
    header("Location: /login");
    exit();
}
?>