<?php
// $servername = getenv('DB_HOST');
// $username = getenv('DB_USERNAME');
// $password = getenv('DB_PASSWORD');
// $dbname = getenv('DB_NAME');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cogip";


try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
