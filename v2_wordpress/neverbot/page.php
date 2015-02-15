
<?php 

include_once('nb_funcs.php'); 

get_header();

if (have_posts()) : 
 while (have_posts()) : 
  the_post(); 

?>

      <div class="post" id="post-<?php the_ID(); ?>">
        <div class="titulo">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>">
           <?php the_title(); ?></a>
         </div>

         <?php the_content('Lee el resto de este mensaje &raquo;'); ?>

         <div class="foot">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente">#</a>
          <?php edit_post_link('Editar', ' | ', ''); ?>  
        </div>
      </div>

      <!-- Google ads -->
      <?php echo '<div id="google_ad">'.google_ad_code().'</div>'; ?>

    </div> <!-- fin main -->
  
<?php endwhile; else: ?>

  <p>No hay ning&uacute;n mensaje.</p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
