<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>

  <section class="front hero slider">
    <div class="container d-flex flex-column h-100 position-relative" style="z-index: 3;">
      <div class="align-items-center d-flex flex-row h-100 pt-12 pt-lg-0 row">
        <div class="col-12">
          <div class="justify-content-center justify-content-lg-start row">
            <div class="col-12 col-md-10 col-lg-11 col-xl-7 offset-xl-1">
              <h1 class="mb-8 text-center text-lg-start text-quinary"><?php the_field('hero_title'); ?></h1>
            </div>
            <div class="col-12 col-md-10 col-lg-12 col-xl-10 d-none d-lg-block offset-xl-1">
              <?php get_search(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="d-none d-lg-flex justify-content-center justify-content-lg-start row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-7 offset-xl-1">
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

<?php get_footer(); ?>