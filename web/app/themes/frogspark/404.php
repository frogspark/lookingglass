<?php if (is_404()): ?>

  <?php get_header(); ?>
  
    <?php get_template_part('navigation'); ?>

    <section class="bg-quinary pb-4 pb-lg-16 pt-12 pt-lg-16">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
            <h1>404</h1>
            <div class="wysiwyg"><?php the_field('page_text', 'error_page'); ?></div>
          </div>
        </div>
      </div>
    </section>

  <?php get_footer(); ?>

<?php endif; ?>