<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Inscription/Connexion</title>
    <link rel="stylesheet" href="styleForm.css">
</head>
<body>
    <div class="form-container">

    

        <!-- Formulaire d'Inscription -->
        <div class="form form-register" id="form-register">
            <h2>Inscription</h2>
            <form method="POST" action="traitement_inscriptions.php">
                <input type="text" name="nom" id="nom" placeholder="Nom..." required>
                <input type="text" name="prenom" id="prenom" placeholder="Prénom..." required>
                <input type="email" name="mail" id="mail" placeholder="Email..." required>
                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe..." required>
                <button type="submit" for="inscris" name='inscris'>S'inscrire</button>
            </form>
        </div>

        <!-- Formulaire de Connexion -->
        <div class="form form-login" id="form-login">
            <h2>Connexion</h2>
            <form method="POST" action="traitement_connexions.php">
                <input type="email" name="mail" id="mail" placeholder="Email" required>
                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
                <button type="submit" for="connecté" name="connecté">Se connecter</button>
            </form>
        </div>


        <!-- Image Cache -->
        <div class="image-slider" id="image-slider">
            <img src="https://stephenson-formation.fr/wp-content/uploads/2023/07/J.F.-TOSTIVINT_DG-Stephenson-Formation-1024x768.jpeg" alt="Image">
            <button id="toggle-form">S'inscrire ?</button>
        </div>
    </div>

    <script>
        // JavaScript pour déplacer l'image
        const toggleButton = document.getElementById("toggle-form");
        const imageSlider = document.getElementById("image-slider");

        toggleButton.addEventListener("click", () => {
            imageSlider.classList.toggle("move-left");
            
            if(toggleButton.textContent === "Se connecter ?"){
                toggleButton.textContent = "S'inscrire ?";
            }
            else if(toggleButton.textContent === "S'inscrire ?"){
                toggleButton.textContent = "Se connecter ?";
            }
        });
    </script>
</body>
</html>
