
<?php include_once('nb_funcs.php'); ?>

</section> <!-- fin de nb-content -->

<footer class="nb-colophon">

  <div>
    <?php bloginfo('name'); ?> proudly made on Earth
    using <a href="http://www.wordpress.org/">WordPress</a>
  </div>
  <div>
    <a href="<?php bloginfo('rss2_url'); ?>">Entradas (feed rss)</a>
    <a href="<?php bloginfo('rss2_url'); ?>" class="no-a">
	  <img src="<?php echo get_template_directory_uri().'/img/feed.png'; ?>" alt="Rss" title="Rss" /></a> 
  </div>
  <div>
    4 8 15 16 23 42
  </div>

</footer>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1007410-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Theme and design by Ivan Alonso, www.neverbot.com -->
<?php wp_footer(); ?>

</body>
</html>
