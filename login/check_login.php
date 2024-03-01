<?php
session_start(); 

$myUsername = 'Admin'; 
$myPasswordHash = '$2y$10$8Z81gSR2IGpxHn8wPVm3We3lqs.v45W9JnFPm9XMeopZ8EYDgwfrW'; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $myUsername && password_verify($password, $myPasswordHash)) {
        $_SESSION['loggedin'] = true; 
        header("Location: admin.php"); 
        exit;
    } else {
        
        $_SESSION['error'] = "Identifiants incorrects";
        header("Location: login.php"); 
        exit;
    }
} else {
    
    header("Location: login.php");
    exit;
}
?>