<?php

session_start();

// Connexion à la base de données (ajustez ces variables avec vos informations de connexion)
$pdo = new PDO('mysql:host=localhost;dbname=cogip', 'root', 'root');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Par défaut, chaque nouvel utilisateur aura le rôle 'user'
    // Récupérez l'ID du rôle 'user' de la base de données
    $stmt = $pdo->prepare("SELECT id FROM roles WHERE name = ?");
    $stmt->execute(['user']);
    $role = $stmt->fetch();
    $role_id = $role ? $role['id'] : null;

    if (!$role_id) {
        die('Le rôle utilisateur n\'existe pas. Assurez-vous que la table des rôles est configurée correctement.');
    }
    
    $admin_email = 'admin@example.com'; 
    $admin_password = password_hash('admin', PASSWORD_DEFAULT); 
    $admin_role_id = 1; 

    $sql = "INSERT INTO users (first_name, last_name, email, password, role_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$firstname, $name, $email, $hashed_password, $role_id]);

    $_SESSION['success'] = 'Inscription réussie. Vous pouvez maintenant vous connecter.';
    header('Location: login.php');
    exit;
}

else {
    echo "La méthode de soumission du formulaire est incorrecte.";
}
?>
