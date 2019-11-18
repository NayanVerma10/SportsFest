
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
    
    <!--site-header-->
		<header class="site-header">
		
			<!--header-search--->
			<div class="header-search clearfix">
				<?php get_search_form(); ?>
			</div><!--/header-search-->
		
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5>
			
			<!--Navigation-Menu-->
			<nav class="site-nav">
               
				<?php
				
				$args=array(
					'theme_location' => 'header'
				);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
			<!--/Navigation-Menu-->
		
			
		</header>
		<!--/site-header-->
	<!--container-->
	<div class="container">
		
		
		
		