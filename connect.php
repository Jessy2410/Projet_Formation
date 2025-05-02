<?php
// Paramètres de connexion à la base de données
$host = "localhost";       // Adresse du serveur (ex: localhost)
$dbname = "AppliFormations"; // Nom de ta base de données
$username = "root";        // Nom d'utilisateur MySQL
$password = "";            // Mot de passe MySQL

try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Mode de récupération par défaut

    // Affiche un message de confirmation (à supprimer en production)
    // echo "Connexion réussie !";

} catch (PDOException $e) {
    // Gestion des erreurs en cas d'échec de connexion
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}