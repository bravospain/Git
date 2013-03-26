<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Рубрика &laquo;<?php single_cat_title(); ?>&raquo;</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Метка &laquo;<?php single_tag_title(); ?>&raquo;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('d M Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('F Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Архив за <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Архив автора</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Архив сайта</h2>
 	  <?php } ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
				<h2 class="title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="meta"><?php the_author() ?> | <?php the_time('d M Y') ?> | Рубрика: <?php the_category(', ') ?>&nbsp;&bull;&nbsp;
					<?php edit_post_link('Править', '', '&nbsp;&bull;&nbsp;'); ?>
					<?php comments_popup_link('Ваш отзыв', '1 отзыв', 'Отзывов (%)'); ?></p>

				<div class="entry">
					<?php the_excerpt() ?>
          <?php the_tags('Метки: ', ', ', ''); ?>
				</div>

			</div>

		<?php endwhile; ?>

			<div class="navigation">
			<div class="alignright"><?php next_posts_link('Предыдущая страница &raquo;') ?></div>
			<div class="alignleft"><?php previous_posts_link('&laquo; Следующая страница ') ?></div>
		</div>


	<?php else : ?>

		<h2 class="center">Не найдено</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
