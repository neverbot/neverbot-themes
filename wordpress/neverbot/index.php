
<?php 

include_once('nb_funcs.php'); 

get_header();

if ( is_home() ) {
  query_posts($query_string . '&cat=-33');
}

$es_miniblog = false; 
$count = 1;

if (have_posts()) : 

 // echo '<div id="google_ad">'.google_ad_code().'</div>';       

 while (have_posts()) : 
  the_post(); 

  if (in_category(22) && !is_single()) 
  {
    if ($es_miniblog==false) 
    {
      echo '<div class="post miniblog"><ul>';
      $es_miniblog = true; 
    } 
    ?>

    <li>
      <div id="post-<?php the_ID(); ?>">
        <?php echo wptexturize($post->post_content); ?>
        <span class="foot">
          <?php edit_post_link('(e)', '', ' | '); ?>  
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>">#</a>
        </span>
      </div>
    </li>

    <?php 
  } 
  else 
  { 
    if ($es_miniblog == true) 
    { 
      $es_miniblog = false; 
      echo '</ul></div>';
      echo '<div id="google_ad">'.google_ad_code().'</div>';       
    } 

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
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente">#</a>
          <?php edit_post_link('Editar', ' | ', ''); ?>  
        </div>
      </div>

<?php 
    if ($count == 1)
      echo '<div id="google_ad">'.google_ad_code().'</div>';       
    $count++;
  } 
  endwhile; 

  if ($es_miniblog == true) 
  { 
    $es_miniblog = false; 
    echo '</ul></div>';
    echo '<div id="google_ad">'.google_ad_code().'</div>';       
  } 
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
