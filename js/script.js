/* Author:

*/

$(document).ready(function() {
  $('#the_lights a').click(function() {
    $('body').toggleClass('dark');
    $(this).text($('body').hasClass('dark') ? 'Light' : 'Dark');
    return false;
  })
});
