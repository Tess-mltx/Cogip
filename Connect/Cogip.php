<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configurer les options PDO si nécessaire
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
