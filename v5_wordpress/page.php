
<?php 

include_once('nb_funcs.php'); 

get_header();

if (have_posts()) : 
 while (have_posts()) : 
  the_post(); 
?>

  <article class="nb-post" id="post-<?php the_ID(); ?>">
    <header>
      <h1>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>">
         <?php the_title(); ?></a>
      </h1>
    </header>

     <?php the_content('Lee el resto de este mensaje &raquo;'); ?>

     <footer>
      <small>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente">#</a>
        <?php edit_post_link('Editar', ' | ', ''); ?>  
      </small>
    </footer>
  </article>

  </section>
  
<?php endwhile; else: ?>

  <p>No hay ning&uacute;n mensaje.</p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
