<article class="post <?php if (!is_single()) { if ( has_post_thumbnail() ) { ?> has-thumbnail<?php } ?> clearfix <?php } ?>" >
	
    <?php if (!is_single()) { ?>
		<!--post-thumbnail-->
		<div class="post-thumbnail">
		
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		
		</div><!--/post-thumbnail-->
		
    <?php } ?>
		<?php if (is_single()) { ?>
        <h2><?php the_title(); ?></h2>
        <?php } else { ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php } ?>
		
		<p class="post-info"><?php the_time('F jS, Y g:i a') ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in
		
		<?php
		 
		$categories = get_the_category();
		$seperator = ", ";
		$output = '';
		
		if ($categories) {
			
			foreach ($categories as $category) {
				
				$output .= '<a href="'. get_category_link($category->term_id) .'">' . $category->cat_name . '</a>'. $seperator;
			}
			
			echo trim($output, $seperator);
		}
		
		?>
		</p>
		
		<?php if ( (is_search()) OR  (is_archive()) ) { ?>
			<p>
			<?php echo get_the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
			</p>
		<?php } elseif ( is_single() ) { ?>
            <div class="banner-thumbnail"><?php the_post_thumbnail('banner-image'); ?></div>
		
		<?php the_content();
}
    
    else {
			if ($post->post_excerpt) { ?>
			
				<p>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
				</p>
			
			<?php } else {
                the_content();
                
		}
		} ?>
		
		
	</article>

