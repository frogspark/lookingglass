<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>

  <section class="bg-quinary pb-4 pb-lg-16 pt-12">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
          <h1><?php the_title(); ?></h1>
          <div class="wysiwyg"><?php the_field('page_text'); ?></div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>