<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>


<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"  id="CBfooter">
                <div id="icons">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/includes/images/Icons_01.png"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/includes/images/Icons_02.png"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/includes/images/Icons_03.png"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/includes/images/Icons_04.png"></a>
                    
                </div>
                <h1>Privacy Policy © CodeBIG 2016</h1>
            </div>
        </div>
        
        
        

        

	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
