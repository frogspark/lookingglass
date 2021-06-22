<section>
  <div class="container">
    <div class="justify-content-center row">
      <div class="col-12 col-md-10 col-xl-11">
        <div class="justify-content-center row">
          <div class="col-12 col-lg-6 col-xl-5 mb-4 mb-lg-8 text-center text-lg-start">
            <p class="h2 mb-0 pr-xl-8"><?php the_field( 'signup_title', 'option' ); ?></p>
          </div>
          <div class="col-12 col-lg-6 col-xl-5 mb-8 offset-xl-1 text-center text-lg-start">
            <p class="h4"><?php the_field('signup_subtitle', 'option'); ?></p>
            <div class="mb-4 wysiwyg"><?php the_field('signup_text', 'option'); ?></div>
            <div class="signup"><?php echo do_shortcode(get_field('signup_form', 'option')); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>