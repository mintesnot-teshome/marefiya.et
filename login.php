<?php
session_start();


    
    // In a real application, we would validate against a database.
    // For this example, we will use a hardcoded user.
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
