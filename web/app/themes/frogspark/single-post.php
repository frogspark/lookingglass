<?php get_header(); ?>

  <?php get_template_part('navigation'); ?>

  <section class="bg-quinary pb-4 pb-lg-16 pt-12">
    <div class="container">
      <div class="d-none d-lg-flex justify-content-center mb-8 row">
        <div class="col-lg-11 col-xl-10 mb-8" data-aos="fade-up" data-aos-delay="50">
          <p class="mb-0"><a class="btn-back" href="/news/">Back to news</a></p>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-10" data-aos="fade-up" data-aos-delay="50">
          <div class="row">
            <div class="col-12 col-lg-9 mb-4 mb-lg-8 text-center text-lg-start">
              <h1 class="h2 mb-lg-6 text-secondary"><?php the_title(); ?></h1>
              <p class="h5 mb-0"><?php echo date( 'd.m.Y', strtotime( $post->post_date ) ); ?></p>
            </div>
            <div class="col-12 col-lg-3 d-flex flex-row justify-content-center justify-content-lg-end mb-8">
							<div class="social"><?php echo do_shortcode('[addtoany]'); ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="justify-content-center mb-lg-8 row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-10 mb-8" data-aos="fade-up" data-aos-delay="50">
          <div class="bg-cinematic" style="background-image: url(<?php echo get_field('page_image')['url']; ?>);"></div>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-11 col-xl-8 mb-8" data-aos="fade-up" data-aos-delay="50">
          <div class="wysiwyg"><?php the_field('page_text'); ?></div>
        </div>
      </div>
      <div class="d-flex d-lg-none justify-content-center row">
        <div class="col-12 col-md-10 mb-8" data-aos="fade-up" data-aos-delay="50">
          <p class="mb-0 text-center"><a class="btn-back" href="/news/">Back to news</a></p>
        </div>
      </div>
    </div>
  </section>

  <?php $url = explode('/', $_SERVER['REQUEST_URI'])[1]; $news = get_page_by_path($url); ?>
  <?php $query = array ( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array($post->ID) ); ?>
  <?php $posts = new WP_Query( $query ); ?>
  <section class="bg-quinary pb-4 pb-lg-16" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center justify-content-lg-start mb-lg-8 row">
        <div class="col-12 col-md-10 col-lg-6 col-xl-4 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
          <h3><?php the_field( 'related_title', $news->ID ); ?></h3>
          <div class="wysiwyg"><?php the_field( 'related_text', $news->ID ); ?></div>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-news pb-10 pb-lg-0 slick-overflow">
						<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
              <div class="px-4">
                <a class="d-block text-center" href="<?php the_permalink(); ?>">
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

  <?php get_template_part( 'inc/_signup' ); ?>

  <section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>