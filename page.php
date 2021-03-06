<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zipbox
 */

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
					<div class="page-sidebar">
						<div class="sidebar-nav">
							<?php
							if(is_child(91)) {
							wp_nav_menu( array( 'theme_location' => 'residential', 'menu_id' => 'residential-menu' ) );
							}elseif(is_child(94)){
								wp_nav_menu( array( 'theme_location' => 'custom-partners', 'menu_id' => 'custom-partners-menu' ) );
							}elseif(is_child(97)){
								wp_nav_menu( array( 'theme_location' => 'commercial', 'menu_id' => 'commercial-menu' ) );
							}elseif(is_child(8)){
								wp_nav_menu( array( 'theme_location' => 'about', 'menu_id' => 'about-menu' ) );
							}
							?>
						</div>
					</div>

	    		<?php while ( have_posts() ) : the_post(); ?>
						<div class="page-content">
							<div class="featured-image">
								<?php
								if (has_post_thumbnail()) {
									the_post_thumbnail();
								}
								?>
							</div>
							<?php the_content(); ?>

							<?php if( have_rows('page_logos') ): ?>

							<section class="logo-banner">
								<ul class="logo-banner-logos">
									
									<?php while( have_rows('page_logos') ): the_row();
									// vars
									$logo = get_sub_field('logo');							
									?> 

									<li><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" /></li>

									<?php endwhile; ?>
								
								</ul>
							</section>

							<?php endif; ?>

						</div>

	    		<?php endwhile; // End of the loop. ?>
	    	</div>
	    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
