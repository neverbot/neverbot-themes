<?php theme_include('header'); ?>

	<section class="nb-content">

    <article class="nb-post">
      <header>
        <h1>
          <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
        </h1>
        <small>Publicado el <?php echo utf8_encode(strftime('%A %e de %B de %Y', article_time())); ?> por <a href="<?php echo base_url(); ?>"><?php echo article_author('real_name'); ?></a></small>
      </header>

      <div class="content">
        <?php echo article_markdown(); ?>
      </div>

      <footer>
        <small>Categoría: <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a> | <a href="<?php echo article_url(); ?>">#</a></small>
      </footer>
    </article>

	</section>

	<?php if(comments_open()): ?>

	<section class="nb-post comments" id="comments">

		<?php if(has_comments()): ?>
		<ul class="commentlist">
			<?php $i = 0; while(comments()): $i++; ?>
			<li class="comment" id="comment-<?php echo comment_id(); ?>">
				
				<div class="wrap">
					<header>
						<h2><a href="<?php echo article_url().'#comment-'.comment_id(); ?>"><?php echo comment_name(); ?></a></h2>
						<small><?php echo nb_relative_time(comment_time()); ?> | <a href="<?php echo article_url().'#comment-'.comment_id(); ?>">#</a></small>
					</header>

					<div class="content">
						<?php echo comment_text(); ?>
					</div>

					<span class="counter"><?php echo $i; ?></span>
				</div>

			</li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>

		<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
			<?php echo comment_form_notifications(); ?>

			<p class="name">
				<label for="name">Tu nombre:</label>
				<?php echo comment_form_input_name('placeholder="Tu nombre"'); ?>
			</p>

			<p class="email">
				<label for="email">Tu dirección de email:</label>
				<?php echo comment_form_input_email('placeholder="Tu email (no será publicado)"'); ?>
			</p>

			<p class="textarea">
				<label for="text">Tu comentario:</label>
				<?php echo comment_form_input_text('placeholder="Déjame un comentario y cuéntame qué te parece"'); ?>
			</p>

			<div class="nb-center">
				<?php echo comment_form_button('Enviar comentario'); ?>
			</div>	

		</form>

	</section>

	<?php endif; ?>

<?php theme_include('footer'); ?>

