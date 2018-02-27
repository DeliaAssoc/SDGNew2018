<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						the_post_navigation();

					endwhile; // End of the loop.
					?>
				</div>

			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
