<?php get_header(); ?>

	<div id="content">
    <h2 class="pagetitle">
      Результаты поиска &#8216;<?php the_search_query(); ?>&#8217;
    </h2>
    <?php if (have_posts()) : ?>
 	  <?php while (have_posts()) : the_post(); ?>
		<div class="post">
				<h2 class="title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="meta"><?php the_author() ?> | <?php the_time('d M Y') ?>
					&nbsp;&bull;&nbsp;
					<?php edit_post_link('Править', '', '&nbsp;&bull;&nbsp;'); ?>
					<?php comments_popup_link('Ваш отзыв', '1 отзыв', 'Отзывов (%)'); ?></p>

				<div class="entry">
					<?php the_excerpt() ?>
				</div>

			</div>

		<?php endwhile; ?>

			<div class="navigation">
			<div class="alignright"><?php next_posts_link('Предыдущая страница &raquo;') ?></div>
			<div class="alignleft"><?php previous_posts_link('&laquo; Следующая страница ') ?></div>
		</div>


	<?php else : ?>

		<p class="center">К сожалению, по вашему запросу ничего не найдено.<br/>Попробуете поиск по другому ключевому слову.</p>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
