require('./bootstrap');
window.swal = require('sweetalert2');
window.Quill = require('quill');
require('bootstrap4-toggle');
require('bootstrap-colorpicker');

window.Swup = require('swup').default;
window.SwupOverlayTheme = require('@swup/overlay-theme');
// window.SwupScrollPlugin = require('@swup/scroll-plugin');

window.slick = require('slick-carousel');

const WOW = require('wowjs'); window.wow = new WOW.WOW({ live: false });

window.anime = require('animejs').default;

require('./main');
 