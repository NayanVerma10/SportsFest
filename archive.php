<?php get_header(); ?>

<!--site-content-->
<div class="site-content clearfix">
    <!--main-column-->
    <div class="main-column">
        
    <?php if (have_posts()): ?>

        <!--arcive-title-->	
        <h2><?php

            if ( is_category() ) {
                single_cat_title('Category Archives: ');
            } elseif ( is_tag() ) {
                single_tag_title();
            } elseif ( is_author() ) {
                the_post();
                echo 'Author Archives: ' . get_the_author();
                rewind_posts();
            } elseif ( is_Day() ) {
                echo 'Daily Archives: ' . get_the_date();
            } elseif ( is_month() ) {
                echo 'Monthly Archives: ' . get_the_date('F Y');
            } elseif ( is_year() ) {
                echo 'Yearly Archive: ' . get_the_date('Y');
            } else {
                echo 'Archives: ';
            }

            ?></h2><!--/archive-title-->

        <?php 
        while (have_posts()) : the_post();

        get_template_part('content', get_post_format());

        endwhile;

        else:
            echo ('<p>No content found</p>');
    endif; ?>

    </div><!--/main-column-->

    <!--secondary-column-->
    <div class="secondary-column">
        <?php dynamic_sidebar('sidebar1'); ?>
    </div><!--/secondary-column-->
</div><!--/site-content-->

<?php get_footer(); ?> 