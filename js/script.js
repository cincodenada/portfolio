/* Author:

*/

$(document).ready(function() {
  $('#the_lights a').click(function() {
    if($('body').hasClass('dark')) {
        $('body').removeClass('dark');
        $(this).text('Dark');
        $.cookie('bgtheme','light', {path: '/'});
    } else {
        $('body').addClass('dark');
        $(this).text('Light');
        $.cookie('bgtheme','dark', {path: '/'});
    }
    return false;
  })
});
