document.querySelectorAll('.anchor-link').forEach(link => {
  link.addEventListener('click', () => {
    window.location.reload();
  });
});