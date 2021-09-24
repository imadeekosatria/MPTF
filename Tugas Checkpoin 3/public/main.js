/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

/*SCROLL ABOUT*/
sr.reveal('.about__img',{}); 
sr.reveal('.about__subtitle',{delay: 400}); 
sr.reveal('.about__text',{delay: 400});

sr.reveal('.berita',{delay: 400}); 
sr.reveal('.pengumuman',{delay: 400}); 

sr.reveal('.reveal',{delay: 400});