
    <footer class="nb-footer">

		  <div class="sidebar-columns">
		    <div class="sidebar-left">
		      <div><i class="fa fa-list-ul"></i>&nbsp;&nbsp;<strong>Categor&iacute;as:</strong></div>
		      <ul>
			      <?php $i = 0; while(categories()): ?>
			      <li>
			      	<i class="fa fa-caret-right"></i>&nbsp;&nbsp;<a href="<?php echo category_url(); ?>"><?php echo category_title(); ?></a> 
			      	<?php
			      		if (category_count() > 0)
			      			echo ' ('.category_count().')';
			      	?>
			      </li>
			      <?php endwhile; ?>
			    </ul>
		    </div>

		    <div class="sidebar-right">
		    	<?php 
						$page = Page::where('id', '=', '1')->get()[0];

		        // register single post
		        Registry::set('page', $page);

		        echo page_content();
		    	?>
		    </div>			  
	    </div>			  

    </footer>

    <div class="nb-colophon">
			<div>
			  neverbot.com proudly made on Earth
			  using <a href="http://www.anchorcms.com/">Anchor</a>
			</div>
			<div>
        <a href="http://feeds.feedburner.com/neverbot">rss</a> | 
        <a href="http://twitter.com/neverbot">@neverbot</a>
			</div>
			<div>
			  4 8 15 16 23 42
			</div>
		</div>

  </body>
</html>
