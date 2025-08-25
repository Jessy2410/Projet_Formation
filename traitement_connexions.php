<?php
include 'connect.php';


if (isset($_POST['connecté'])) {
    // Récupération des données du formulaire
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = $_POST['mdp'];

    // Vérifie que les champs ne sont pas vides
    if (!empty($mail) && !empty($mdp)) {
        try {
            // Requête pour récupérer l'utilisateur correspondant à l'email
            $sql = "SELECT * FROM utilisateurs WHERE mail = :mail";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':mail' => $mail]);
            $user = $stmt->fetch();

            // Vérifie si l'utilisateur existe et si le mot de passe est correct
            if ($user && password_verify($mdp, $user['mdp'])) {
                // Connexion réussie
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['mail'] = $user['mail'];
                $_SESSION['loggedin'] = true; // Variable indiquant que l'utilisateur est connecté
                
                // Affichage du message de succès et animation
                echo "
                <!DOCTYPE html>
                <html lang='fr'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Connexion réussie</title>
                    <style>
                        .loader {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 100vh;
                            background-color: #f3f3f3;
                        }
                        .loader__element {
                            width: 20px;
                            height: 20px;
                            margin: 5px;
                            border-radius: 50%;
                            background-color: #644cff;
                            animation: bounce 1.5s infinite ease-in-out;
                        }
                        .loader__element:nth-child(2) {
                            animation-delay: 0.3s;
                        }
                        .loader__element:nth-child(3) {
                            animation-delay: 0.6s;
                        }
                        @keyframes bounce {
                            0%, 100% {
                                transform: scale(0.5);
                            }
                            50% {
                                transform: scale(1.2);
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='loader'>
                        <div class='loader__element'></div>
                        <div class='loader__element'></div>
                        <div class='loader__element'></div>
                    </div>
                    <script>
                        // Redirection après 3 secondes
                        setTimeout(function() {
                            window.location.href = 'test2.php';
                        }, 2000);
                    </script>
                </body>
                </html>";
            } else {
                // Connexion échouée
                echo "<p style='color: red; text-align: center;'>Email ou mot de passe incorrect.</p>";
            }
        } catch (PDOException $e) {
            // En cas d'erreur SQL
            echo "<p style='color: red; text-align: center;'>Erreur : " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p style='color: red; text-align: center;'>Veuillez remplir tous les champs.</p>";
    }
}
?>
