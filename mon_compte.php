<?php
session_start();
require_once 'connect.php';

$user_id = $_SESSION['id'];

// Total d'heures de formation
$stmt = $pdo->prepare("SELECT SUM(duree_heures) AS total_heures FROM formations WHERE user_id = ?");
$stmt->execute([$user_id]);
$data = $stmt->fetch();
$total_heures = $data['total_heures'] ?? 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon espace formation</title>
    <link rel="stylesheet" href="css/style_mon_compte.css">
</head>
<body>
    <h1>Bienvenue dans votre espace personnel</h1>

    <p><strong>Total d'heures de formation :</strong> <?= htmlspecialchars($total_heures) ?> heures</p>

    <div class="actions">
        <a href="list_attestations.php" class="btn">📄 Voir mes attestations</a>
        <a href="form_attestations.php" class="btn">📤 Déposer une attestation</a>
    </div>
</body>
</html>
