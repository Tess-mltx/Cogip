<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cogip";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurer les options PDO si nécessaire
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
