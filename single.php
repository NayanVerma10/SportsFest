<?php get_header(); ?>

<!--site-content-->
<div class="site-content clearfix">
    <!--main-column-->
    <div class="main-column">

<?php if (have_posts()):
	while (have_posts()) : the_post(); 
	   
        get_template_part('content', get_post_format());
	
    endwhile; ?>

<div class="about-author clearfix">
    <div class="about-author-image">
        <?php echo get_avatar(get_the_author_meta('ID'),512) ?>
        <p><?php echo get_the_author_meta('nickname') ?></p>
    </div>

    <?php $otherAuthorPosts = new WP_Query(array(
    'author' => get_the_author_meta('ID'),
    'posts_per_page' => 3,
    'post_not_in' => array(get_the_ID())
    )); ?>
    
    
    <div class="about-author-text">
    <h3>About the Author</h3>
        <?php echo wpautop(get_the_author_meta('description')) ?>
     
    <?php if (count_user_posts(get_the_author_meta('ID')) > 1) { ?>
         
    <div class="other-posts-by">
        <h4>Other posts by: <?php echo get_the_author_meta('nickname'); ?></h4>
        
        <ul>
            <?php while ($otherAuthorPosts->have_posts()) {
            $otherAuthorPosts->the_post(); ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>    
            <?php }?>
            
        </ul>
        
        </div>
        <?php } wp_reset_postdata(); ?>
        
        <?php if (count_user_posts(get_the_author_meta('ID')) > 3) { ?>
        <a class="other-posts-btn" href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">View all posts by <?php echo get_the_author_meta('nickname') ?></a>
        <?php } 
         ?>
    </div>
</div>
	
<?php	else:
		echo ('<p>No content found</p>');
endif; ?>
        
    </div><!--/main-column-->
<!--secondary-column-->
    <div class="secondary-column">
        <?php dynamic_sidebar('sidebar1'); ?>
    </div><!--/secondary-column-->
    
</div><!--/site-content-->

<?php get_footer();
?> 