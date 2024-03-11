<?php
require_once 'Model/Users.php';
// refaire les liens !!!!!!!!!
class UsersController {
    private $userModel;

    public function __construct($pdo) {
        $this->userModel = new User($pdo);
    }

    public function login() {
        session_start();
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $user = $this->userModel->checkUser($email, $password);
        
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role_id'];
            
            
            if ($user['role_id'] == 1) { 
                header("Location: admin_dashboard.php"); 
            } else {
                header("Location: user_dashboard.php"); 
            }
            exit;
        } else {
            $_SESSION['error'] = 'Invalid credentials';
            header("Location: login.php");
            exit;
        }
    }

    public function register() {
        session_start(); 
        $firstname = $_POST['firstname'] ?? '';
        $lastname = $_POST['lastname'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        if ($this->userModel->register($firstname, $lastname, $email, $password)) {
            $_SESSION['success'] = 'Registration successful. You can now log in.';
            header("Location: login.php");
            exit;
        } else {
            $_SESSION['error'] = 'Registration failed';
            header("Location: register.php");
            exit;
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php'); 
        exit;
    }   
}
?>