<?php
// Démarrer la session
session_start();

// Détruire toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion ou d'accueil
header('Location: formCOIN.php'); // Remplace `index.php` par la page souhaitée
exit();
?>
