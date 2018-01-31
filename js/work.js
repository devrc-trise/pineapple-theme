jQuery( document ).ready(function($) {
  var resize = function() {
    if (window.innerWidth > 575) {
      $('.work-list-section').each(function() {
        $(this).css('background-image', 'url(' + $(this).data('desktopbg') + ')');
      });
    } else {
      $('.work-list-section').each(function() {
        $(this).css('background-image', 'url(' + $(this).data('mobilebg') + ')');
      });
    }
  }
  $(window).on('resize', resize);
  resize();
});
