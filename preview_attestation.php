<?php
require 'connect.php';

if (isset($_GET['id'])) {
    $attestationId = $_GET['id'];

    try {
        $stmt = $pdo->prepare("SELECT file_name, file_path FROM attestations WHERE id = :id");
        $stmt->bindParam(':id', $attestationId, PDO::PARAM_INT);
        $stmt->execute();
        $attestation = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($attestation) {
            $filePath = $attestation['file_path'];
            $fileName = $attestation['file_name'];
        } else {
            die("Attestation non trouvée.");
        }
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
} else {
    die("ID non spécifié.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aperçu de l'Attestation</title>
    <style>
        .container {
            text-align: center;
            margin-top: 20px;
        }
        iframe {
            width: 80%;
            height: 500px;
            border: 1px solid #ccc;
        }
        .download-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #644cff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s;
        }
        .download-button:hover {
            background-color: #4e3ecf;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aperçu de l'Attestation</h1>
        <iframe src="<?php echo htmlspecialchars($filePath); ?>" frameborder="0"></iframe>
        <br>
        <a href="<?php echo htmlspecialchars($filePath); ?>" class="download-button" download="<?php echo htmlspecialchars($fileName); ?>">
            Télécharger
        </a>
    </div>
</body>
</html>
