
<?php include_once('nb_funcs.php'); ?>

</section> <!-- fin de nb-content -->

<footer class="nb-colophon">

  <div>
    <?php bloginfo('name'); ?> proudly made on Earth
    using <a href="http://www.wordpress.org/">WordPress</a>
  </div>
  <div>
    <a href="feed:<?php bloginfo('rss2_url'); ?>">Entradas (feed rss)</a>
    <a href="feed:<?php bloginfo('rss2_url'); ?>" class="no-a">
	  <img src="<?php echo get_template_directory_uri().'/img/feed.png'; ?>" alt="Rss" title="Rss" /></a> 
  </div>
  <div>
    4 8 15 16 23 42
  </div>

</footer>

<!-- Theme and design by Ivan Alonso, www.neverbot.com -->
<?php wp_footer(); ?>

</body>
</html>
