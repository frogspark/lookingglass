<?php get_header(); ?>

	<?php get_template_part( 'navigation' ); ?>

  <section class="bg-quaternary pb-4 pb-lg-16 pt-12 pt-lg-24">
    <div class="container">
      <div class="justify-content-center justify-content-lg-start justify-content-xl-center row">
        <div class="col-12 col-md-10 col-lg-12 col-xl-10">
          <div class="justify-content-center row">
            <div class="col-12 col-lg-8 col-xl-7 order-lg-1" data-aos="fade-up" data-aos-delay="50">
              <h1 class="h2 mb-4 text-center text-lg-start text-secondary"><?php the_title(); ?></h1>
              <div class="row">
                <div class="col-12 col-lg-6 mb-6 text-center text-lg-start">
                  <h2 class="h3 mb-2 text-primary">Address</h2>
                  <?php $address = get_field('location')['address']; $address = explode(',', $address); ?>
                  <?php foreach ($address as $item): ?>
                    <p class="mb-2"><?php echo $item; ?>,</p>
                  <?php endforeach; ?>
                </div>
                <div class="col-12 col-lg-6 mb-6 text-center text-lg-start">
                  <h2 class="h3 mb-2 text-primary">Contact</h2>
                  <p class="mb-2"><a class="btn-underline-primary" href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></p>
                  <p class="mb-4 mb-lg-6"><a class="btn-underline-primary" href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></p>
                  <p class="mb-2"><a class="btn-underline-secondary" href="<?php the_field('url'); ?>">Visit website</a></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3 mb-8 offset-xl-2 order-lg-2" data-aos="fade-up" data-aos-delay="50">
              <div class="bg-square" style="background-image: url(<?php echo get_field('image')['url']; ?>);"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-quinary pb-4 pb-lg-12 pt-12 pt-lg-16" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center justify-content-lg-start mb-lg-8 row">
        <div class="col-12 col-md-10 col-lg-6 col-xl-4 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
          <h3><?php the_field('agents_title'); ?></h3>
          <div class="wysiwyg"><?php the_field('agents_text'); ?></div>
        </div>
      </div>
      <div class="d-none d-lg-flex row">
        <?php while (have_rows('agents')): the_row(); ?>
          <div class="col-12 col-lg-6 col-xl-4 mb-12" data-aos="fade-up" data-aos-delay="50">
            <div class="bg-portrait mb-4" style="background-image: url(<?php echo get_sub_field('image')['url']; ?>);"></div>
            <p class="h4 mb-2 mb-lg-4 text-primary"><?php the_sub_field('title'); ?></p>
            <ul class="list-agent list-unstyled mb-6">
              <li class="mb-2 phone"><a class="btn-underline-primary fw-semibold" href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></li>
              <li class="mail mb-2"><a class="btn-underline-primary" href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_address'); ?></a></li>
              <li class="address mb-2"><?php echo str_replace(',', ', <br>', get_field('location')['address']); ?></li>
            </ul>
            <div class="map" style="padding-bottom: 100%; width: 100%;"><div class="marker" data-icon="<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/marker.svg" data-lat="<?php echo get_sub_field('location')['lat']; ?>" data-lng="<?php echo get_sub_field('location')['lng']; ?>"></div></div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="d-flex d-lg-none justify-content-center row">
        <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-agents pb-10 slick-overflow">
            <?php while (have_rows('agents')): the_row(); ?>
              <div class="px-4 text-center">
                <div class="bg-portrait mb-4" style="background-image: url(<?php echo get_sub_field('image')['url']; ?>);"></div>
                <p class="h4 mb-2 mb-lg-4 text-primary"><?php the_sub_field('title'); ?></p>
                <ul class="list-agent list-unstyled mb-2">
                  <li class="mb-2 phone"><a class="btn-underline-primary fw-semibold" href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></li>
                  <li class="mail mb-2"><a class="btn-underline-primary" href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_address'); ?></a></li>
                  <li class="address mb-0"><?php echo str_replace(',', ', <br>', get_field('location')['address']); ?></li>
                </ul>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $query = array ( 'post_type' => 'post', 'posts_per_page' => -1, 'meta_query' => array( array('key' => 'agent', 'value' => $post->ID, 'compare' => '=') ) ); ?>
  <?php $posts = new WP_Query( $query ); ?>
  <?php if ($posts->post_count > 0): ?>
    <section class="bg-quinary mb-4 mb-lg-16" style="overflow: hidden;">
      <div class="container">
        <div class="justify-content-center justify-content-lg-start mb-lg-8 row">
          <div class="col-12 col-md-10 col-lg-6 col-xl-4 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
            <h3>Blog posts for <?php the_title(); ?></h3>
            <div class="wysiwyg"><?php the_field( 'news_text' ); ?></div>
          </div>
        </div>
        <div class="justify-content-center row">
          <div class="col-12 col-md-10 col-lg-12 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
            <div class="carousel-news pb-10 pb-lg-14 slick-overflow">
							<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <div class="px-4">
                  <a class="d-block text-center text-lg-start" href="<?php the_permalink(); ?>">
                    <div class="bg-wrapper mb-4">
                      <div class="bg-portrait" style="background-image: url(<?php echo get_field( 'page_image' )[ 'url' ]; ?>);"></div>
                    </div>
                    <p class="h4 mb-2 text-primary"><?php the_title(); ?></p>
                    <p class="fw-semibold mb-2 text-primary"><?php echo date( 'd.m.Y', strtotime( $post->post_date ) ); ?></p>
                    <p class="mb-2 text-primary"><?php the_field( 'page_snippet' ); ?></p>
                    <p class="mb-0"><span class="btn-arrow-secondary">Read more</span></p>
                  </a>
                </div>
							<?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="bg-quinary">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 col-xl-10 mb-8">
          <div class="border border-quaternary px-4 px-sm-8 py-8" style="overflow: hidden;">
            <div class="justify-content-center row">
              <div class="col-12 col-lg-6 mb-8 text-center">
                <h3><?php the_title(); ?> listings</h3>
                <div class="wysiwyg"><?php the_field( 'news_text' ); ?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 px-0">
                <div class="carousel-featured mb-8 pb-10 pb-lg-14 px-n4 slick-overflow">
									<?php for ( $i = 1; $i <= 6; $i ++ ): ?>
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
                <p class="mb-0 pb-2 text-center"><a class="btn-secondary" href="/"><span>Show me more</span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('inc/_map-script'); ?>

	<section class="my-2 my-lg-8"></section>

	<?php get_template_part( 'inc/_signup' ); ?>

	<section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>