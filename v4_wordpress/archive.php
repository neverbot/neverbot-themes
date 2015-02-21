
<?php 

include_once('nb_funcs.php'); 

get_header();

$count = 1;

if (have_posts()) : 
 while (have_posts()) : 
  the_post(); 

?>

     <div class="post" id="post-<?php the_ID(); ?>">
      <div class="titulo">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>">
         <?php the_title(); ?></a>
       </div>
       <div class="fecha">Publicado por <?php the_author_link() ?>, el <?php the_time('l j \d\e F \d\e Y') ?>
       </div>

       <?php the_content('Lee el resto de este mensaje &raquo;'); ?>

       <div class="foot">
        Categor&iacute;a: <?php the_category(', ') ?> | 
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente">#</a>
        <?php edit_post_link('Editar', ' | ', ''); ?>  
      </div>
    </div>

<?php 

  if ($count == 1)
    echo '<div id="google_ad">'.google_ad_code().'</div>';       
  $count++;
   
  endwhile; 

?>

    <div class="navigation">
      <div class="navigation-left"><?php next_posts_link('&laquo; Entradas m&aacute;s antiguas') ?></div>
      <div class="navigation-right"><?php previous_posts_link('Entradas m&aacute;s actuales &raquo;') ?></div>
    </div>

<?php 
  else : 
?>

  <div class="post" >
    <h2>No encontrado</h2>
    <p>Lo sentimos, pero est&aacute;s buscando algo que no est&aacute; aqu&iacute;.</p>
  </div>

<?php endif; ?>

</div> <!-- fin de main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
