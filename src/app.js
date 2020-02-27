const $ = require('jquery');
const Handlebars = require("handlebars");


$(document).ready(function() {
  alert('welcome');

  $.ajax(
  {
    'url':'http://localhost:8890/php-ajax-dischi/partials/callserver.php',
    'method': 'GET',
    'success': function (data) {
    //console.log(data);
        printData(data);
        }
    },
    'error': function (request, state, errors) {
      alert('error' + errors);
    }
  });
});


function printData(data) {
  var source = $('#entry-template').html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < data.length; i++) {
   console.log(data[i]);
   var context = data[i];
   var html = template(context);
   $('.selection_album').append(html);
}
