<?php
session_start();
require_once 'connect.php'; // Connexion à la base de données



try {
    $stmt = $pdo->prepare("SELECT id, file_name, file_path FROM attestations WHERE user_id = :user_id");
    $stmt->bindParam(':user_id', $_SESSION['id']);
    $stmt->execute();
    $attestations = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Attestations</title>
    <link rel="stylesheet" href="css\styleListeAttestation.css">
</head>
<body>

<?php include("test.php"); ?>

    <h1 class="titre">Mes Attestations</h1>
    <ul class="ul">
        <?php foreach ($attestations as $attestation): ?>
            <li class="listeAttestations">
                <a href="preview_attestation.php?id=<?php echo $attestation['id']; ?>" target="_blank" class="linkAttestations">
                    <?php echo htmlspecialchars($attestation['file_name']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

