<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>

  <section class="bg-quinary pb-4 pb-lg-16 pt-12">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
          <h1 class="mb-0 text-secondary"><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
          <div class="position-relative">
            <div class="map">
              <div class="marker" data-icon="<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/marker.svg" data-lat="<?php echo get_field('location', 'option')['lat']; ?>" data-lng="<?php echo get_field('location', 'option')['lng']; ?>"></div>
            </div>
            <div class="bg-secondary d-none d-lg-inline-block p-8 position-absolute" style="bottom: 0; width: 384px; right: 0;">
              <p class="h4"><?php echo get_field('location', 'option')['address']; ?></p>
              <p class="mb-0"><a class="btn-underline-primary h4" href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex d-lg-none justify-content-center row">
        <div class="col-12 col-md-10 mb-8 text-center" data-aos="fade-up" data-aos-delay="50">
          <p><?php echo get_field('location', 'option')['address']; ?></p>
          <p class="mb-0"><a class="btn-underline-primary" href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('inc/_map-script'); ?>

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