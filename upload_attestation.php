<?php
require_once 'connect.php'; // Connexion à la base de données

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
        $userId = $_POST['user_id']; // ID utilisateur
        $uploadDir = 'uploads/attestations/'; // Répertoire des fichiers
        $fileName = basename($_FILES['file']['name']);
        $filePath = $uploadDir . uniqid() . "_" . $fileName; // Nom unique pour éviter les conflits

        // Vérifier si le fichier est bien un PDF
        $fileType = mime_content_type($_FILES['file']['tmp_name']);
        if ($fileType === 'application/pdf') {
            // Crée le répertoire si nécessaire
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Déplacer le fichier vers le répertoire cible
            if (move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
                // Enregistrer les métadonnées dans la base de données
                $stmt = $pdo->prepare("INSERT INTO attestations (user_id, file_name, file_path) VALUES (:user_id, :file_name, :file_path)");
                $stmt->bindParam(':user_id', $userId);
                $stmt->bindParam(':file_name', $fileName);
                $stmt->bindParam(':file_path', $filePath);
                $stmt->execute();

                echo "L'attestation a été enregistré avec succès.";
                header('Location: list_attestations.php');
            } else {
                echo "Erreur lors de l'enregistrement du fichier.";
            }
        } else {
            echo "Veuillez uploader uniquement des fichiers PDF.";
        }
    } else {
        echo "Aucun fichier reçu.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
