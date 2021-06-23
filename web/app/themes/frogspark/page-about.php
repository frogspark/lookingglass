<?php /* Template Name: About */ ?>

<?php get_header(); ?>

  <?php get_template_part( 'navigation' ); ?>

  <section class="hero pb-12 pb-lg-24 slider" data-aos="fade">
    <div class="container d-flex flex-column h-100 position-relative" style="z-index: 3;">
      <div class="align-items-center d-flex flex-row h-100 pt-12 pt-lg-0 row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="justify-content-center justify-content-lg-start row">
            <div class="col-12 col-md-10 col-lg-11 col-xl-5 offset-xl-1">
              <h1 class="mb-4 text-center text-lg-start text-quinary"><?php the_field( 'hero_title' ); ?></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="d-none d-lg-flex justify-content-center justify-content-lg-start row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-7 offset-xl-1" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-hero">
						<?php while ( have_rows( 'hero_images' ) ): the_row(); ?>
              <div>
                <p class="fw-semibold mb-0 text-center text-lg-start text-quaternary text-uppercase"><?php the_sub_field( 'title' ); ?></p>
              </div>
						<?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-images">
			<?php while ( have_rows( 'hero_images' ) ): the_row(); ?>
        <div>
          <div style="background-image: url(<?php echo get_sub_field( 'image' )[ 'url' ]; ?>);"></div>
        </div>
			<?php endwhile; ?>
    </div>
  </section>

  <section class="pb-4 pb-lg-16 pt-12 pt-lg-24">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 col-xl-11">
          <div class="justify-content-center row">
            <div class="col-12 col-lg-6 col-xl-4 mb-lg-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
              <p class="h2 pr-xl-8"><?php the_field( 'introduction_title' ); ?></p>
            </div>
            <div class="col-12 col-lg-6 col-xl-5 mb-8 offset-xl-1 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
              <div class="wysiwyg"><?php the_field( 'introduction_text' ); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-quaternary pb-4 pb-lg-16 pt-12 pt-lg-24" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-items pb-10 pb-lg-0 pt-0 pt-lg-16 slick-overflow">
						<?php while ( have_rows( 'feature_items' ) ): the_row(); ?>
              <div class="px-4">
                <div class="position-relative row">
                  <div class="col-12 col-lg-6 col-xl-4 offset-lg-5 offset-xl-7 position-relative py-lg-24 text-center text-lg-start" style="z-index: 3;">
                    <div class="bg-landscape d-block d-lg-none" style="background-image: url(<?php echo get_sub_field( 'images' )[ 0 ][ 'image' ][ 'url' ]; ?>"></div>
                    <div class="bg-quinary px-4 px-sm-8 py-8">
                      <p class="h3"><?php the_sub_field( 'title' ); ?></p>
                      <p class="mb-0"><?php the_sub_field( 'text' ); ?></p>
                    </div>
                  </div>
                  <div class="item first" style="background-image: url(<?php echo get_sub_field( 'images' )[ 0 ][ 'image' ][ 'url' ]; ?>);"></div>
                  <div class="item last" style="background-image: url(<?php echo get_sub_field( 'images' )[ 1 ][ 'image' ][ 'url' ]; ?>);"></div>
                </div>
              </div>
						<?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-4 pb-lg-16 pt-12 pt-lg-24">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 col-xl-11">
          <div class="justify-content-center row">
            <div class="col-12 col-lg-6 col-xl-4 mb-lg-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
              <p class="h2 pr-xl-8"><?php the_field( 'page_title' ); ?></p>
            </div>
            <div class="col-12 col-lg-6 col-xl-5 mb-8 offset-xl-1 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
              <div class="wysiwyg"><?php the_field( 'page_text' ); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-4 pb-lg-12" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center justify-content-lg-start mb-lg-8 row">
        <div class="col-12 col-md-10 col-lg-6 col-xl-4 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
          <h3><?php the_field( 'team_title' ); ?></h3>
          <div class="wysiwyg"><?php the_field( 'team_text' ); ?></div>
        </div>
      </div>
      <div class="d-none d-lg-flex justify-content-center row">
				<?php while ( have_rows( 'team_members' ) ): the_row(); ?>
          <div class="col-lg-4 mb-12" data-aos="fade-up" data-aos-delay="50">
            <div class="bg-portrait mb-4" style="background-image: url(<?php echo get_sub_field( 'image' )[ 'url' ]; ?>"></div>
            <p class="h4 mb-2 text-primary"><?php the_sub_field( 'title' ); ?></p>
            <p class="fw-semibold mb-2 text-primary"><?php the_sub_field( 'subtitle' ); ?></p>
            <p class="mb-0 text-primary"><a class="btn-underline-primary" href="mailto:<?php the_sub_field( 'email_address' ); ?>"><?php the_sub_field( 'email_address' ); ?></a></p>
          </div>
				<?php endwhile; ?>
      </div>
      <div class="d-flex d-lg-none justify-content-center row">
        <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-team pb-12 slick-overflow">
						<?php while ( have_rows( 'team_members' ) ): the_row(); ?>
              <div class="px-4 text-center">
                <div class="bg-portrait mb-4" style="background-image: url(<?php echo get_sub_field( 'image' )[ 'url' ]; ?>"></div>
                <p class="h4 mb-2 text-primary"><?php the_sub_field( 'title' ); ?></p>
                <p class="fw-semibold mb-2 text-primary"><?php the_sub_field( 'subtitle' ); ?></p>
                <p class="mb-0 text-primary"><a class="btn-underline-primary" href="mailto:<?php the_sub_field( 'email_address' ); ?>"><?php the_sub_field( 'email_address' ); ?></a></p>
              </div>
						<?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-aos="fade">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 px-0">
          <div class="bg-cinematic" style="background-image: url(<?php echo get_field( 'banner_image' )[ 'url' ]; ?>"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-6 my-lg-12"></section>

  <?php get_template_part( 'inc/_news' ); ?>

  <section class="my-2 my-lg-8"></section>

  <?php get_template_part( 'inc/_signup' ); ?>

  <section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>