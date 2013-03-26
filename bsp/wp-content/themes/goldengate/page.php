<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post single" id="post-<?php the_ID(); ?>">
		<h1 class="title"><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Читать полностью &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Править', '<p>', '</p>'); ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>