<?php
/*
Template Name: Landing Page Template
*/
?>
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="banner-page" class="banner" style="background-image: url( <?php echo $banner['url']; ?> );">
				<div class="banner-wrapper <?php the_field( 'banner_overlay_color' ); ?>">
					<div class="banner-title">
						<h1><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</div>

            <section class="lp-section lp-intro-text <?php the_field('introduction_area_background_color'); ?>">
                <div class="constrain">

                    <div class="text-area">
                        <?php the_field('introduction_text_area'); ?>
                    </div><!-- .text-area -->
                    <aside class="intro-sidebar">
                        <div class="intro-form red-bg">
                            <div class="form-cta">
                                <div class="small-text">How Can We Help?</div>
                                <div class="large-text">Contact Us</div>
                            </div>
                            <?php the_field('introduction_sidebar_area'); ?>
                        </div><!-- .intro-form -->
                    </aside><!-- aside -->

                </div><!-- .constrain -->
            </section>
            <section class="lp-section lp-callouts <?php the_field('callout_area_background_color'); ?>">
                <div class="constrain">

                    <?php if ( get_field('callout_area_heading') ) : ?>
                        <h2 class="dark-text"><?php the_field( 'callout_area_heading' ); ?></h2>
                    <?php endif; ?>

                    <?php if ( have_rows( 'callouts' ) ) : ?>

                        <div class="flex-container callouts">

                        <?php while ( have_rows( 'callouts' ) ) : the_row(); ?>

                            <a href="<?php the_sub_field( 'callout_url' ); ?>" class="callout-block">
                                <?php $calloutImage = get_sub_field( 'callout_image' ); ?>
                                <img src="<?php echo $calloutImage[ 'url' ]; ?>" alt="<?php echo $calloutImage[ 'alt' ]; ?>">
                                <div class="callout-title"><?php the_sub_field( 'callout_title' ); ?></div>
                                <div class="callout-snippet"><?php the_sub_field( 'callout_snippet' ); ?></div>
                            </a>

                        <?php endwhile; ?>
                        
                        </div><!-- .flex-container .callouts -->

                    <?php endif; ?>

                    <?php if ( get_field( 'callout_area_button_text' ) ) : ?>
                        <a href="<?php the_field( 'callout_area_button_url' ); ?>" class="lp-cta-btn"><?php the_field( 'callout_area_button_text' ); ?></a>
                    <?php endif; ?>

                </div><!-- .constrain -->
            </section>
            <section class="lp-section lp-services-list">
                <div class="constrain">
                    <?php if ( get_field('services_area_heading') ) : ?>
                        <h2 class="dark-text"><?php the_field( 'services_area_heading' ); ?></h2>
                    <?php endif; ?>

                    <?php if ( have_rows( 'service' ) ) : ?>

                        <div class="flex-container services">

                        <?php while ( have_rows( 'service' ) ) : the_row(); ?>

                            <a href="<?php the_sub_field( 'service_url' ); ?>" class="service-block">
                                <?php $serviceImage = get_sub_field( 'service_image' ); ?>
                                <img src="<?php echo $serviceImage[ 'url' ]; ?>" alt="<?php echo $serviceImage[ 'alt' ]; ?>">
                                <div class="service-title"><?php the_sub_field( 'service_title' ); ?></div>
                            </a>

                        <?php endwhile; ?>

                        </div><!-- .flex-container .services -->

                        <?php endif; ?>

                    <?php if ( get_field( 'service_area_button_text' ) ) : ?>
                        <a href="<?php the_field( 'service_area_button_url' ); ?>" class="lp-cta-btn"><?php the_field( 'service_area_button_text' ); ?></a>
                    <?php endif; ?>

                </div><!-- .constrain -->
            </section>
            <section class="lp-section lp-cta-testimonial <?php the_field( 'testimonial_call_to_action_background_color' ); ?>">
                <div class="constrain">
                    <div class="testimonial-text">
                        <img src="http://sdgconnect.com/wp-content/uploads/2018/02/quote-start.png" alt=""><?php the_field( 'testimonial_text' ); ?><img src="http://sdgconnect.com/wp-content/uploads/2018/02/quote-end.png" alt="">
                        <span class="client-name">- <?php the_field( 'testimonial_client_name' ); ?></span>
                    </div>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
