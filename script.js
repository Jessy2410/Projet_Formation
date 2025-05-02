gsap.to(".text-Landing", {
    duration: 1.8,
    x: 0,
    opacity: 1,
    ease: "power2.out"
});

gsap.to(".image-Landing", {
    duration: 2,
    x: 0,
    opacity: 1,
    ease: "power2.out",
    delay: 0.5
});


document.addEventListener("scroll", function () {
    const sidebar = document.querySelector(".sidebar");
    const catalogue = document.querySelector(".catalogue");

    // Obtenir la position du catalogue par rapport au viewport
    const catalogueTop = catalogue.getBoundingClientRect().top;

    // Vérifier si le haut du catalogue est visible
    if (catalogueTop <= 100) { // Ajustez `100` selon vos besoins
        sidebar.classList.add("active");
    } else {
        sidebar.classList.remove("active");
    }
});


// option de recherche dans la sidebar

document.addEventListener("DOMContentLoaded", function () {
    const searchBar = document.getElementById("search-bar");
    const catalogueItems = document.querySelectorAll(".catalogue .item");

    searchBar.addEventListener("input", function () {
        const query = searchBar.value.toLowerCase();

        catalogueItems.forEach(item => {
            const title = item.querySelector(".titre-item");
            if (title) {
                const text = title.textContent.toLowerCase();
                if (text.includes(query)) {
                    item.style.display = "flex"; // Afficher l'élément
                } else {
                    item.style.display = "none"; // Cacher l'élément
                }
            }
        });
    });
});


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