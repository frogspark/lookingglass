<?php /* Template Name: News */ ?>

<?php get_header(); ?>

  <?php get_template_part( 'navigation' ); ?>

  <?php $query = array ( 'post_type' => 'post', 'posts_per_page' => 1 ); ?>
  <?php $posts = new WP_Query( $query ); ?>
  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
    <section class="hero news pb-12" data-aos="fade" style="background-image: url(<?php echo get_field('page_image')['url']; ?>">
      <div class="container d-flex flex-column h-100 position-relative" style="z-index: 3;">
        <div class="align-items-center d-flex flex-row h-100 pt-12 pt-lg-0 row">
          <div class="col-12" data-aos="fade-up" data-aos-delay="50">
            <div class="justify-content-center justify-content-lg-start row">
              <div class="col-12 col-md-10 col-lg-11 col-xl-5 offset-xl-1 text-center text-lg-start text-quinary">
                <h1 class="mb-lg-6 text-quinary"><?php the_title(); ?></h1>
                <p class="h4 mb-6"><?php echo date( 'd.m.Y', strtotime( $post->post_date ) ); ?></p>
                <p class="mb-0"><a class="btn-secondary" href="<?php the_permalink(); ?>"><span>Read more</span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; wp_reset_postdata(); ?>

  <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
  <?php $query = array ( 'post_type' => 'post', 'posts_per_page' => 12, 'paged' => $paged ); ?>
  <?php $posts = new WP_Query( $query ); ?>
  <?php
    $pagenum = $posts->query_vars['paged'] < 1 ? 1 : $posts->query_vars['paged'];
    $first = ( ( $pagenum - 1 ) * $posts->query_vars['posts_per_page'] ) + 1;
    $last = $first + $posts->post_count - 1;
  ?>
  <section class="pb-4 pb-lg-12 pt-12 pt-lg-24" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
          <p class="mb-0">Showing <?php echo $first; ?> - <?php echo $last; ?> of <?php echo $posts->found_posts; ?> results</p>
        </div>
      </div>
      <div class="d-none d-lg-flex row">
        <?php $x = 1; ?>
				<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
          <div class="col-lg-4 mb-12" data-aos="fade-up" data-aos-delay="50">
            <a class="d-block" href="<?php the_permalink(); ?>">
              <div class="bg-wrapper mb-4">
                <div class="bg-portrait" style="background-image: url(<?php echo get_field( 'page_image' )[ 'url' ]; ?>);"></div>
              </div>
              <p class="h4 mb-2 text-primary"><?php the_title(); ?></p>
              <p class="fw-semibold mb-2 text-primary"><?php echo date( 'd.m.Y', strtotime( $post->post_date ) ); ?></p>
              <p class="mb-2 text-primary"><?php the_field( 'page_snippet' ); ?></p>
              <p class="mb-0"><span class="btn-arrow-secondary">Read more</span></p>
            </a>
          </div>

          <?php if($x % 3 == 0 && $wp_query->post_count != $x && $x <= 3) : ?>
            <div class="col-12 mb-12" data-aos="fade-up" data-aos-delay="50">
              <div class="display-ads horizontal-ad"><img src="https://via.placeholder.com/1000x250" alt="placeholder ads"></div>
            </div>
          <?php endif; ?>
        <?php $x++; ?>
				<?php endwhile; ?>
      </div>
      <div class="d-flex d-lg-none justify-content-center row">
        <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-news pb-10 slick-overflow">
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
      <?php if ($x >= 12 || $posts->query_vars['paged'] > 1): ?> 
        <div class="row">
          <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
            <div class="pagination">
              <?php $total_pages = $posts->max_num_pages; ?>
              <?php if ( $total_pages > 1 ): $current_page = max( 1, get_query_var( 'paged' ) ); echo paginate_links( array ( 'base' => get_pagenum_link( 1 ) . '%_%', 'format' => 'page/%#%/', 'current' => $current_page, 'total' => $total_pages, 'prev_next' => false ) ); endif; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="pb-12 pb-lg-24">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="display-ads horizontal-ad"><img src="https://via.placeholder.com/1000x250" alt="placeholder ads"></div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'inc/_signup' ); ?>

  <section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>