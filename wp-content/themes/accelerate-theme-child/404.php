<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content error-404">
		<div class="main-content" role="main">
            <h2>404 :(</h2>
            <div class="image">
            </div>
            <p>
                Sorry, it seems the page you're looking for is either missing or has been taken.
            </p>
            <p>While Liam Neeson works on that, why not <a href="<?php echo site_url('/case-studies/'); ?>">check out some of our work</a> or <a href="<?php echo site_url('/about/'); ?>">learn more about our company?</a></p>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
