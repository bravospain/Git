<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
     	<h2 class="title">
        <?php if(function_exists('get_avatar')) echo get_avatar(get_the_author_id(), '45') ;?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="meta">
          <?php the_author_posts_link() ?> | <?php the_time('d M Y') ?> | Рубрика: <?php the_category(', ') ?> <?php edit_post_link('Править'); ?></p>
				<div class="entry">
					<?php the_content('Читать полностью &raquo;'); ?>
          <?php the_tags('Метки: ', ', ', ''); ?>
          <p class="comments">
            <?php comments_popup_link('Ваш отзыв', '1 отзыв', 'Отзывов (%)'); ?>
          </p>

        </div>
      </div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignright"><?php next_posts_link('Предыдущая страница &raquo;') ?></div>
			<div class="alignleft"><?php previous_posts_link('&laquo; Следующая страница ') ?></div>
		</div>

	<?php else : ?>

		<h2>Не найдено</h2>
		<p>К сожалению, по вашему запросу ничего не найдено.</p>

	<?php endif; ?>

	</div>
	<!-- end #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
