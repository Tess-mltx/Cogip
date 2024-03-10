// Fonction pour ajouter ou retirer la classe "show-box-shadow" aux cartes en fonction du défilement
function handleCardShadowOnScroll() {
    // Récupérer la section "Our Services"
    let servicesSection = document.querySelector('.our-services');
    // Calculez la position verticale du haut de la section "Our Services" moins 200 pixels pour déclencher l'animation légèrement avant d'atteindre la section
    let triggerPosition = servicesSection.offsetTop - 200;

    // Récupérez toutes les cartes
    let cards = document.querySelectorAll('.card');

    // Vérifiez si la position de défilement de la fenêtre est supérieure ou égale à la position de déclenchement pour les "Our Services"
    if (window.scrollY >= triggerPosition) {
        // Si oui, ajoutez la classe "show-box-shadow" à chaque carte
        cards.forEach(function(card) {
            card.classList.add('show-box-shadow');
        });
    } else {
        // Sinon, retirez la classe "show-box-shadow" de chaque carte
        cards.forEach(function(card) {
            card.classList.remove('show-box-shadow');
        });
    }
}

// Fonction pour ajouter ou retirer la classe "with-shadow" aux tables en fonction du défilement
function handleTableShadowOnScroll() {
    // Récupérez la section "Last Invoices"
    let invoicesSection = document.querySelector('.section_last_invoice');
    // Calculez la position verticale du haut de la section "Last Invoices" moins 200 pixels pour déclencher l'animation légèrement avant d'atteindre la section
    let invoicesTriggerPosition = invoicesSection.offsetTop - 200;

    // Récupérez toutes les tables
    let tables = document.querySelectorAll('.scroll-shadow-table');

    // Vérifiez si la position de défilement de la fenêtre est supérieure ou égale à la position de déclenchement pour les "Last Invoices"
    if (window.scrollY >= invoicesTriggerPosition) {
        // Si oui, ajoutez la classe "with-shadow" à chaque table
        tables.forEach(function(table) {
            table.classList.add('with-shadow');
        });
    } else {
        // Sinon, retirez la classe "with-shadow" de chaque table
        tables.forEach(function(table) {
            table.classList.remove('with-shadow');
        });
    }
}

// Fonction pour ajouter ou retirer la classe "show-box-shadow" aux éléments FAQ en fonction du défilement
export function handleFAQShadowOnScroll() {
    // Récupérer la section FAQ
    let faqSection = document.querySelector('.faq');
    // Calculez la position verticale du haut de la section FAQ moins 200 pixels pour déclencher l'animation légèrement avant d'atteindre la section
    let triggerPosition = faqSection.offsetTop - 200;

    // Récupérez tous les éléments FAQ
    let faqItems = document.querySelectorAll('.faq');

    // Vérifiez si la position de défilement de la fenêtre est supérieure ou égale à la position de déclenchement pour la section FAQ
    if (window.scrollY >= triggerPosition) {
        // Si oui, ajoutez la classe "show-box-shadow" à chaque élément FAQ
        faqItems.forEach(function(faqItem) {
            faqItem.classList.add('show-box-shadow');
        });
    } else {
        // Sinon, retirez la classe "show-box-shadow" de chaque élément FAQ
        faqItems.forEach(function(faqItem) {
            faqItem.classList.remove('show-box-shadow');
        });
    }
}

// Fonction pour ajouter ou retirer la classe "show-box-shadow" au lien en fonction du défilement
export function handleLinkShadowOnScroll() {
    // Récupérer la section "section_home_one"
    let homeSection = document.querySelector('.section_home_one');
    // Calculez la position verticale du haut de la section "section_home_one" moins 200 pixels pour déclencher l'animation légèrement avant d'atteindre la section
    let triggerPosition = homeSection.offsetTop - 200;

    // Récupérez le lien "GET A CUSTOM PROPOSAL"
    let link = document.querySelector('.section_home_one a');

    // Vérifiez si la position de défilement de la fenêtre est supérieure ou égale à la position de déclenchement pour la section "section_home_one"
    if (window.scrollY >= triggerPosition) {
        // Si oui, ajoutez la classe "show-box-shadow" au lien
        link.classList.add('show-box-shadow');
    } else {
        // Sinon, retirez la classe "show-box-shadow" du lien
        link.classList.remove('show-box-shadow');
    }
}

// Écouteur d'événements pour le défilement de la fenêtre
window.addEventListener('scroll', function() {
    // Appeler les fonctions pour gérer les ombres des cartes et des tables lors du défilement
    handleLinkShadowOnScroll();
    handleCardShadowOnScroll();
    handleTableShadowOnScroll();
    handleFAQShadowOnScroll();
});

export { handleCardShadowOnScroll, handleTableShadowOnScroll};