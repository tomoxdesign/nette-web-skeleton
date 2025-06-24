document.addEventListener('DOMContentLoaded', () => {
    // Funkce pro přidání třídy animace, když je prvek viditelný
    const handleIntersection = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                // Optional: přestaň sledovat prvek po aktivaci animace
                observer.unobserve(entry.target);
            }
        });
    };

    // Vytvoření nového IntersectionObserver
    const observer = new IntersectionObserver(handleIntersection, {
        root: null, // Pozoruje prvky vůči viewportu
        rootMargin: '0px', // Margin kolem rootu
        threshold: 0.1 // Prvek musí být viditelný alespoň 10%
    });

    // Vyhledej všechny prvky s třídou animation-element
    document.querySelectorAll('.animation-element').forEach(element => {
        observer.observe(element);
    });
});
