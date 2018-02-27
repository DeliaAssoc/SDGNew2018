<?php
/*
Template Name: Contact Template
*/
?>
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

			global $post;
			$parent_id = $post->post_parent;

			$banner = get_field('banner', $parent_id);

			?>

			<div id="banner-page" class="banner" style="background-image: url( <?php echo $banner['url']; ?> );">
				<div class="banner-wrapper <?php the_field( 'banner_overlay_color' ); ?>">
					<div class="banner-title">
						<h1><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</div>

			<section class="page">
				<div class="page-wrapper">


	    		<?php while ( have_posts() ) : the_post(); ?>
						<div id="contact-map" class="contact-col">

							<?php the_content(); ?>

							<div class="map-responsive"><?php echo get_theme_mod( 'sdgnew_company_gmap' ); ?></div>

							<div class="company-information">
								<div class="info-line"><strong><?php echo get_theme_mod( 'sdgnew_company_name' ); ?></strong></div>
								<div class="info-line"><?php echo get_theme_mod( 'sdgnew_company_street' ); ?></div>
								<div class="info-line"><?php echo get_theme_mod( 'sdgnew_company_city' ); ?>, <?php echo get_theme_mod( 'sdgnew_company_state' ); ?> <?php echo get_theme_mod( 'sdgnew_company_zip' ); ?></div>
							</div>

							<div class="company-contact">
								<div class="contact-line">Phone: <a href="tel:<?php echo get_theme_mod( 'sdgnew_company_tollfree' ); ?>"><?php echo get_theme_mod( 'sdgnew_company_tollfree' ); ?></a></div>
								<?php if ( get_theme_mod( 'sdgnew_company_fax' ) ) : ?>
									<div class="contact-line">Fax: <?php echo get_theme_mod( 'sdgnew_company_fax' ); ?></div>
								<?php endif; ?>
							</div>

						</div>
						<div id="contact-form" class="contact-col">
							<?php echo do_shortcode( '[contact-form-7 id="129" title="Contact Page"]' ); ?>
						</div>


	    		<?php endwhile; // End of the loop. ?>
	    	</div>
	    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
