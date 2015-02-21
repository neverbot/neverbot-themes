
<?php 

include_once('nb_funcs.php'); 

get_header();

$is_miniblog = false; 
$count = 1;

if (have_posts()) : 

 echo '<div id="google_ad">'.google_ad_code().'</div>';       

 while (have_posts()) : 
  the_post(); 

  if (in_category(21) && !is_single()) 
  {
    if ($is_miniblog==false) 
    {
      echo '<article class="nb-post nb-miniblog"><ul>';
      $is_miniblog = true; 
    } 
    ?>

    <li>
      <div class="nb-minipost" id="post-<?php the_ID(); ?>">
        <?php echo wptexturize($post->post_content); ?>
        <footer>
          <small>
            <?php edit_post_link('(e)', '', ' | '); ?>  
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>">#</a>
          </small>
        </footer>
      </div>
    </li>

    <?php 
  } 
  else 
  { 
    if ($is_miniblog == true) 
    { 
      $is_miniblog = false; 
      echo '</ul></article>';
      echo '<div id="google_ad">'.google_ad_code().'</div>';       
    } 

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
          <small>Publicado por <?php the_author_link() ?>, el <?php the_time('l j \d\e F \d\e Y') ?></small>
        </header>

    <?php 
      } 
    ?>

         <?php the_content('Lee el resto de este mensaje &raquo;'); ?>

        <footer>
          <small>
            Categor&iacute;a: <?php the_category(', ') ?> | 
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente">#</a>
            <?php edit_post_link('Editar', ' | ', ''); ?>  
          </small>
        </footer>

      </article>

<?php 
    if ($count == 1)
      echo '<div id="google_ad">'.google_ad_code().'</div>';       
    $count++;
  } 
  endwhile; 

  if ($is_miniblog == true) 
  { 
    $is_miniblog = false; 
    echo '</ul></article>';
    echo '<div id="google_ad">'.google_ad_code().'</div>';       
  } 
?>

    <div class="nb-pagination">
      <div class="previous"><?php next_posts_link('&laquo; Entradas m&aacute;s antiguas') ?></div>
      <div class="next"><?php previous_posts_link('Entradas m&aacute;s actuales &raquo;') ?></div>
    </div>

<?php 
  else : 
?>

  <article class="nb-post" >
    <h2>No encontrado</h2>
    <p>Lo sentimos, pero est&aacute;s buscando algo que no est&aacute; aqu&iacute;.</p>
  </article>

<?php endif; ?>

</section> <!-- fin de main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
