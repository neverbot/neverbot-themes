
<?php 

include_once('nb_funcs.php'); 

get_header();

if (have_posts()) : 
 while (have_posts()) : 
  the_post(); 

?>

    <article class="nb-post" id="post-<?php the_ID(); ?>">

    <?php 
          $title = get_the_title(); 
          if (!empty($title)) 
          { 
    ?>
      <header>
        <h1>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>">
           <?php the_title(); ?></a>
         </h1>
        <small>Publicado por <?php the_author_link() ?>, el <?php the_time('l j \d\e F \d\e Y') ?>
        </small>
      </header>

    <?php } ?>

       <?php the_content('Lee el resto de este mensaje &raquo;'); ?>

        <footer>
          <small>
            Categor&iacute;a: <?php the_category(', ') ?> | 
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente">#</a> |
            <?php edit_post_link('Editar', '', ''); ?>  
          </small>
        </footer>
    </article>

    <div class="nb-pagination">
      <div class="previous"><?php previous_post_link('&laquo; %link') ?> (mensaje anterior)</div>
      <div class="next">(mensaje siguiente) <?php next_post_link('%link &raquo;') ?></div>
    </div>

</section> <!-- fin page -->

<?php endwhile; else: ?>

  <p>No hay ning&uacute;n mensaje.</p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
