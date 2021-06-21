<?php wp_footer(); ?>

<section class="bg-quaternary" data-aos="fade">
  <div class="container">
    <div class="justify-content-center row">
      <div class="col-12 col-md-10 col-lg-4">
        <div class="bg-landscape" style="background-image: url(/app/uploads/2021/06/placeholder.jpg); min-height: 100%;"></div>
      </div>
      <div class="col-12 col-md-10 col-lg-8 pb-4 pb-lg-16 pt-12 pt-lg-24">
        <div class="row">
          <div class="col-12 col-lg-12 col-xl-5 mb-8 text-center text-lg-start">
            <p class="h3">Contact us</p>
            <p class="mb-2">T: <a class="btn-underline-primary" href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
            <p class="<?php if (have_rows('social_media', 'option')): echo 'mb-4'; else: echo 'mb-0'; endif; ?>">E: <a class="btn-underline-primary" href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></p>
            <?php if (have_rows('social_media', 'option')): ?>
              <ul class="d-flex flex-row justify-content-center justify-content-lg-start list-unstyled">
                <?php while (have_rows('social_media', 'option')): the_row(); ?>
                  <li class="me-2 me-lg-4 ms-2 ms-lg-0"><a class="text-primary" href="<?php the_sub_field('url'); ?>" target="_blank"><i class="fab fa-<?php the_sub_field('platform'); ?>"></i></a></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
          <div class="col-12 col-lg-12 col-xl-7 mb-8 text-center text-lg-start">
            <ul class="list-unstyled mb-0">
              <div class="row">
                <?php $menu = wp_get_nav_menu_items('Secondary menu'); ?>
                <?php foreach ($menu as $item): ?>
                  <div class="col-12 col-md-6 mb-2">
                    <li><a class="btn-underline-primary" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                  </div>
                <?php endforeach; ?>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="bg-quinary">
  <div class="container">
    <div class="row">
      <div class="col-12 py-6 text-center text-lg-start">
        <p class="mb-0">© Copyright <?php echo get_bloginfo('name'); ?>. <span class="d-block d-lg-inline-block">All rights reserved <?php echo date('Y'); ?></span></p>
      </div>
    </div>
  </div>
</footer>

</body>
</html>