<?php
session_start();
require_once 'connect.php';

// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// echo "</pre>";
// exit();


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"]) && isset($_POST["heures"])) {
    $file = $_FILES["file"];
    $heures = intval($_POST["heures"]);
    $userId = $_SESSION['id'];

    if ($file["error"] === 0 && $heures > 0) {
        $uploadDir = "uploads/attestations/";
        $uniqueName = uniqid() . "_" . basename($file["name"]);
        $uploadPath = $uploadDir . $uniqueName;

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
            // 🔹 Enregistrement dans la table attestations
            $stmt1 = $pdo->prepare("INSERT INTO attestations (user_id, file_name, file_path) VALUES (?, ?, ?)");
            $stmt1->execute([$userId, $file["name"], $uploadPath]);

            // 🔹 Enregistrement dans la table formations
            $stmt2 = $pdo->prepare("INSERT INTO formations (user_id, nom_formation, duree_heures, date_formation) VALUES (?, ?, ?, NOW())");
            $stmt2->execute([$userId, "Formation liée à une attestation", $heures]);

            echo "<script>alert('Attestation et heures enregistrées avec succès'); window.location.href='mon_compte.php';</script>";
        } else {
            echo "<script>alert('Erreur lors du téléchargement du fichier.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Fichier invalide ou nombre d\'heures incorrect.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Données manquantes.'); window.history.back();</script>";
}
