
<?php include_once('nb_funcs.php'); ?>

<div class="footer">

  <?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>       

  <div class="wordpress-meta">
    <?php wp_register('', ''); ?>
    <?php wp_loginout(); ?>
    <?php wp_meta(); ?>
  </div>

  <?php } ?>

  <div>
    <?php bloginfo('name'); ?> proudly made on Earth
    using <a href="http://www.wordpress.org/">WordPress</a>
  </div>
  <div>
    <a href="feed:<?php bloginfo('rss2_url'); ?>">Entradas (Rss)</a>
    <a href="feed:<?php bloginfo('rss2_url'); ?>">
	  <img src="<?php nb_show_image('feed.png'); ?>" alt="Rss" title="Rss" /></a> 
	  (s&oacute;lo incluye las entradas con texto, sin los posts de instagram) 
  </div>
  <div>
    4 8 15 16 23 42
  </div>

</div>

</div> <!-- fin de page -->

<!-- Theme and design by Ivan Alonso, www.neverbot.com -->
<?php wp_footer(); ?>
</body>
</html>
