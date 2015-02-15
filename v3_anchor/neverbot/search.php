<?php theme_include('header'); ?>

  <section class="nb-content">

    <article class="nb-post">
      <header>
          <h1>Has buscado &ldquo;<?php echo search_term(); ?>&rdquo;:</h1>
      </header>

      <div class="content">

      <?php if(has_search_results()): ?>
        <ul class="nb-search-results">
          <?php $i = 0; while(search_results()): $i++; ?>
          <li>
              <h2>
                <i class="fa fa-caret-right"></i>&nbsp;&nbsp;
                <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
              </h2>
              <small><?php echo utf8_encode(strftime('%e de %B de %Y', article_time())); ?></small>
          </li>
          <?php endwhile; ?>
        </ul>

    <?php if(has_pagination()): ?>
    <div class="container nb-pagination">
      <div class="previous">
        <?php echo search_prev('&larr; Más resultados'); ?>
      </div>
      <!-- 
      <div class="next">
        <?php echo search_next('Búsqueda anteriores &rarr;'); ?>        
      </div>
        -->  
    </div>
    
    <?php endif; ?>

      <?php else: ?>
        
        <p>
          No se ha escrito nada aquí acerca de &ldquo;<?php echo search_term(); ?>&rdquo;.
          <strong>Deja de buscar porno.</strong> 
        </p>

      <?php endif; ?>

      </div>


    </article>

  </section>

<?php theme_include('footer'); ?>
