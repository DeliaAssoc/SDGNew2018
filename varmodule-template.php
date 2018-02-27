<?php
/*
Template Name: Module Template
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

			<section class="page varmodule">
                <div class="constrain">
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

            <?php if ( have_rows( 'module_layout' ) ) : ?>

                <?php while ( have_rows( 'module_layout' ) ) : the_row(); ?>

                    <?php if ( get_row_layout() == 'full_width' ) : ?> <!-- Full Width -->

                        <section class="full varmodule <?php the_sub_field( 'background_color' ); ?>">
                            <div class="constrain">
                                <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                    <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                <?php endif; ?>

                                <div class="content-block">
                                    <?php the_sub_field( 'module_content' ); ?>
                                </div>

                                <?php if ( get_sub_field( 'ending_content' ) ) : ?>
                                    <div class="ending-content">
                                        <?php the_sub_field( 'ending_content' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </section>

                    <?php elseif ( get_row_layout() == 'one_third_and_two_thirds' ) : ?>    <!-- One Third and Two Thirds -->

                        <section class="one-and-two varmodule <?php the_sub_field( 'background_color' ); ?>">
                            <div class="constrain">
                                <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                    <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                <?php endif; ?>

                                <?php if ( get_sub_field( 'opening_content' ) ) : ?>
                                    <div class="opening-content">
                                        <?php the_sub_field( 'ending_content' ); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="flex-wrapper">
                                    <div class="left-content">
                                        <?php the_sub_field( 'left_content' ); ?>
                                    </div>

                                    <div class="right-content">
                                        <?php the_sub_field( 'right_content' ); ?>
                                    </div>
                                </div><!-- .flex-wrapper -->

                                <?php if ( get_sub_field( 'ending_content' ) ) : ?>
                                    <div class="ending-content">
                                        <?php the_sub_field( 'ending_content' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </section>

                    <?php elseif ( get_row_layout() == 'half_and_half' ) : ?>   <!-- Half and Half -->

                        <section class="half-half varmodule <?php the_sub_field( 'background_color' ); ?>">
                            <div class="constrain">
                                <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                    <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                <?php endif; ?>

                                <?php if ( get_sub_field( 'opening_content' ) ) : ?>
                                    <div class="opening-content">
                                        <?php the_sub_field( 'opening_content' ); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="flex-wrapper">
                                    <div class="left-content">
                                        <?php the_sub_field( 'left_content' ); ?>
                                    </div>

                                    <div class="right-content">
                                        <?php the_sub_field( 'right_content' ); ?>
                                    </div>
                                </div><!-- .flex-wrapper -->

                                <?php if ( get_sub_field( 'ending_content' ) ) : ?>
                                    <div class="ending-content">
                                        <?php the_sub_field( 'ending_content' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </section>

                    <?php elseif ( get_row_layout() == 'two_thirds_and_one_third' ) : ?>    <!-- Two Thirds and One Third -->

                        <section class="two-and-one varmodule <?php the_sub_field( 'background_color' ); ?>">
                            <div class="constrain">
                                <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                    <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                <?php endif; ?>

                                <?php if ( get_sub_field( 'opening_content' ) ) : ?>
                                    <div class="opening-content">
                                        <?php the_sub_field( 'opening_content' ); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="flex-wrapper">
                                    <div class="left-content">
                                        <?php the_sub_field( 'left_content' ); ?>
                                    </div>

                                    <div class="right-content">
                                        <?php the_sub_field( 'right_content' ); ?>
                                    </div>
                                </div><!-- .flex-wrapper -->

                                <?php if ( get_sub_field( 'ending_content' ) ) : ?>
                                    <div class="ending-content">
                                        <?php the_sub_field( 'ending_content' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </section>

                    <?php elseif ( get_row_layout() == 'three_column' ) : ?>    <!-- Three Columns -->

                        <section class="three-col varmodule <?php the_sub_field( 'background_color' ); ?>">
                            <div class="constrain">
                                <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                    <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                <?php endif; ?>

                                <?php if ( get_sub_field( 'opening_content' ) ) : ?>
                                    <div class="opening-content">
                                        <?php the_sub_field( 'opening_content' ); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="flex-wrapper">
                                    <div class="onethird-column left-content">
                                        <?php the_sub_field( 'column_one_content' ); ?>
                                    </div>

                                    <div class="onethird-column middle-content">
                                        <?php the_sub_field( 'column_two_content' ); ?>
                                    </div>

                                    <div class="onethird-column right-content">
                                        <?php the_sub_field( 'column_three_content' ); ?>
                                    </div>
                                </div><!-- .flex-wrapper -->

                                <?php if ( get_sub_field( 'ending_content' ) ) : ?>
                                    <div class="ending-content">
                                        <?php the_sub_field( 'ending_content' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </section>

                        <?php elseif ( get_row_layout() == 'four_column' ) : ?>    <!-- Three Columns -->

                        <section class="four-col varmodule <?php the_sub_field( 'background_color' ); ?>">
                            <div class="constrain">
                                <?php if ( get_sub_field( 'module_title' ) ) : ?>
                                    <h2><?php the_sub_field( 'module_title' ); ?></h2>
                                <?php endif; ?>

                                <?php if ( get_sub_field( 'opening_content' ) ) : ?>
                                    <div class="opening-content">
                                        <?php the_sub_field( 'opening_content' ); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="flex-wrapper">
                                    <div class="onefourth-column first-column">
                                        <?php the_sub_field( 'column_one_content' ); ?>
                                    </div>

                                    <div class="onefourth-column second-column">
                                        <?php the_sub_field( 'column_two_content' ); ?>
                                    </div>

                                    <div class="onefourth-column third-column">
                                        <?php the_sub_field( 'column_three_content' ); ?>
                                    </div>

                                    <div class="onefourth-column fourth-column">
                                        <?php the_sub_field( 'column_four_content' ); ?>
                                    </div>
                                </div><!-- .flex-wrapper -->

                                <?php if ( get_sub_field( 'ending_content' ) ) : ?>
                                    <div class="ending-content">
                                        <?php the_sub_field( 'ending_content' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </section>

                    <?php endif; ?>

                <?php endwhile; ?>

            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
