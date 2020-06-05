<?php theme_include('header'); ?>

 <section class="nb-content">

    <article class="nb-post">
      <header>
        <h1>404, página no encontrada</h1>
      </header>

      <div class="content">
        <p>Por desgracia, la página <code>/<?php echo htmlspecialchars(current_url()); ?></code> no se ha podido encontrar. 
          Puedes volver a la <a href="<?php echo base_url(); ?>">página de inicio</a>, buscar lo que no has encontrado (la búsqueda
          está arriba a la derecha), o llorar en una esquina.</p>
        <p><strong>Deja de buscar porno.</strong></p>
      </div>

    </article>

  </section>


<?php theme_include('footer'); ?>
