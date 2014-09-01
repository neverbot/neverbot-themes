
<?php 

include_once('nb_funcs.php'); 

get_header();

if (have_posts()) : 
 while (have_posts()) : 
  the_post(); 

?>

    <div class="post" id="post-<?php the_ID(); ?>">

    <?php 
          $title = get_the_title(); 
          if (!empty($title)) 
          { 
    ?>
      <div class="titulo">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>">
         <?php the_title(); ?></a>
      </div>
      <div class="fecha">Publicado por <?php the_author_link() ?>, el <?php the_time('l j \d\e F \d\e Y') ?>
      </div>

    <?php } ?>

       <?php the_content('Lee el resto de este mensaje &raquo;'); ?>

       <div class="foot">
        Categor&iacute;a: <?php the_category(', ') ?> | 
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente">#</a> |
        <?php edit_post_link('Editar', '', ''); ?>  
      </div>
    </div>

    <div class="navigation">
      <div class="navigation-left "><?php previous_post_link('&laquo; %link') ?> (mensaje anterior)</div>
      <div class="navigation-right">(mensaje siguiente) <?php next_post_link('%link &raquo;') ?></div>
    </div>

    <!-- Google ads -->
    <?php echo '<div id="google_ad">'.google_ad_code().'</div>'; ?>


  </div> <!-- fin main -->
</div> <!-- fin page -->

<?php endwhile; else: ?>

  <p>No hay ning&uacute;n mensaje.</p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
