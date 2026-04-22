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

//parallaxe au scroll sur le titre principal
const banner = document.querySelector('.banner');
const bannerLogo = document.querySelector('.logo-foce img');

document.addEventListener('scroll', () => {
    const bannerDim = banner.offsetHeight;//hauteur de la bannière
    const bannerMerge = (bannerDim - bannerLogo.height) / 1.33;
    const vertScroll = window.scrollY;

    const progress = Math.min(vertScroll / bannerDim, 1);
    const moveY = Math.min(progress * (bannerDim / 2), bannerMerge);

    bannerLogo.style.transform = `translateY(${moveY}px)`;
});

//Deplacement horizontal au scroll sur les nuages
const movingCloud = document.querySelector('img.clouds');

window.addEventListener('scroll', () => {
    
    const position = movingCloud.getBoundingClientRect().top;
    const hauteurEcran = window.innerHeight - movingCloud.height;

    // Quand l'élément entre dans l'écran
    if (position < hauteurEcran) {
        
        // progression d'apparition
        let progression = (hauteurEcran - position) / hauteurEcran;

        // déplacement horizontal
        let decalage = - progression * 300; // 300px max

        movingCloud.style.transform = `translateX(${decalage}px)`;
    }
});

//Paramétrage du swiper.js
const swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    loop: true,
    centeredSlides: true,
    slidesPerView: "2",
    grabCursor: true,
    speed: 1200,

    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },

    coverflowEffect: {
    rotate: -40,
    stretch: 60,
    depth: 150,
    scale: 0.85,
    slideShadows: false
    }
});

//Header et menu burger
const burger = document.querySelector('.menu-toggle');
const sitenav = document.getElementById('site-navigation');
const mainbanner = document.querySelector('.banner');
const fullbanner = document.querySelector('.banner-menu');

burger.addEventListener('click', function () {
    burger.classList.toggle('active');
    sitenav.classList.toggle('toggled');

    document.body.classList.toggle('no-scroll');

    fullbanner.classList.toggle('locked');
    mainbanner.classList.toggle('locked');
    
});