<?php theme_include('header'); ?>

<section class="nb-content">

	<?php if(has_posts()): ?>
		<ul class="nb-items">
			<?php $i = 0; while(posts()): ?>
			<li>
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
			</li>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<div class="previous">
					<?php echo posts_prev(); ?>
				</div>
				<div class="next">
					<?php echo posts_next(); ?>
				</div>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

</section>

<?php theme_include('footer'); ?>