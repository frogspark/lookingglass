<?php get_header(); ?>

<?php get_template_part( 'navigation' ); ?>

  <section class="front hero pb-12 pb-lg-28 slider" data-aos="fade">
    <div class="container d-flex flex-column h-100 position-relative" style="z-index: 3;">
      <div class="align-items-center d-flex flex-row h-100 pt-12 pt-lg-0 row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="justify-content-center justify-content-lg-start row">
            <div class="col-12 col-md-10 col-lg-11 col-xl-7 offset-xl-1">
              <h1 class="mb-8 text-center text-lg-start text-quinary"><?php the_field( 'hero_title' ); ?></h1>
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

  <section class="bg-quinary pb-12 pb-lg-24 pt-12 pt-lg-0">

    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-8 col-xl-8 col-xxl-8 col-xxxl-10 mt-lg-n24" data-aos="fade-up" data-aos-delay="50" style="z-index: 2;">
          <div class="bg-quinary border border-quaternary px-4 px-sm-8 px-lg-12 py-12 position-relative">
            <div class="d-none d-lg-block display-ads vertical-left"><img src="https://via.placeholder.com/200x700" alt="placeholder ads"></div>
            <div class="d-none d-lg-block display-ads vertical-right"><img src="https://via.placeholder.com/200x700" alt="placeholder ads"></div>

            <div class="justify-content-center row">
              <div class="col-12 col-lg-8 col-xl-6 mb-8 text-center">
                <h2><?php the_field( 'featured_title' ); ?></h2>
                <div class="wysiwyg"><p class="mb-0"><?php the_field( 'featured_text' ); ?></p></div>
              </div>
            </div>
            <div class="justify-content-center row">
              <div class="col-12 mb-8">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
									<?php for ( $x = 1; $x <= 4; $x ++ ): ?>
                    <li class="nav-item" role="presentation">
                      <button
                          aria-controls="pills-<?php if ( $x === 1 ): echo 'sales'; elseif ( $x === 2 ): echo 'rentals'; elseif ( $x === 3 ): echo 'commercial'; else: echo 'yachts'; endif; ?>-tab"
                          aria-selected="true"
                          class="<?php if ( $x === 1 ): echo 'active'; endif; ?> nav-link pb-2 pb-lg-4 <?php if ( $x === 1 ): echo 'pe-sm-8 ps-sm-8 ps-lg-0'; else: echo 'px-sm-8'; endif; ?> pt-2 pt-lg-0 text-start text-sm-center text-lg-start"
                          data-bs-target="#pills-<?php if ( $x === 1 ): echo 'sales'; elseif ( $x === 2 ): echo 'rentals'; elseif ( $x === 3 ): echo 'commercial'; else: echo 'yachts'; endif; ?>"
                          data-bs-toggle="pill"
                          id="pills-<?php if ( $x === 1 ): echo 'sales'; elseif ( $x === 2 ): echo 'rentals'; elseif ( $x === 3 ): echo 'commercial'; else: echo 'yachts'; endif; ?>-tab"
                          role="tab"
                          type="button"><?php if ( $x === 1 ): echo 'Sales'; elseif ( $x === 2 ): echo 'Rentals'; elseif ( $x === 3 ): echo 'Commercial'; else: echo 'Yachts'; endif; ?></button>
                    </li>
									<?php endfor; ?>
                </ul>
              </div>
              <div class="col-12 px-0">
                <div class="tab-content" style="overflow: hidden;">
									<?php for ( $x = 1; $x <= 4; $x ++ ): ?>
                    <div
                        aria-labelledby="pills-<?php if ( $x === 1 ): echo 'sales'; elseif ( $x === 2 ): echo 'rentals'; elseif ( $x === 3 ): echo 'commercial'; else: echo 'yachts'; endif; ?>-tab"
                        class="tab-pane fade <?php if ( $x === 1 ): echo 'active show'; endif; ?>"
                        id="pills-<?php if ( $x === 1 ): echo 'sales'; elseif ( $x === 2 ): echo 'rentals'; elseif ( $x === 3 ): echo 'commercial'; else: echo 'yachts'; endif; ?>"
                        role="tabpanel">
                      <div class="carousel-featured mb-8 pb-10 pb-lg-0 px-n4 slick-overflow">
												<?php for ( $i = 1; $i <= 3; $i ++ ): ?>
                          <div class="px-4">
                            <div class="property">
                              <div class="gallery mb-4">
                                <div class="carousel-gallery">
																	<?php for ( $z = 1; $z <= 3; $z ++ ): ?>
                                    <div>
                                      <div class="bg-portrait"
                                          style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div>
                                    </div>
																	<?php endfor; ?>
                                </div>
                                <a class="heart" href="/"></a>
																<?php if ( $i === 2 ): echo '<span class="bg-secondary h5 note px-2 py-1 text-quinary">New listing</span>'; endif; ?>
                              </div>
                              <div class="row">
                                <div class="col-12 col-lg-6 mb-2 mb-lg-0 text-center text-lg-start">
                                  <p class="fw-semibold mb-1">3 bed apartment</p>
                                  <p class="mb-1">Kingston</p>
                                  <p class="mb-0">USD $575,000</p>
                                </div>
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-end">
                                  <p class="mb-0 text-center text-lg-end"><a class="btn-arrow-secondary" href="/">More details</a></p>
                                </div>
                              </div>
                            </div>
                          </div>
												<?php endfor; ?>
                      </div>
                      <p class="mb-0 mt-lg-16 pb-2 text-center"><a class="btn-secondary" href="/"><span>Show me more</span></a></p>
                    </div>
									<?php endfor; ?>
                </div>
              </div>
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
						<?php while ( have_rows( 'ctas' ) ): the_row(); ?>
              <div class="px-4">
                <div class="position-relative row">
                  <div class="col-12 col-lg-6 col-xl-4 offset-lg-5 offset-xl-7 position-relative py-lg-24 text-center text-lg-start" style="z-index: 3;">
                    <div class="bg-landscape d-block d-lg-none" style="background-image: url(<?php echo get_sub_field( 'images' )[ 0 ][ 'image' ][ 'url' ]; ?>"></div>
                    <div class="bg-quinary px-4 px-sm-8 py-8">
                      <p class="h3"><?php the_sub_field( 'title' ); ?></p>
                      <p class="mb-6"><?php the_sub_field( 'text' ); ?></p>
                      <p class="mb-0"><a class="btn-secondary" href="<?php echo get_sub_field( 'button' )[ 'url' ]; ?>" <?php if ( get_sub_field( 'button' )[ 'target' ] ): echo 'target="_blank"'; endif; ?>><span><?php echo get_sub_field( 'button' )[ 'title' ]; ?></span></a></p>
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

  <section class="my-6 my-lg-12"></section>

  <?php get_template_part('inc/_news'); ?>

  <section class="pt-4 pt-lg-18 pb-12 pb-lg-24">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="display-ads horizontal-ad"><img src="https://via.placeholder.com/1000x250" alt="placeholder ads"></div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('inc/_signup'); ?>

  <section class="my-2 my-lg-26"></section>

<?php get_footer(); ?>