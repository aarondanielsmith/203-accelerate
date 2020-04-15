<?php
/**
 * The template for displaying the case study archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
                $services = get_field('services');
				$image_1 = get_field('image_1');
                $size = "full";	?>
				<article class="case-study clearfix">
                    <a href="<?php the_permalink(); ?>">
                        <aside class="case-study-sidebar">
                            <h2><?php the_title(); ?></h2>
                            <h4><?php echo $services; ?></h4>
                            <p class="case-study-description"><?php the_excerpt(); ?></p>
                            <p class="read-more-link">View Project &rsaquo;</p>
                        </aside>
                        <div class="case-study-main">
                            <?php if($image_1) {
                                echo wp_get_attachment_image( $image_1, $size );
                            } ?>
                        </div>
                    </a>
				</article>                
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>