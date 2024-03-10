window.addEventListener('scroll', function() {
    // Récupérez la section "Our Services"
    let servicesSection = document.querySelector('.our-services');
    // Calculez la position verticale du haut de la section "Our Services" moins 200 pixels pour déclencher l'animation légèrement avant d'atteindre la section
    let triggerPosition = servicesSection.offsetTop - 200;

    // Récupérez la section "Last Invoices"
    let invoicesSection = document.querySelector('.section_last_invoice');
    // Calculez la position verticale du haut de la section "Last Invoices" moins 200 pixels pour déclencher l'animation légèrement avant d'atteindre la section
    let invoicesTriggerPosition = invoicesSection.offsetTop - 200;

    // Récupérez toutes les cartes et les tables
    let cards = document.querySelectorAll('.card');
    let tables = document.querySelectorAll('.scroll-shadow-table');

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
});
