<?php

/*

Template Name: Special Layout;

*/

get_header();

if (have_posts()):
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<?php 
			
			$args = array(
				'child_of' => get_top_ancestor_id(),
				'title_li' => ''
				);
			?>
			
			<?php wp_list_pages($args); ?> 
			<h2><?php the_title(); ?></a></h2>
		
		<!--info-box-->
		<div class="info-box">
			<h4>Disclaimer Title</h4>
			<p>This is the dummy text. Sample text for Disclaimer Box.This is the dummy text. Sample text for Disclaimer Box.This is the dummy text. Sample text for Disclaimer Box.This is the dummy text. Sample text for Disclaimer Box.This is the dummy text. Sample text for Disclaimer Box.</p>
		</div><!--/info-box-->
		
		<?php the_content(); ?>
				
	</article>
	
	<?php endwhile;
	
	else:
		echo ('<p>No content found</p>');
endif;

get_footer();
?> 