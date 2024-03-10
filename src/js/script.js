import { header, burgerMenu, containerNavBar, handleScroll, toggleMenu } from './switch_header.js';
import { scrollToTop, scrollToTopButton } from './scroll_top_button.js';
import { handleCardShadowOnScroll, handleTableShadowOnScroll, handleFAQShadowOnScroll, handleLinkShadowOnScroll } from './scrollEffects.js';

// Écouteur d'événements pour le défilement de la fenêtre
window.addEventListener('scroll', function() {
    // Appeler les fonctions pour gérer les ombres des cartes et des tables lors du défilement
    handleLinkShadowOnScroll();
    handleCardShadowOnScroll();
    handleTableShadowOnScroll();
    handleFAQShadowOnScroll();
});

