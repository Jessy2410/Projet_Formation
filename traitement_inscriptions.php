<?php
        include('connect.php'); // Fichier contenant la connexion PDO

        // Vérifie si le bouton "S'inscrire" a été cliqué
        if (isset($_POST['inscris'])) {
            // Récupération des données du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $mail = $_POST['mail'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hash du mot de passe
            $date = date('Y-m-d H:i:s'); // Date actuelle pour l'inscription

            // Validation simple des champs
            if (!empty($nom) && !empty($prenom) && !empty($mail) && !empty($_POST['mdp'])) {
                try {
                    // Requête préparée pour insérer les données dans la base
                    $sql = "INSERT INTO utilisateurs (nom, prenom, mail, mdp, date_inscription) 
                            VALUES (:nom, :prenom, :mail, :mdp, :date)";
                    $stmt = $pdo->prepare($sql);

                    // Exécution de la requête avec les valeurs
                    $stmt->execute([
                        ':nom' => $nom,
                        ':prenom' => $prenom,
                        ':mail' => $mail,
                        ':mdp' => $mdp,
                        ':date' => $date
                    ]);

                    

                } catch (PDOException $e) {
                    // En cas d'erreur (ex : email déjà utilisé)
                    echo "<p style='color: red; text-align: center;'>Erreur : " . $e->getMessage() . "</p>";
                }
            } else {
                echo "<p style='color: red; text-align: center;'>Veuillez remplir tous les champs.</p>";
            }
        }
    ?>