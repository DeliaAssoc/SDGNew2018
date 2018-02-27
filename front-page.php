<?php
/**
 * The template for displaying front page.
 *
 * @package test theme
 */

get_header(); ?>
  <section id="home-slider">
    <?php
    echo do_shortcode("[metaslider id=29]");
    ?>
  </section>

  <section id="home-marketing">
    <div class="marketing-wrapper">

    <?php if ( have_rows( 'callouts', 'option' ) ) : ?>

      <?php while ( have_rows( 'callouts', 'option' ) ) : the_row(); ?>

      <div class="marketing-box">

        <div class="marketing-img">
          <?php $img = get_sub_field( 'callout_image', 'option' ); ?>
          <img src="<?php echo $img[ 'url' ]; ?>" alt="<?php echo $img[ 'alt' ]; ?>">
        </div>

        <div class="marketing-copy">
          <h2><?php the_sub_field( 'callout_title', 'option' ); ?></h2>
          <p><?php the_sub_field( 'callout_copy', 'option' ); ?></p>
          <a href="<?php the_sub_field( 'callout_link_url', 'option' ); ?>"><?php the_sub_field( 'callout_link_text', 'option' ); ?></a>
        </div>

      </div>

      <?php endwhile; ?>

    <?php endif; ?>

    </div>
  </section>

  <section id="home-page">

    <div class="home-call-to-action">
      <div class="constrain">
        <h2><?php the_field( 'home_cta_title' ); ?></h2>
        <?php the_field( 'home_cta_text' ); ?>
        <?php if ( get_field( 'home_cta_link' ) ) : ?>
          <a class="border-btn light-brdr" href="<?php the_field( 'home_cta_link' ); ?>"><?php the_field( 'home_cta_link_text' ); ?></a>
        <?php endif; ?>
      </div>
    </div>
    
  </section>

  <section id="services">
    <div id="services-img" class="services-col" style="background-image: url(<?php the_field( 'services_section_image' ); ?>);"></div>
    <div id="services-copy" class="services-col">
      <?php the_field( 'services_section_content' ); ?>
    </div>
  </section>

  <section id="home-logos">
    <div class="home-logos-wrapper">

      <?php if ( have_rows( 'affiliated_logos' ) ) : ?>

        <?php while ( have_rows( 'affiliated_logos' ) ) : the_row(); ?>

        <div class="home-logo">
          <?php $img = get_sub_field( 'logo' ); ?>
          <img src="<?php echo $img[ 'url' ]; ?>" alt="<?php echo $img[ 'alt' ]; ?>">
        </div>

        <?php endwhile; ?>

      <?php endif; ?>
      
    </div>
  </section>

  <section class="testimonial">
    <div class="testimonial-wrapper">
      <h2>How People Feel About SDG</h2>
      <?php
      echo do_shortcode("[metaslider id=33]");
      ?>
    </div>
  </section>
<?php get_footer(); ?>
