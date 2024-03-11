// Sélection du header
const header = document.querySelector('header');
const burgerMenu = document.querySelector('.burger_menu');
const containerNavBar = document.querySelector('.container_menu');

// Fonction pour basculer entre les deux barres de navigation
function handleScroll() {
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
}

function toggleMenu() {
    burgerMenu.classList.toggle('active');
    containerNavBar.classList.toggle('active_nav_bar');
}

burgerMenu.addEventListener('click', toggleMenu);

window.addEventListener('scroll', handleScroll);

export { header, burgerMenu, containerNavBar, handleScroll, toggleMenu };