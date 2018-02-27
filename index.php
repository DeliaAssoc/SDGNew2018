<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package heim
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

			global $post;
			$parent_id = $post->post_parent;

			$banner = get_field('banner', get_option('page_for_posts'));

			?>

			<div id="banner-page" class="banner" style="background-image: url( <?php echo $banner['url']; ?> );">
				<div class="banner-wrapper <?php the_field( 'banner_overlay_color' ); ?>">
					<div class="banner-title">
						<h1>News</h1>
					</div>
				</div>
			</div>

			<section class="page">
				<div class="page-wrapper">
					<div class="posts-sidebar">
						<div class="posts-sidebar-nav">
						<!-- get parent page-->
						<?php
							$parent_title = get_the_title($post->post_parent);
							$parent_permalink = get_the_permalink($post->post_parent);
						?>
						<!-- display parent -->

						<?php if ( ! dynamic_sidebar('sidebar') ) : ?>

        		<?php endif; ?>
						</div>
					</div>

					<div class="page-content">

						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>


							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					</div>



				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
