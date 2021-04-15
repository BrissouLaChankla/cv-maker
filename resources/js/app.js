require('./bootstrap');

window.moment = require('moment');
window.moment.locale('fr');

console.log(moment().diff('1998-05-04', 'days'));

require('./main');
