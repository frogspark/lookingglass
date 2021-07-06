<?php /* Template Name: Agent/Yacht Search */ ?>

<?php get_header(); ?>

  <?php get_template_part( 'navigation' ); ?>

  <section class="hero pb-12 pb-lg-16" data-aos="fade" style="background-image: url(<?php echo get_field('hero_image')['url']; ?>">
    <div class="container d-flex flex-column h-100 position-relative pt-lg-12" style="z-index: 3;">
      <div class="align-items-center d-flex flex-row h-100 pt-12 pt-lg-0 row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="justify-content-center justify-content-lg-start row">
            <div class="col-12 col-md-10 col-lg-11 col-xl-5 offset-xl-1 text-center text-lg-start text-quinary">
              <h1 class="mb-4 text-quinary"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-12 pb-lg-24 mt-lg-n12 pt-12 pt-lg-0">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 col-xl-10" data-aos="fade-up" data-aos-delay="50">
					<?php get_search($full = false, $type = 'agent_yacht'); ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'inc/_news' ); ?>

  <section class="my-2 my-lg-8"></section>

  <?php get_template_part( 'inc/_signup' ); ?>

  <section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>