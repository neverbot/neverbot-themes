
      <footer class="nb-footer">

				 <div class="sidebar-columns">
				    <div class="sidebar-left">

				      <div><i class="fa fa-list-ul"></i>&nbsp;&nbsp;<strong>Categor&iacute;as:</strong></div>
				      <ul>
					      <?php $i = 0; while(categories()): ?>
					      <li>
					      	<i class="fa fa-caret-right"></i>&nbsp;&nbsp;<a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a> 
					      </li>
					      <?php endwhile; ?>
					    </ul>


				    </div>

				    <div class="sidebar-right">

				    	// pagina about me

				    </div>			  
			    </div>			  




          <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>

          <ul role="navigation">
              <li><a href="http://feeds.feedburner.com/neverbot">RSS</a></li>
              <?php if(twitter_account()): ?>
              <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
              <?php endif; ?>

              <li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>

              <li><a href="<?php echo base_url(); ?>" title="Return to my website.">Home</a></li>
          </ul>
      </footer>

  </body>
</html>
