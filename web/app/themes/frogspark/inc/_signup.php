<section>
  <div class="container">
    <div class="justify-content-center row">
      <div class="col-12 col-md-10 col-lg-12 col-xl-11">
        <div class="justify-content-center row">

          <?php if (is_page( 2 )) : ?>

            <div class="col-lg-6 col-xl-4 d-none d-lg-block mb-lg-8 text-lg-start" data-aos="fade-up" data-aos-delay="50">
              <p class="h2 mb-0 pr-xl-8 mb-8"><?php the_field( 'signup_title', 'option' ); ?></p>
              <div class="display-ads horizontal-ad"><img src="https://via.placeholder.com/1000x250" alt="placeholder ads"></div>
            </div>

            <div class="col-12 col-lg-6 col-xl-5 mb-8 offset-xl-1 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
              <p class="d-block d-lg-none h2 mb-4 pr-xl-8"><?php the_field( 'signup_title', 'option' ); ?></p>
              <p class="h4"><?php the_field('signup_subtitle', 'option'); ?></p>
              <div class="mb-4 wysiwyg"><?php the_field('signup_text', 'option'); ?></div>
              <div class="signup mb-4"><?php echo do_shortcode(get_field('signup_form', 'option')); ?></div>
              <div class="display-ads horizontal-ad sign-up-ad d-block d-lg-none"><img src="https://via.placeholder.com/1000x250" alt="placeholder ads"></div>
            </div>

          <?php else: ?>
            
            <div class="col-lg-6 col-xl-4 d-none d-lg-block mb-lg-8 text-lg-start" data-aos="fade-up" data-aos-delay="50">
              <p class="h2 mb-0 pr-xl-8"><?php the_field( 'signup_title', 'option' ); ?></p>
            </div>
            
            <div class="col-12 col-lg-6 col-xl-5 mb-8 offset-xl-1 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
              <p class="d-block d-lg-none h2 mb-4 pr-xl-8"><?php the_field( 'signup_title', 'option' ); ?></p>
              <p class="h4"><?php the_field('signup_subtitle', 'option'); ?></p>
              <div class="mb-4 wysiwyg"><?php the_field('signup_text', 'option'); ?></div>
              <div class="signup"><?php echo do_shortcode(get_field('signup_form', 'option')); ?></div>
            </div>
              
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>    