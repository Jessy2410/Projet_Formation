<?php
session_start();
require_once 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déposer une Attestation</title>
    <link rel="stylesheet" href="css\styleFormAttestation.css">
</head>
<body>

<?php 
    include("test.php");
?>

    <h1>Déposer une Attestation</h1>
    <form action="upload_attestation.php" method="post" enctype="multipart/form-data">
        <label for="file">Choisir une attestation (PDF) :</label>
        <label for="file" class="custom-file-upload">
            <img src="https://cdn.pixabay.com/photo/2015/08/08/21/13/gallery-880815_960_720.png" alt="Choisir un fichier">
        </label>
        <p id="file-name">Aucun fichier choisi</p>
        <input type="file" name="file" id="file" accept="application/pdf" required>
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">

        <label for="heures">Nombre d'heures de formation :</label>
        <input type="number" name="heures" id="heures" min="1" placeholder="Ex: 3" required>


        <button type="submit">Uploader</button>
    </form>
    
    <script>
        document.getElementById('file').addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : 'Aucun fichier choisi';
            document.getElementById('file-name').textContent = fileName;
        });
    </script>
</body>
</html>
