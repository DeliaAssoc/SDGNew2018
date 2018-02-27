<?php
/*
Template Name: Services Template
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
					<div class="page-sidebar">
						<div class="sidebar-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'services', 'menu_id' => 'services-menu' ) ); ?>
						</div>
					</div>

	    		<?php while ( have_posts() ) : the_post(); ?>
						<div class="page-content">
							<?php the_content(); ?>
						</div>

	    		<?php endwhile; // End of the loop. ?>
	    		</div>
	    	</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
