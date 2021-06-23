<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>

  <section class="bg-quinary pb-4 pb-lg-16 pt-12">
    <div class="container">
      <div class="d-none d-lg-flex justify-content-center mb-8 row">
        <div class="col-lg-11 col-xl-10 mb-8" data-aos="fade-up" data-aos-delay="50">
          <p class="mb-0"><a class="btn-back" href="/news/">Back to news</a></p>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-10 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
          <h1 class="h2 mb-lg-6 text-secondary"><?php the_title(); ?></h1>
          <p class="h5 mb-0"><?php echo date( 'd.m.Y', strtotime( $post->post_date ) ); ?></p>
        </div>
      </div>
      <div class="justify-content-center mb-lg-8 row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-10 mb-8" data-aos="fade-up" data-aos-delay="50">
          <div class="bg-cinematic" style="background-image: url(<?php echo get_field('page_image')['url']; ?>);"></div>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-8 mb-8" data-aos="fade-up" data-aos-delay="50">
          <div class="wysiwyg"><?php the_field('page_text'); ?></div>
        </div>
      </div>
      <div class="d-flex d-lg-none justify-content-center row">
        <div class="col-12 col-md-10 mb-8" data-aos="fade-up" data-aos-delay="50">
          <p class="mb-0 text-center"><a class="btn-back" href="/news/">Back to news</a></p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('inc/_news'); ?>

  <section class="my-2 my-lg-8"></section>

  <?php get_template_part( 'inc/_signup' ); ?>

  <section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>