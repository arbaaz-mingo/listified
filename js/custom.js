$('#all-categories').owlCarousel({
    loop:true,
    margin:10,
	navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:6,
            nav:true,
            loop:true
        }
    }
});

$('.js-preloader').preloadinator({
    minTime: 2000,
    scroll: false
});