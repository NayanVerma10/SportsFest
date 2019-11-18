<footer class="site-footer">
	
    
    <!--footer-widgets-->
    <div  class="footer-widgets clearfix">
        
        <?php if (is_active_sidebar('footerarea1')) : ?>
            <div class="footer-widget-area">
            <?php dynamic_sidebar('footerarea1'); ?>
            </div>
        <?php endif; ?>
        
        <?php if (is_active_sidebar('footerarea2')) : ?>
            <div class="footer-widget-area">
            <?php dynamic_sidebar('footerarea2'); ?>
            </div>
        <?php endif; ?>
        
        <?php if (is_active_sidebar('footerarea3')) : ?>
            <div class="footer-widget-area">
            <?php dynamic_sidebar('footerarea3'); ?>
            </div>
        <?php endif; ?>
        
        <?php if (is_active_sidebar('footerarea4')) : ?>
            <div class="footer-widget-area">
            <?php dynamic_sidebar('footerarea4'); ?>
            </div>
        <?php endif; ?>
        
    </div><!--/footer-widgets-->
    
	<!--Navigation-Menu-->
		<nav class="site-nav">
			<?php
			
			$args=array(
				'theme_location' => 'footer'
			);
			?>
		<?php wp_nav_menu( $args ); ?>
		</nav>
		<!--/Navigation-Menu-->
		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</footer>
</div><!--/container-->

<?php wp_footer(); ?>

</body>
</html>