<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>></html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Архив сайта <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS-лента" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body><?php wp_contents_stats(); ?>

<div id="logo">
	<div>
        <p id ="social">
			    <a href='http://www.facebook.com'><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" alt="Ссылка на Facebook" title="Ссылка на Facebook"/></a>
			    <!--<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/flickr.png" alt="Ссылка на Flickr" title="Ссылка на Flickr"/></a> -->
			    <!--<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.png" alt="Ссылка на LinkedIn" title="Ссылка на LinkedIn"/></a>-->
			    <a href='http://www.twitter.com'><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt="Ссылка на Twitter" title="Ссылка на Twitter"/></a>
			    <a title="<?php bloginfo('name'); ?> RSS-лента" href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/feed.png" alt="Ссылка на RSS-ленту" title="RSS-лента комментариев"/></a>
	    </p>
	    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
        <p class="desc"><?php bloginfo('description'); ?></p>
	

</div>
</div>

    						<div id="menu">
							<ul>
								<!-- <li <?php if (is_home()) : echo 'class="current_page_item"'; endif; ?>><a href="<?php bloginfo('url'); ?>">Главная</a></li> -->
                                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
								<!-- <?php wp_list_categories('title_li=&show_option_all&depth=5'); ?> -->

<!-- <div id="menu">
	<ul>
	   <li class="<?php if (is_home()) echo ' current-cat'; ?>"><a href="<?php echo get_option('home'); ?>/">Главная</a></li>
           <?php wp_list_categories('title_li=&depth=1' ); ?> -->
    <!--    <?php wp_list_pages('title_li=&depth=1' ); ?> -->
	</ul>
</div>

<div id="wrapper">

<div id="header">

</div></body>
<!--<div id="pgmenu">
	<ul>
	    <?php wp_list_pages('title_li=&depth=1' ); ?>
	</ul>
</div>-->