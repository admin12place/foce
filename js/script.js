//rechargement de la page quand on click sur un lien => #
document.querySelectorAll('.anchor-link').forEach(link => {
  link.addEventListener('click', () => {
    window.location.reload();
  });
});

