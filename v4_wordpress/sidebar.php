
<?php

include_once('nb_funcs.php');

?>

<section class="nb-footer sidebar">

  <div class="sidebar-categories">
    <div><strong>Archivos (&Uacute;ltimos cinco meses):</strong></div>
    <div><?php wp_get_archives('type=monthly&format=custom&show_post_count=1&limit=5'); ?></div>
  </div>

  <div class="sidebar-columns">
    <div class="sidebar-left col-sm-4 col-xs-12">

      <div><strong>Categor&iacute;as:</strong></div>
      <?php

        $args = array(
          'show_option_all'    => '',
          'orderby'            => 'name',
          'order'              => 'ASC',
          'style'              => 'list',
          'show_count'         => 1,
          'hide_empty'         => 1,
          'use_desc_for_title' => 1,
          'child_of'           => 0,
          'feed'               => 'Feed Rss',
          'feed_type'          => '',
          'feed_image'         => get_template_directory_uri().'/img/feed.png',
          'exclude'            => '',
          'exclude_tree'       => '',
          'include'            => '',
          'hierarchical'       => 0,
          'title_li'           => '',
          'show_option_none'   => 'No hay categorías',
          'number'             => null,
          'echo'               => 1,
          'depth'              => 0,
          'current_category'   => 0,
          'pad_counts'         => 0,
          'taxonomy'           => 'category',
          'walker'             => null
        );
        wp_list_categories( $args ); 

      ?> 

    </div>

    <div class="sidebar-right col-sm-8 col-xs-12">
      <?php

      $page_id = 6;
      $page_data = get_page($page_id);
      echo apply_filters('the_content', $page_data->post_content);

      ?>
    </div>

  </div>

</section>
