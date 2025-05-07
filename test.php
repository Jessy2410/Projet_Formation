<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once 'connect.php'; // Inclut le fichier de connexion où la session est gérée

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: formCOIN.php");
    exit();
}

// Votre code pour la page Home commence ici
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css\stylenew.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

<div class="nav">
    <div class="logo">
        <i class='bx bx-menu'></i>
        <img src="images/logo.png" alt="" width="90">
    </div>
    <div class="onglets">
        <a class="link" href="test2.php">Home</a>
        <div class="dropdown">
            <a class="link dropdown-toggle">Attestations</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="form_attestations.php">Déposer une Attestation</a>
                <a class="dropdown-item" href="list_attestations.php">Voir les Attestations</a>
            </div>
        </div>
        <a class="link" href="#section-catalogue">Catalogue</a>
        <a class="link" href="">Mes formations</a>
        <a class="link-connect" data-name="userIcon">
            <?php echo $_SESSION['prenom']; echo " "; echo $_SESSION['nom']; ?>
        </a>
        <!-- Popup -->
        <div id="userPopup" class="popup">
            <i class="fas fa-user-circle popup-icon"></i>
            <h3>Jessy Preuvot</h3>
            <button class="popup-button">Paramètres</button>
            <a href="traitement_deconnexions.php"><button class="popup-button">Déconnexion</button></a>
            <button id="darkModeToggle">🌙 Mode Sombre</button>
        </div>
    </div>
</div>


  <div class="sidebar close">
    
    <ul class="nav-links">
      <li class="liprincipale">
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">PHP & MySQL</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Login Form</a></li>
          <li><a href="#">Card Design</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      
    </div>
  </section>
  
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  

  document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.getElementById("menu-icon");
    const sidebar = document.querySelector(".sidebar");

    // Gestion du clic sur l'icône
    menuIcon.addEventListener("click", function () {
            sidebar.classList.toggle("close"); // Ouvre/ferme la sidebar

            // Change l'icône entre "menu" et "croix"
            if (sidebar.classList.contains("close")) {
                menuIcon.classList.remove("bx bx-menu");
                menuIcon.classList.add("bx bx-x");
            } else {
                menuIcon.classList.remove("bx bx-x");
                menuIcon.classList.add("bx bx-menu");
            }
        });
    });

  // Partie Navbar

  document.addEventListener('DOMContentLoaded', function () {
        const userIcon = document.querySelector('[data-name="userIcon"]'); // Sélectionne le conteneur avec data-name
        const userPopup = document.getElementById('userPopup');

        // Gérer les clics sur le conteneur
        userIcon.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut
            userPopup.style.display = userPopup.style.display === 'block' ? 'none' : 'block';
        });

        // Fermer le popup si on clique ailleurs
        document.addEventListener('click', function (event) {
            if (!userPopup.contains(event.target) && event.target !== userIcon && !userIcon.contains(event.target)) {
                userPopup.style.display = 'none';
            }
        });
    });


    document.addEventListener("DOMContentLoaded2", function () {
        const dropdownToggle = document.querySelector(".dropdown-toggle");
        const dropdownMenu = document.querySelector(".dropdown-menu");

        // Afficher / cacher le dropdown au clic
        dropdownToggle.addEventListener("click", function (event) {
            event.stopPropagation(); // Empêche la fermeture immédiate
            dropdownMenu.style.display =
                dropdownMenu.style.display === "block" ? "none" : "block";
        });

        // Fermer le dropdown si clic en dehors
        document.addEventListener("click", function () {
            dropdownMenu.style.display = "none";
        });
    });

    // Mode sombre
    document.getElementById("darkModeToggle").addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");
    });

    


  </script>
</body>
</html>