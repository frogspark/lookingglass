<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>

  <section class="front hero pb-12 pb-lg-28 slider" data-aos="fade">
    <div class="container d-flex flex-column h-100 position-relative" style="z-index: 3;">
      <div class="align-items-center d-flex flex-row h-100 pt-12 pt-lg-0 row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="justify-content-center justify-content-lg-start row">
            <div class="col-12 col-md-10 col-lg-11 col-xl-7 offset-xl-1">
              <h1 class="mb-8 text-center text-lg-start text-quinary"><?php the_field('hero_title'); ?></h1>
            </div>
            <div class="col-12 col-md-10 col-lg-12 col-xl-10 offset-xl-1">
              <?php get_search(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="d-none d-lg-flex justify-content-center justify-content-lg-start row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-7 offset-xl-1" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-hero">
            <?php while (have_rows('hero_images')): the_row(); ?>
              <div><p class="fw-semibold mb-0 text-center text-lg-start text-quaternary text-uppercase"><?php the_sub_field('title'); ?></p></div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-images">
      <?php while (have_rows('hero_images')): the_row(); ?>
        <div><div style="background-image: url(<?php echo get_sub_field('image')['url']; ?>);"></div></div>
      <?php endwhile; ?>
    </div>
  </section>

  <section class="bg-quinary pb-12 pb-lg-24 pt-12 pt-lg-0">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 col-xl-10 mt-lg-n24" data-aos="fade-up" data-aos-delay="50" style="z-index: 2;">
          <div class="bg-quinary border border-quaternary px-4 px-lg-12 py-12">
            <div class="justify-content-center row">
              <div class="col-12 col-md-10 col-lg-8 col-xl-6 mb-8 text-center">
                <h2><?php the_field('featured_title'); ?></h2>
                <div class="wysiwyg"><p class="mb-0"><?php the_field('featured_text'); ?></p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>