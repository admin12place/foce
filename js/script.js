//rechargement de la page quand on click sur un lien => #
document.querySelectorAll('.anchor-link').forEach(link => {
  link.addEventListener('click', () => {
    window.location.reload();
  });
});

//Effets sur les titres
const movingTitle = document.querySelectorAll('.uptitle');
const scrollTitle = new IntersectionObserver((titles) => {
    titles.forEach(titre => {
        if (titre.isIntersecting) {
            titre.target.classList.add('apparition');
        } else {
            titre.target.classList.remove('apparition');
        }
    })
})
movingTitle.forEach(element => scrollTitle.observe(element));

