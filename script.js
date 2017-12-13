jQuery(document).ready(function($) {
   $('a[href^="#"]').click(function(event){
     event.preventDefault();
     if ($(this).data('slide')) return;
     $('html,body').animate({ scrollTop:$(this.hash).offset().top }, 1200);
   });
});
