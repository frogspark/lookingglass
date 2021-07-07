<?php get_header(); ?>

	<?php get_template_part( 'navigation' ); ?>

  <section class="bg-quaternary pb-4 pb-lg-16 pt-12 pt-lg-24">
    <div class="container">
      <div class="justify-content-center justify-content-lg-start justify-content-xl-center row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-10">
          <div class="justify-content-center justify-content-lg-start row">
            <div class="col-12 col-lg-9 mb-8" data-aos="fade-up" data-aos-delay="50">
              <h1 class="mb-4 text-center text-lg-start text-secondary"><?php the_title(); ?></h1>
            </div>
            <div class="col-12 col-lg-3 mb-8" data-aos="fade-up" data-aos-delay="50">
              <div class="bg-square" style="background-image: url(<?php echo get_field('image')['url']; ?>);"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

	<section class="my-2 my-lg-8"></section>

	<?php get_template_part( 'inc/_signup' ); ?>

	<section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>