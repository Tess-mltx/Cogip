// Function to add or remove the "show-box-shadow" class to cards based on scroll
function handleCardShadowOnScroll() {
    let servicesSection = document.querySelector('.our-services');
    let triggerPosition = servicesSection.offsetTop - 200;
    let cards = document.querySelectorAll('.card');

    if (window.scrollY >= triggerPosition) {
        cards.forEach(function(card) {
            card.classList.add('show-box-shadow');
        });
    } else {
        cards.forEach(function(card) {
            card.classList.remove('show-box-shadow');
        });
    }
}

// Function to add or remove the "show-box-shadow" class to tables based on scroll
function handleTableShadowOnScroll() {
    let invoicesSection = document.querySelector('.section_last_invoice');
    let invoicesTriggerPosition = invoicesSection.offsetTop - 200;
    let tables = document.querySelectorAll('.scroll-shadow-table');

    if (window.scrollY >= invoicesTriggerPosition) {
        // If true, add the "show-box-shadow" class to each table
        tables.forEach(function(table) {
            table.classList.add('show-box-shadow');
        });
    } else {
        // If false, remove the "with-shadow" class from each table
        tables.forEach(function(table) {
            table.classList.remove('show-box-shadow');
        });
    }
}

// Function to add or remove the "show-box-shadow" class to FAQ items based on scroll
export function handleFAQShadowOnScroll() {
    let faqSection = document.querySelector('.faq');
    let triggerPosition = faqSection.offsetTop - 200;
    let faqItems = document.querySelectorAll('.faq');

    if (window.scrollY >= triggerPosition) {
        faqItems.forEach(function(faqItem) {
            faqItem.classList.add('show-box-shadow');
        });
    } else {
        faqItems.forEach(function(faqItem) {
            faqItem.classList.remove('show-box-shadow');
        });
    }
}

// Function to add or remove the "show-box-shadow" class to a link based on scroll
export function handleLinkShadowOnScroll() {
    let homeSection = document.querySelector('.section_home_one');
    let triggerPosition = homeSection.offsetTop - 200;
    let link = document.querySelector('.section_home_one a');

    if (window.scrollY >= triggerPosition) {
        link.classList.add('show-box-shadow');
    } else {
        link.classList.remove('show-box-shadow');
    }
}

// Function to handle box-shadow effect on scroll-to-top button
function handleScrollTopButtonShadowOnScroll() {
    let scrollTopButton = document.getElementById('scrollToTopButton');
    let triggerPosition = 50; 
    
    if (window.scrollY >= triggerPosition) {
        scrollTopButton.classList.add('show-box-shadow');
    }
}

// Event listener for window scroll
window.addEventListener('scroll', function() {
    handleScrollTopButtonShadowOnScroll();
    handleLinkShadowOnScroll();
    handleCardShadowOnScroll();
    handleTableShadowOnScroll();
    handleFAQShadowOnScroll();
});

export { handleCardShadowOnScroll, handleTableShadowOnScroll };
