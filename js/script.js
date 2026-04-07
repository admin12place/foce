document.querySelectorAll(".anchor-link").forEach(link => {
    link.addEventListener('click', () => {
        preventDefault();
        location.reload();      // recharge la page
        
    });
});
console.log("oui");