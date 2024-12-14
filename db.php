<?php
// Configuration de la connexion
$host = 'localhost'; // Adresse de votre serveur PostgreSQL
$dbname = 'db'; // Nom de la base de données
$user = 'postgres'; // Nom d'utilisateur PostgreSQL
$password = 'postgis'; // Mot de passe PostgreSQL
$port = 5432; // Port de PostgreSQL (par défaut : 5432)

try {
    // Connexion avec PDO
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    // Définir le mode d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
