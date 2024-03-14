<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cogip";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
