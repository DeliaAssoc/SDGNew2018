<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package heim
 */

?>

<?php
$socialArray = array( 
	get_theme_mod( 'sdgnew_social_facebook_link' ),
	get_theme_mod( 'sdgnew_social_twitter_link' ),
	get_theme_mod( 'sdgnew_social_gplus_link' ),
	get_theme_mod( 'sdgnew_social_linkedin_link' ),
	get_theme_mod( 'sdgnew_social_youtube_link' ),
	get_theme_mod( 'sdgnew_social_vimeo_link' ),
	get_theme_mod( 'sdgnew_social_pinterest_link' )
);

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div id="footer-contact" class="footer-col">
				<div id="footer-contact-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img id="logo" class="footer-logo" src="<?php bloginfo('template_directory'); ?>/img/sdg-logo-large.png" alt="logo">
					</a>
				</div>
				<div id="footer-location">
					<h1><a href="tel:<?php echo get_theme_mod( 'sdgnew_company_tollfree' ); ?>"><?php echo get_theme_mod( 'sdgnew_company_tollfree' ); ?></a></h1>
					<h4><?php echo get_theme_mod( 'sdgnew_company_street' ); ?>, <?php echo get_theme_mod( 'sdgnew_company_city' ); ?>, <?php echo get_theme_mod( 'sdgnew_company_state' ); ?> <?php echo get_theme_mod( 'sdgnew_company_zip' ); ?></h4>
				</div>
				<div class="social-icons">
					<ul>

						<?php if ( !empty( $socialArray ) ) : ?>
							<?php if ( get_theme_mod( 'sdgnew_social_facebook_link' ) ) : ?>
								<li><a class="facebook-icon" href="<?php echo esc_attr( get_theme_mod( 'sdgnew_social_facebook_link' ) ); ?>"><i class="fa fa-facebook"></i></a></li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'sdgnew_social_twitter_link' ) ) : ?>
								<li><a class="twitter-icon" href="<?php echo esc_attr( get_theme_mod( 'sdgnew_social_twitter_link' ) ); ?>"><i class="fa fa-twitter"></i></a></li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'sdgnew_social_gplus_link' ) ) : ?>
								<li><a class="gplus-icon" href="<?php echo esc_attr( get_theme_mod( 'sdgnew_social_gplus_link' ) ); ?>"><i class="fab fa-google"></i></a></li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'sdgnew_social_linkedin_link' ) ) : ?>
								<li><a class="linkedin-icon" href="<?php echo esc_attr( get_theme_mod( 'sdgnew_social_linkedin_link' ) ); ?>"><i class="fab fa-linkedin-in"></i></a></li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'sdgnew_social_youtube_link' ) ) : ?>
								<li><a class="youtube-icon" href="<?php echo esc_attr( get_theme_mod( 'sdgnew_social_youtube_link' ) ); ?>"><i class="fab fa-youtube"></i></a></li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'sdgnew_social_vimeo_link' ) ) : ?>
								<li><a class="vimeo-icon" href="<?php echo esc_attr( get_theme_mod( 'sdgnew_social_vimeo_link' ) ); ?>"><i class="fab fa-vimeo-v"></i></a></li>
							<?php endif; ?>
							<?php if ( get_theme_mod( 'sdgnew_social_pinterest_link' ) ) : ?>
								<li><a class="pinterest-icon" href="<?php echo esc_attr( get_theme_mod( 'sdgnew_social_pinterest_link' ) ); ?>"><i class="fab fa-pinterest-p"></i></a></li>
							<?php endif; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div id="footer-quick-links" class="footer-col">
				<h2>Quick LInks</h2>

				<?php wp_nav_menu( array( 'theme_location' => 'quick-links', 'menu_id' => 'quick-links' ) ); ?>

				<a style="display:block;margin-top:20px;" href="https://www.ul.com/">
					<img src="/wp-content/uploads/2017/12/ul-logo.png" alt="">
				</a>

			</div>
			<div id="footer-newsletter" class="footer-col">
				<h2>Subscribe to News</h2>
				<p>Subscribe to our news list and we will inform you about newest projects and promotions<span class="red">.</span></p>
				<div class="register-form">
					<?php echo do_shortcode( '[contact-form-7 id="191" title="Contact Email"]' ); ?>
				</div>
			</div>
		</div>
		<div id="copyright">
			<p class="copyright"><?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?>. All rights reserved.</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
