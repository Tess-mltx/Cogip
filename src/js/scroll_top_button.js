
// Fonction pour remonter en haut de la page lorsque l'utilisateur clique sur le bouton
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth" // défilement fluide
    });
}
const scrollToTopButton = document.getElementById("scrollToTopButton");
// Attacher l'événement de clic au bouton
scrollToTopButton.addEventListener("click", scrollToTop);

export {scrollToTop, scrollToTopButton};