      <?php get_template_part( 'footer-widget' ); ?>
      <footer class="site-footer text-center" role="contentinfo">
        <div class="container-fluid">
          <div class="social-links">
            <a href="https://facebook.com/pineapple.hosp" target="_blank">
              <img src="/wp-content/uploads/2017/11/facebook.png'; ?>">
            </a>
            <a href="https://instagram.com/pineapple.hosp" target="_blank">
              <img src="/wp-content/uploads/2017/11/instagram.png'; ?>">
            </a>
            <a href="https://twitter.com/Pineapple_Hosp" target="_blank">
              <img src="/wp-content/uploads/2017/11/twitter.png'; ?>">
            </a>
          </div>
          <div class="site-info hidden-xs-down mt25">
            Pineapple Hospitality Ltd. &nbsp; &nbsp; | &nbsp; &nbsp; 5C Amhurst Road, London E8 1LL &nbsp; &nbsp; | &nbsp; &nbsp; <span class="text-underline"><a class="text-white" href="tel:+442070962058">+44 207 096 2058</a></span><br/>
            © Pineapple 2017
          </div>
          <div class="site-info hidden-sm-up">
            Pineapple Hospitality Ltd.<br/>
            5C Amhurst Road, London E8 1LL<br/>
            <span class="text-underline"><a class="text-white" href="tel:+442070962058">+44 207 096 2058</a></span><br/>
            © Pineapple 2017
          </div><!-- close .site-info -->
        </div>
      </footer><!-- #colophon -->
    </div><!-- #page -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112236638-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112236638-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1739593452771672');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1739593452771672&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->

    <?php wp_footer(); ?>
  </body>
</html>
