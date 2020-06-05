
<?php

include_once('nb_funcs.php');

?>

<div class="sidebar">
<div class="post">

  <div class="sidebar-categories">
    <div><strong>Archivos (&Uacute;ltimos cinco meses):</strong></div>
    <div><?php wp_get_archives('type=monthly&format=custom&show_post_count=1&limit=5'); ?></div>
  </div>

  <div class="sidebar-columns">
    <div class="sidebar-left">

      <div><strong>Categor&iacute;as:</strong></div>
      <?php

      list_cats(FALSE, '', 'name',
        'asc', '', FALSE, FALSE, 
        TRUE, TRUE, TRUE, 
        TRUE, FALSE, '', FALSE, 
        'Feed Rss2', 
        get_template_directory_uri().'/images/feed.png',
        '', FALSE); 
        ?> 

    </div>

    <div class="sidebar-right">
      <?php

      $page_id = 2;
      $page_data = get_page($page_id);
      echo apply_filters('the_content', $page_data->post_content);

      ?>

    </div>

  </div>
</div> <!-- fin de post -->
</div> <!-- fin de sidebar -->
