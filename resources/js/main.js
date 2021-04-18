const { throttle } = require("lodash");

$(function() {
    let about = $('#about').offset().top;
    let resume = $('#resume').offset().top;
    let portfolio = $('#portfolio').offset().top;
    let contact = $('#contact').offset().top;
    
// Detect partie active menu gauche
    $(window).on('scroll', _.throttle(function () {
        var scroll = $(window).scrollTop();
        if(scroll >= contact) {
            if($('nav a:last-child').hasClass('onit')) {
            } else {
                $('nav a').removeClass('onit');
                $('nav a:last-child').addClass('onit');
            }
        } else if (scroll >= portfolio) {
            if($('nav a:nth-last-child(2)').hasClass('onit')) {
            } else {
                $('nav a').removeClass('onit');
                $('nav a:nth-last-child(2)').addClass('onit');
            }
        } else if (scroll >= resume) {
            if($('nav a:nth-last-child(3)').hasClass('onit')) {
            } else {
                $('nav a').removeClass('onit');
                $('nav a:nth-last-child(3)').addClass('onit');
            }
        } else if (scroll >= about) {
            if($('nav a:nth-last-child(4)').hasClass('onit')) {
            } else {
                $('nav a').removeClass('onit');
                $('nav a:nth-last-child(4)').addClass('onit');
            }
        } else {
            if($('nav a:first-child').hasClass('onit')) {
            } else {
                $('nav a').removeClass('onit');
                $('nav a:first-child').addClass('onit');
            }
        }
    },300));
})