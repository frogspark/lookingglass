<?php /* Template Name: Agent/Yacht Search */ ?>

<?php get_header(); ?>

  <?php get_template_part( 'navigation' ); ?>

  <section class="hero pb-12 pb-lg-16" data-aos="fade" style="background-image: url(<?php echo get_field('hero_image')['url']; ?>">
    <div class="container d-flex flex-column h-100 position-relative pt-lg-12" style="z-index: 3;">
      <div class="align-items-center d-flex flex-row h-100 pt-12 pt-lg-0 row">
        <div class="col-12" data-aos="fade-up" data-aos-delay="50">
          <div class="justify-content-center justify-content-lg-start row">
            <div class="col-12 col-md-10 col-lg-11 col-xl-7 offset-xl-1 text-center text-lg-start text-quinary">
              <h1 class="mb-4 text-quinary"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-12 pb-lg-24 mt-lg-n12 pt-12 pt-lg-0">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 col-xl-10" data-aos="fade-up" data-aos-delay="50">
					<?php get_search($full = false, $type = 'agent_yacht'); ?>
        </div>
      </div>
    </div>
  </section>

  <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
  <?php $query = array ( 'post_type' => 'agent', 'posts_per_page' => 12, 'paged' => $paged ); ?>
  <?php $posts = new WP_Query( $query ); ?>
  <?php
    $pagenum = $posts->query_vars['paged'] < 1 ? 1 : $posts->query_vars['paged'];
    $first = ( ( $pagenum - 1 ) * $posts->query_vars['posts_per_page'] ) + 1;
    $last = $first + $posts->post_count - 1;
  ?>

  <section class="pb-4 pb-lg-16">
    <div class="container">
      <div class="justify-content-center mb-lg-8 row">
        <div class="col-12 col-md-10 col-lg-12 d-flex flex-column flex-lg-row mb-8" data-aos="fade-up" data-aos-delay="50">
          <ul class="align-items-center d-flex flex-column flex-lg-row flex-fill justify-content-center justify-content-lg-start list-unstyled mb-0">
            <?php if (isset($_GET['view']) && $_GET['view'] == 'map'): ?>
              <li class="mb-2 mb-lg-0 me-lg-6">Showing <?php echo $posts->found_posts; ?> results</li>
            <?php else: ?>
              <li class="mb-2 mb-lg-0 me-lg-6">Showing <?php echo $first; ?> - <?php echo $last; ?> of <?php echo $posts->found_posts; ?> results</li>
            <?php endif; ?>
            <li class="d-flex flex-row mb-2 mb-lg-0 me-lg-6">
              <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" class="mx-1 view-form" method="get"><input name="view" type="hidden" value="grid"><a class="<?php if (isset($_GET['view']) && $_GET['view'] == 'grid'): echo 'active'; elseif (!isset($_GET['view'])): echo 'active'; endif; ?>" onclick="this.parentNode.submit()" style="cursor: pointer;"><i class="fas fa-th"></i></a></form>
              <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" class="mx-1 view-form" method="get"><input name="view" type="hidden" value="list"><a class="<?php if (isset($_GET['view']) && $_GET['view'] == 'list'): echo 'active'; endif; ?>" onclick="this.parentNode.submit()" style="cursor: pointer;"><i class="fas fa-list"></i></a></form>
              <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" class="mx-1 view-form" method="get"><input name="view" type="hidden" value="map"><a class="<?php if (isset($_GET['view']) && $_GET['view'] == 'map'): echo 'active'; endif; ?>" onclick="this.parentNode.submit()" style="cursor: pointer;"><i class="fas fa-map-marker-alt"></i></a></form>
            </li>
          </ul>
          <?php if (!isset($_GET['view']) || (isset($_GET['view']) && $_GET['view'] != 'map')): ?>
            <div class="align-items-start align-items-lg-center d-flex flex-column flex-lg-row justify-content-center justify-content-lg-end">
              <p class="mb-0 me-lg-6" style="white-space: nowrap;">Sort by:</p>
              <div class="select-wrapper">
                <select name="sort" id="sort">
                  <option value="name">Name</option>
                  <option value="price-high">Highest price</option>
                  <option value="price-low">Lowest price</option>
                </select>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <?php if (!isset($_GET['view']) || ($_GET['view'] && $_GET['view'] == 'grid')): ?>
        <!-- Grid -->
        <div class="d-none d-lg-flex row">
          <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
            <div class="col-lg-4 mb-8" data-aos="fade-up" data-aos-delay="50">
              <a href="<?php the_permalink(); ?>">
                <div class="bg-wrapper mb-4"><div class="bg-square" style="background-image: url(<?php echo get_field('image')['url']; ?>);"></div></div>
                <div class="row">
                  <div class="col-lg-6 mb-2 mb-lg-0 text-lg-start">
                    <p class="fw-semibold mb-0 text-primary"><?php the_title(); ?></p>
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-content-end">
                    <p class="mb-0 text-lg-end"><span class="btn-arrow-secondary">More details</span></p>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="d-flex d-lg-none justify-content-center row">
          <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
            <div class="carousel-base pb-10 slick-overflow">
              <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <div class="px-4">
                  <a href="<?php the_permalink(); ?>">
                    <div class="bg-wrapper mb-4"><div class="bg-square" style="background-image: url(<?php echo get_field('image')['url']; ?>);"></div></div>
                    <div class="row">
                      <div class="col-12 mb-2 mb-lg-0 text-center">
                        <p class="fw-semibold mb-0 text-primary"><?php the_title(); ?></p>
                      </div>
                      <div class="col-12 d-flex flex-column justify-content-end">
                        <p class="mb-0 text-center"><span class="btn-arrow-secondary">More details</span></p>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
            <div class="pagination">
              <?php $total_pages = $posts->max_num_pages; ?>
              <?php if ( $total_pages > 1 ): $current_page = max( 1, get_query_var( 'paged' ) ); echo paginate_links( array ( 'base' => get_pagenum_link( 1 ) . '%_%', 'format' => 'page/%#%/', 'current' => $current_page, 'total' => $total_pages, 'prev_next' => false ) ); endif; ?>
            </div>
          </div>
        </div>
      <?php elseif (isset($_GET['view']) && $_GET['view'] == 'list'): ?>
        <!-- List -->
        <div class="d-none d-lg-flex row">
          <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
            <div class="col-12 mb-8" data-aos="fade-up" data-aos-delay="50">
              <a href="<?php the_permalink(); ?>">
                <div class="row">
                  <div class="col-lg-4 col-xl-3">
                    <div class="bg-wrapper mb-4"><div class="bg-square" style="background-image: url(<?php echo get_field('image')['url']; ?>);"></div></div>
                  </div>
                  <div class="col-lg-8 col-xl-9 pt-lg-4">
                    <div class="row">
                      <div class="col-lg-6 mb-2 mb-lg-0 text-lg-start">
                        <p class="fw-semibold mb-2 text-primary"><?php the_title(); ?></p>
                      </div>
                      <div class="col-lg-6 d-flex flex-column justify-content-end">
                        <p class="mb-0 text-lg-end"><span class="btn-arrow-secondary">More details</span></p>
                      </div>
                    </div>
                    <?php $address = get_field('location')['address']; $address = explode(',', $address); ?>
                    <?php foreach ($address as $item): ?>
                      <p class="mb-0 text-primary"><?php echo $item; ?>,</p>
                    <?php endforeach; ?>
                    <p class="mb-0 mt-2 text-primary"><?php the_field('phone_number'); ?></p>
                    <p class="mb-0 text-primary"><?php the_field('email_address'); ?></p>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="d-flex d-lg-none justify-content-center row">
          <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
            <div class="carousel-base pb-10 slick-overflow">
              <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <div class="px-4">
                  <a href="<?php the_permalink(); ?>">
                    <div class="bg-wrapper mb-4"><div class="bg-square" style="background-image: url(<?php echo get_field('image')['url']; ?>);"></div></div>
                    <div class="row">
                      <div class="col-12 mb-2 mb-lg-0 text-center">
                        <p class="fw-semibold mb-0 text-center text-primary"><?php the_title(); ?></p>
                      </div>
                      <div class="col-12 d-flex flex-column justify-content-end">
                        <p class="mb-0 text-center"><span class="btn-arrow-secondary">More details</span></p>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
            <div class="pagination">
              <?php $total_pages = $posts->max_num_pages; ?>
              <?php if ( $total_pages > 1 ): $current_page = max( 1, get_query_var( 'paged' ) ); echo paginate_links( array ( 'base' => get_pagenum_link( 1 ) . '%_%', 'format' => 'page/%#%/', 'current' => $current_page, 'total' => $total_pages, 'prev_next' => false ) ); endif; ?>
            </div>
          </div>
        </div>
      <?php elseif (isset($_GET['view']) && $_GET['view'] == 'map'): ?>
        <!-- Map -->
        <div class="row">
          <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
            <div class="map-alt" style="height: auto; padding-bottom: 100%; width: 100%;">
              <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <div class="marker" data-icon="<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/marker.svg" data-lat="<?php echo get_field('location')['lat']; ?>" data-lng="<?php echo get_field('location')['lng']; ?>">
                  <div class="pb-1 pe-2 pt-1">
                    <p class="fw-semibold mb-2 text-center text-primary"><?php the_title(); ?></p>
                    <p class="mb-0"><a class="btn-underline-secondary fw-semibold" href="<?php the_permalink(); ?>">View agent</a></p>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
        <?php get_template_part('inc/_map-script'); ?>
      <?php endif; ?>
    </div>
  </section>

  <?php get_template_part( 'inc/_news' ); ?>

  <section class="my-2 my-lg-8"></section>

  <?php get_template_part( 'inc/_signup' ); ?>

  <section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>