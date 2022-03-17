<?php /* Template Name: Advertise */ ?>

<?php get_header(); ?>

	<?php get_template_part( 'navigation' ); ?>

  <section class="hero pb-12 pb-lg-16" data-aos="fade" style="background-image: url(<?php echo get_field('hero_image')['url']; ?>">
    <div class="container d-flex flex-column h-100 position-relative pt-lg-12" style="z-index: 3;">
      <div class="align-items-center d-flex flex-row h-100 pt-12 pt-lg-0 row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="justify-content-center justify-content-lg-start row">
            <div class="col-12 col-md-10 col-lg-11 col-xl-7 offset-xl-1 text-center text-lg-start text-quinary">
              <h1 class="mb-4 text-quinary"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-quinary pb-4 pb-lg-16 pt-12 pt-lg-24" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-items pb-10 pb-lg-0 pt-0 pt-lg-16 slick-overflow">
						<?php while ( have_rows( 'feature_items' ) ): the_row(); ?>
              <div class="px-4">
                <div class="position-relative row">
                  <div class="col-12 col-lg-6 col-xl-4 offset-lg-5 offset-xl-7 position-relative py-lg-24 text-center text-lg-start" style="z-index: 3;">
                    <div class="bg-landscape d-block d-lg-none" style="background-image: url(<?php echo get_sub_field( 'images' )[ 0 ][ 'image' ][ 'url' ]; ?>"></div>
                    <div class="bg-quinary pb-4 pt-8 px-4 px-sm-8">
                      <p class="h3"><?php the_sub_field( 'title' ); ?></p>
                      <p class="mb-0"><?php the_sub_field( 'text' ); ?></p>
                    </div>
                  </div>
                  <div class="item first" style="background-image: url(<?php echo get_sub_field( 'images' )[ 0 ][ 'image' ][ 'url' ]; ?>);"></div>
                  <div class="item last" style="background-image: url(<?php echo get_sub_field( 'images' )[ 1 ][ 'image' ][ 'url' ]; ?>);"></div>
                </div>
              </div>
						<?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-12 pb-lg-24">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="display-ads horizontal-ad"><img src="https://via.placeholder.com/1000x250" alt="placeholder ads"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-quinary pb-4 pb-lg-16">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mb-8 text-center" data-aos="fade-up" data-aos-delay="50">
          <h2 class="h3 mb-0"><?php the_field('form_title'); ?></h2>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mb-8" data-aos="fade-up" data-aos-delay="50">
          <div class="form"><?php echo do_shortcode(get_field('form_shortcode')); ?></div>
        </div>
      </div>
    </div>
  </section>

	<?php get_template_part('inc/_news'); ?>

	<section class="my-2 my-lg-8"></section>

	<?php get_template_part( 'inc/_signup' ); ?>

	<section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>