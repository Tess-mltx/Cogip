<?php
class User {
    private $bdd;

    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    public function register($firstname, $lastname, $email, $password) {
        
        $check = $this->bdd->prepare("SELECT id FROM users WHERE email = ?");
        $check->execute([$email]);
        $emailExists = $check->fetch();
    
        if ($emailExists) {
            return false; 
        }
    
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->bdd->prepare("INSERT INTO users (first_name, last_name, email, password, role_id) VALUES (?, ?, ?, ?, 2)");
        return $stmt->execute([$firstname, $lastname, $email, $hashed_password]);
    }
    

    public function checkUser($email, $password) {
        $stmt = $this->bdd->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}

