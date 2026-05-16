// Toggle navigation for the site navbar
(function(){
    const btn = document.querySelector('.pt-nav-toggle');
    const links = document.querySelector('.pt-nav-links');
    if (!btn || !links) return;
    btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!expanded));
        links.classList.toggle('open');
    });
})();
