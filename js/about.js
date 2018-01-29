jQuery( document ).ready(function($) {
  $('#owners-section img').hover(function() {
    var image = $(this).data('hover');
    if (!image) return;
    $(this).attr('src', image);
  }, function() {
    var image = $(this).data('main');
    $(this).attr('src', image);
  });
});
