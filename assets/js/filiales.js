document.addEventListener('DOMContentLoaded', function() {
    // Animation au scroll
    const filialeItems = document.querySelectorAll('.filiale-item');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // Animation séquentielle pour chaque élément
                const index = Array.from(filialeItems).indexOf(entry.target);
                entry.target.style.transitionDelay = `${index * 0.1}s`;
            }
        });
    }, {
        threshold: 0.1
    });
    
    filialeItems.forEach(item => {
        observer.observe(item);
    });
    
    // Redirection au clic sur toute la carte filiale
    document.querySelectorAll('.filiale-link').forEach(link => {
        link.addEventListener('click', function(e) {
            // Si on clique directement sur un lien dans la description, on ne fait rien de plus
            if (e.target.tagName === 'A' && e.target.href !== this.href) {
                return;
            }
            
            // Sinon, on redirige vers le lien principal de la filiale
            if (e.target !== this && !this.contains(e.target)) return;
            
            e.preventDefault();
            window.open(this.href, '_blank');
        });
    });
});