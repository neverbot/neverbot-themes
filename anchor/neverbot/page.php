<?php theme_include('header'); ?>

  <section class="nb-content">

    <article class="nb-post">
      <header>
        <h1>
          <a href="<?php echo page_url(); ?>" title="<?php echo page_title(); ?>"><?php echo page_title(); ?></a>
        </h1>
      </header>

      <div class="content">
        <?php echo page_content(); ?>
      </div>

      <footer>
        <small><a href="<?php echo page_url(); ?>">#</a></small>
      </footer>
    </article>

  </section>


<?php theme_include('footer'); ?>