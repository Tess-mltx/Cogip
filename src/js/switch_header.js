// Selecting the header
const header = document.querySelector('header');
const burgerMenu = document.querySelector('.burger_menu');
const containerNavBar = document.querySelector('.container_menu');

// Function to toggle between the two navigation bars
function handleScroll() {
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
}

// This function toggles the visibility of the navigation menu when the burger menu is clicked.
function toggleMenu() {
    burgerMenu.classList.toggle('active');
    containerNavBar.classList.toggle('active_nav_bar');
}

burgerMenu.addEventListener('click', toggleMenu);

window.addEventListener('scroll', handleScroll);

// Exporting variables and functions 
export { header, burgerMenu, containerNavBar, handleScroll, toggleMenu };