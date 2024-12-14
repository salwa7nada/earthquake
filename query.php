<?php
// Inclure le fichier de connexion à la base de données
include 'db.php'; // Chemin vers votre fichier de connexion à PostgreSQL

// Vérifiez si la méthode de requête est POST et que le paramètre "query" est défini
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['query'])) {
    $query = trim($_POST['query']); // Nettoyer la requête SQL

    try {
        // Exécuter la requête SQL
        $statement = $pdo->query($query);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Retourner les résultats en JSON
        header('Content-Type: application/json');
        echo json_encode($results);
    } catch (PDOException $e) {
        // Si une erreur survient, envoyer un message d'erreur JSON
        http_response_code(500); // Erreur serveur
        header('Content-Type: application/json');
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    // Retourner une erreur si aucune requête SQL n'est envoyée
    http_response_code(400); // Erreur client
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Aucune requête envoyée']);
}
