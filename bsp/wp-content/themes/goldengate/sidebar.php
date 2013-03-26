<div id="sidebar">
    
<div id="sidebartop">
<div id="search_a"><?php include_once(TEMPLATEPATH. '/searchform.php');?></div>
<!-- <ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Top') ) : else : ?>
  
<?php if (function_exists('wp_tag_cloud')) {	?>
     <li>
       <h3><?php _e('Метки'); ?></h3>
       <div>
         <p>
           <?php wp_tag_cloud('smallest=8&largest=22'); ?>
         </p>
       </div>
     </li>
 <?php } ?>
 <?php endif; ?>
 </ul> -->
 </div>

<!-- <div id="sidebarleft">
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Bottom Left') ) : else : ?>
	<li>
    <h3><?php _e('Рубрики'); ?></h3>
    <ul>
      <?php wp_list_categories('show_count=1&title_li=&hierarchical=1');    ?>
    </ul>
  </li> 
  <li>
    <h3><?php _e('Страницы'); ?></h3>
    <ul>
      <?php wp_list_pages('title_li=' ); ?>
    </ul>
  </li>
<?php endif; ?>
</ul>
</div> -->

<!-- <div id="sidebarright">
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Bottom Right') ) : else : ?>
<li>
    <h3><?php _e('По месяцам'); ?></h3>
    <ul>
      <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
    </ul>
  </li>
<li>
	<h3><?php _e('Админ-панель'); ?></h3>
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>">Публикации RSS</a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Комментарии RSS</a></li>
		<li><a href="http://wordpressstyle.ru">Wordpress</a></li>
	</ul>			
</li>
<?php endif; ?>
</ul>
</div>
    -->
</div>
