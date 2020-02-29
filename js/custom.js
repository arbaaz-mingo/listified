$('.all-category-h').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
	navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:8
        }
    }
});