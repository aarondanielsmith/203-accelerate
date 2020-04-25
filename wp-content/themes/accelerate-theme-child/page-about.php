<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
            <?php while ( have_posts() ) : the_post(); 
                $services_overview = get_field("services_overview");
                $service_1_title = get_field("service_title_1");
                $service_1_description = get_field("service_description_1");
                $service_1_image = get_field("service_image_1");
                $service_2_title = get_field("service_title_2");
                $service_2_description = get_field("service_description_2");
                $service_2_image = get_field("service_image_2");
                $service_3_title = get_field("service_title_3");
                $service_3_description = get_field("service_description_3");
                $service_3_image = get_field("service_image_3");
                $service_4_title = get_field("service_title_4");
                $service_4_description = get_field("service_description_4");
                $service_4_image = get_field("service_image_4");
                $size = "medium";
            ?>
            <div class="about-header">
    		    <?php the_content(); ?>
            </div>
        </div><!-- .main-content -->
    </div><!-- .primary -->

    <div class="about-page site-content">
        <div class="about-services-overview">
            <h4 class="services-title">Our Services</h4>
            <p><?php echo $services_overview; ?></p>
        </div>
        <div class="about-services">
            <article class="about-service about-service-1">
                <aside>
                    <h3><?php echo $service_1_title; ?></h3>
                    <p><?php echo $service_1_description; ?></p>
                </aside>
                <figure>
                    <?php if($service_1_image) {
                        echo wp_get_attachment_image( $service_1_image, $size);
                    } ?>
                </figure>
            </article>
            <article class="about-service about-service-2">
                <aside>
                    <h3><?php echo $service_2_title; ?></h3>
                    <p><?php echo $service_2_description; ?></p>
                </aside>
                <figure>
                    <?php if($service_2_image) {
                        echo wp_get_attachment_image( $service_2_image, $size);
                    } ?>
                </figure>
            </article>
            <article class="about-service about-service-3">
                <aside>
                    <h3><?php echo $service_3_title; ?></h3>
                    <p><?php echo $service_3_description; ?></p>
                </aside>
                <figure>
                    <?php if($service_3_image) {
                        echo wp_get_attachment_image( $service_3_image, $size);
                    } ?>
                </figure>
            </article>
            <article class="about-service about-service-4">
                <aside>
                    <h3><?php echo $service_4_title; ?></h3>
                    <p><?php echo $service_4_description; ?></p>
                </aside>
                <figure>
                    <?php if($service_4_image) {
                        echo wp_get_attachment_image( $service_4_image, $size);
                    } ?>
                </figure>
            </article>
        </div>
        <section class="contact">
            <h3>Interested in working with us?</h3>
            <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
        </section>
        <?php endwhile; // end of the loop. ?>
    </div><!-- .site-content -->

<?php get_footer(); ?>
