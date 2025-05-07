<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css\styleHome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<?php
    include("navbar.php");
?>


<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>


    <!-- Partie landing Page -->

    <div class="container">
        <div class="text-Landing">
            <h1 class="landing-title">Bienvenue dans votre espace formation</h1>
            <p>Voici un texte descriptif qui va avec votre image. Il peut décrire les avantages de votre produit ou service de manière concise et attractive.</p>
            <a href="#" class="cta-button">Découvrir l'application</a>
        </div>
        <div class="image-Landing">
            <img src="https://150814115.v2.pressablecdn.com/wp-content/uploads/2022/01/formation-en-ligne-illuxi-lms-3.png" alt="Image de la landing page">
        </div>
    </div>


    <!-- Partie Catalogue -->

<h1 class="section-catalogue" id="section-catalogue">Catalogue de formations</h1>
<br>
<div class="catalogue-container" id="catalogue-container">
    
    <div class="catalogue">
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation excel 1</h3>
                <a href="details.php"><button>Voir plus</button></a>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation word 1</h3>
                <a href="details.php"><button>Voir plus</button></a>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation powerpoint 1</h3>
                <a href="details.php"><button>Voir plus</button></a>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation BV 1</h3>
                <button>Voir plus</button>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation excalibur 1</h3>
                <button>Voir plus</button>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation eset 1</h3>
                <button>Voir plus</button>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation outlook 1</h3>
                <button>Voir plus</button>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation 1</h3>
                <button>Voir plus</button>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation 1</h3>
                <button>Voir plus</button>
            </div>            
        </div>
        <div class="item">
            <img src="https://st2.depositphotos.com/1381835/10704/i/450/depositphotos_107041324-stock-photo-south-america-on-metallic-earth.jpg" alt="Image Item">
            <div class="button-container">
                <h3 class="titre-item">Formation trest titre long pour vérifier la réaction 1</h3>
                <button>Voir plus</button>
            </div>            
        </div>
    </div>
    <div class="sidebar">
        <h3>Recherche</h3>
        <input type="text" id="search-bar" placeholder="Rechercher une formation..." />
        <hr>
        <h3>Créer une formations</h3>
        <div class="img-sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
              </svg>                        
        </div>
        <hr>
        
    </div>
</div>



<!-- Partie Catalogue -->

<footer class="footer">
    <div class="container-footer">
        <div class="row">
            <div class="footer-col">
                <h4>compagnie</h4>
                <ul class="link-footer">
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Aide</h4>
                <ul class="link-footer">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Nous connaitre</h4>
                <ul class="link-footer">
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Suivez-nous</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>




<script src="script.js"></script>
</body>
</html>