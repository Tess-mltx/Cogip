<?php
require_once 'Model/Users.php';
class UsersController
{
    private $userModel;

    public function __construct($bdd)
    {
        $this->userModel = new User($bdd);
    }

    public function login()
    {
        session_start();
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $user = $this->userModel->checkUser($email, $password);

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role_id'];


            if ($user['role_id'] == 1) {
                header("Location: View/dashboard/index.php");
            } else {
                header("Location: View/sign/login.php");
            }
            exit;
        } else {
            $_SESSION['error'] = 'Invalid credentials';
            header("Location: login.php");
            exit;
        }
    }
    public function register()
    {
        session_start();
        
        $firstname = $_POST['firstname'] ?? '';
        $lastname = $_POST['lastname'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $registrationSuccessful = $this->userModel->register($firstname, $lastname, $email, $password);

        if ($registrationSuccessful) {
            $_SESSION['success'] = 'Registration successful. You can now log in.';
            header("Location: View/home.php");
            exit;
        } else {
            $_SESSION['error'] = 'Registration failed: Email already exists.';
            header("Location: View/sign/register.php");
            exit;
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit;
    }
}
