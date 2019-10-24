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

$("#reg_click").on('click', function() {
	$('.register-foo').show();
	$('.forgot-hide').show();
	$('.registerBox').show();
	$('.login-foo').hide();
	$('.forgot-foo').hide();
	$('.loginBox').hide();
	$('.forgotBox').hide();
	
});

$("#login_click").on('click', function() {
	$('.login-foo').show();
	$('.loginBox').show();
	$('.forgot-hide').show();
	$('.forgot-foo').hide();
	$('.registerBox').hide();
	$('.forgotBox').hide();
	$('.register-foo').hide();
});

$("#forgot_click").on('click', function() {
	$('.forgot-foo').show();
	$('.forgot-show').show();
	$('.forgotBox').show();
	$('.login-foo').hide();
	$('.registerBox').hide();
	$('.loginBox').hide();
	$('.register-foo').hide();
	$('.forgot-hide').hide();
});