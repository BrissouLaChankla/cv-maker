require('./bootstrap');
window.swal = require('sweetalert2');
window.Quill = require('quill');

window.Swup = require('swup').default;
// window.SwupSlideTheme = require('@swup/slide-theme');
window.SwupOverlayTheme = require('@swup/overlay-theme');

const WOW = require('wowjs'); window.wow = new WOW.WOW({ live: false });

require('./main');
 