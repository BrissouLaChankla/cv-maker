require('./bootstrap');


window.Swup = require('swup').default;
window.SwupOverlayTheme = require('@swup/overlay-theme');
// window.SwupScrollPlugin = require('@swup/scroll-plugin');

window.slick = require('slick-carousel');

window.anime = require('animejs').default;


const WOW = require('wowjs'); window.wow = new WOW.WOW({ live: false });


require('./main');
 