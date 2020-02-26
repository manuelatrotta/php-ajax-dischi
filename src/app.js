const $ = require('jquery');
const Handlebars = require("handlebars");


$(document).ready(function() {
  alert('welcome');

  $.ajax(
  {
    'url':'http://localhost:8890/php-ajax-dischi/partials/callserver.php',
    'method': 'GET',
    'success': function (data) {
    console.log(data);
    },
    'error': function (request, state, errors) {
      alert('error' + errors);
    }
  });
});
