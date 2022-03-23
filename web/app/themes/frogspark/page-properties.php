<?php /* Template Name: Properties */ ?>

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
					<?php get_search($full = false); ?>
        </div>
      </div>
    </div>
  </section>

  <?php $slug = $post->post_name; ?>

  <section class="pb-4 pb-lg-16" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center mb-lg-8 row position-relative">
        <!-- <div class="d-none d-lg-block display-ads vertical-left"><img src="https://via.placeholder.com/250x1500" alt="placeholder ads"></div>
        <div class="d-none d-lg-block display-ads vertical-right"><img src="https://via.placeholder.com/250x1500" alt="placeholder ads"></div> -->

        <div class="col-12 col-md-10 col-lg-8 col-xxxxl-12 d-flex flex-column flex-lg-row mb-8" data-aos="fade-up" data-aos-delay="50">
          <ul class="align-items-center d-flex flex-column flex-lg-row flex-fill justify-content-center justify-content-lg-start list-unstyled mb-0">
            <?php if (isset($_GET['view']) && $_GET['view'] == 'map'): ?>
              <li class="mb-2 mb-lg-0 me-lg-6">Showing 12 results</li>
            <?php else: ?>
              <li class="mb-2 mb-lg-0 me-lg-6">Showing 1 - 12 of 32 results</li>
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
        <div class="col-lg-8 col-xxxxl-12 px-0 mx-auto position-relative">
          <div class="d-none d-lg-block display-ads vertical-left"><img src="https://via.placeholder.com/200x700" alt="placeholder ads"></div>
          <div class="d-none d-lg-block display-ads vertical-right"><img src="https://via.placeholder.com/200x700" alt="placeholder ads"></div>
          <div class="d-none d-lg-flex row">
            <?php for ($x = 1; $x <= 12; $x++): ?>
              <div class="col-lg-6 col-xxxxl-4 mb-8" data-aos="fade-up" data-aos-delay="50">
                <div class="property">
                  <div class="gallery mb-4">
                    <div class="carousel-gallery">
                      <?php for ( $z = 1; $z <= 3; $z ++ ): ?>
                        <div>
                          <div class="bg-portrait" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div>
                        </div>
                      <?php endfor; ?>
                    </div>
                    <a class="heart" href="/"></a>
                    <?php if ( $i === 2 ): echo '<span class="bg-secondary h5 note px-2 py-1 text-quinary">New listing</span>'; endif; ?>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 mb-2 mb-lg-0 text-start">
                      <p class="fw-semibold mb-1">3 bed apartment</p>
                      <p class="mb-1">Kingston</p>
                      <p class="mb-0">USD $575,000</p>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-end">
                      <p class="mb-0 text-end"><a class="btn-arrow-secondary" href="/<?php echo $slug; ?>/test/">More details</a></p>
                    </div>
                  </div>
                  <?php if ($x == 1 || $x == 4 || $x == 9): ?>
                    <div class="mt-4 px-4 row">
                      <div class="col-12">
                        <div class="border border-tertiary p-2 row" style="border-radius: 100vh;">
                          <div class="col-lg-4 col-xl-3">
                            <div class="bg-square" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/08/agents.svg); background-size: contain;"></div>
                          </div>
                          <div class="align-items-center col-lg-8 col-xl-9 d-flex flex-row">
                            <p class="mb-0">Advertised by multiple agents</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php else: ?>
                    <div class="mt-4 row">
                      <div class="col-lg-4 col-xl-3">
                        <div class="bg-square" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg"></div>
                      </div>
                      <div class="align-items-center col-lg-8 col-xl-9 d-flex flex-row">
                        <ul class="list-unstyled mb-0">
                          <li>Martha Kell</li>
                          <li class="fw-semibold">Coldwell Banker</li>
                          <li><a class="btn-underline-secondary" href="/">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
        <div class="d-flex d-lg-none justify-content-center row">
          <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
            <div class="carousel-base pb-10 slick-overflow">
              <?php for ($x = 1; $x <= 12; $x++): ?>
                <div class="px-4">
                  <div class="property">
                    <div class="gallery mb-4">
                      <div class="carousel-gallery">
                        <?php for ( $z = 1; $z <= 3; $z ++ ): ?>
                          <div><div class="bg-portrait" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div></div>
                        <?php endfor; ?>
                      </div>
                      <a class="heart" href="/"></a>
                      <?php if ( $i === 2 ): echo '<span class="bg-secondary h5 note px-2 py-1 text-quinary">New listing</span>'; endif; ?>
                    </div>
                    <div class="row">
                      <div class="col-12 mb-2 mb-lg-0 text-center">
                        <p class="fw-semibold mb-1">3 bed apartment</p>
                        <p class="mb-1">Kingston</p>
                        <p class="mb-0">USD $575,000</p>
                      </div>
                      <div class="col-12 d-flex flex-column justify-content-end">
                        <p class="mb-0 text-center"><a class="btn-arrow-secondary" href="/<?php echo $slug; ?>/test/">More details</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      <?php elseif (isset($_GET['view']) && $_GET['view'] == 'list'): ?>
        <!-- List -->
        <div class="d-none d-lg-flex row">
          <?php for ($x = 1; $x <= 12; $x++): ?>
            <div class="col-12 mb-8" data-aos="fade-up" data-aos-delay="50">
              <div class="property">
                <div class="row">
                  <div class="col-lg-4 col-xl-3">
                    <div class="gallery">
                      <div class="carousel-gallery">
                        <?php for ( $z = 1; $z <= 3; $z ++ ): ?>
                          <div><div class="bg-portrait" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div></div>
                        <?php endfor; ?>
                      </div>
                      <a class="heart" href="/"></a>
                    </div>
                  </div>
                  <div class="col-lg-8 col-xl-9 pt-lg-4">
                    <div class="mb-4 row">
                      <div class="col-lg-6 mb-2 mb-lg-0 text-start">
                        <p class="fw-semibold mb-1">3 bed apartment</p>
                        <p class="mb-1">Kingston</p>
                        <p class="mb-0">USD $575,000</p>
                      </div>
                      <div class="col-lg-6 d-flex flex-column justify-content-start">
                        <p class="mb-0 text-end"><a class="btn-arrow-secondary" href="/<?php echo $slug; ?>/test/">More details</a></p>
                      </div>
                    </div>
                    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <?php if ($x == 1 || $x == 4 || $x == 9): ?>
                      <div class="px-4 row">
                        <div class="col-lg-6 col-xl-5">
                          <div class="border border-tertiary p-2 row" style="border-radius: 100vh;">
                            <div class="col-lg-4 col-xl-3">
                              <div class="bg-square" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/08/agents.svg); background-size: contain;"></div>
                            </div>
                            <div class="align-items-center col-lg-8 col-xl-9 d-flex flex-row">
                              <p class="mb-0">Advertised by multiple agents</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php else: ?>
                      <div class="row">
                        <div class="col-lg-6 col-xl-5">
                          <div class="row">
                            <div class="col-lg-4 col-xl-3">
                              <div class="bg-square" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg"></div>
                            </div>
                            <div class="align-items-center col-lg-8 col-xl-9 d-flex flex-row">
                              <ul class="list-unstyled mb-0">
                                <li>Martha Kell</li>
                                <li class="fw-semibold">Coldwell Banker</li>
                                <li><a class="btn-underline-secondary" href="/">Contact</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>
        <div class="d-flex d-lg-none justify-content-center row">
          <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
            <div class="carousel-base pb-10 slick-overflow">
              <?php for ($x = 1; $x <= 12; $x++): ?>
                <div class="px-4">
                  <div class="property">
                    <div class="gallery mb-4">
                      <div class="carousel-gallery">
                        <?php for ( $z = 1; $z <= 3; $z ++ ): ?>
                          <div><div class="bg-portrait" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div></div>
                        <?php endfor; ?>
                      </div>
                      <a class="heart" href="/"></a>
                      <?php if ( $i === 2 ): echo '<span class="bg-secondary h5 note px-2 py-1 text-quinary">New listing</span>'; endif; ?>
                    </div>
                    <div class="row">
                      <div class="col-12 mb-2 mb-lg-0 text-center">
                        <p class="fw-semibold mb-1">3 bed apartment</p>
                        <p class="mb-1">Kingston</p>
                        <p class="mb-0">USD $575,000</p>
                      </div>
                      <div class="col-12 d-flex flex-column justify-content-end">
                        <p class="mb-0 text-center"><a class="btn-arrow-secondary" href="/<?php echo $slug; ?>/test/">More details</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      <?php elseif (isset($_GET['view']) && $_GET['view'] == 'map'): ?>
        <!-- Map -->
        <div class="row">
          <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
            <div class="map-alt" style="height: auto; padding-bottom: 100%; width: 100%;">
              <div class="marker" data-icon="<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/marker.svg" data-lat="52.914669" data-lng="-1.5400072">
                <div class="pb-1 pe-2 pt-1">
                  <img alt="3 bed apartment" class="mb-4" src="<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg" style="height: 64px; width: auto;">
                  <p class="fw-semibold mb-1">3 bed apartment</p>
                  <p class="mb-1">Kingston</p>
                  <p class="mb-2">USD $575,000</p>
                  <p class="mb-0"><a class="btn-underline-secondary fw-semibold" href="/<?php echo $slug; ?>/test/">View property</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php get_template_part('inc/_map-script'); ?>
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

  <?php get_template_part( 'inc/_news' ); ?>

  <section class="pt-4 pt-lg-18 pb-12 pb-lg-24">
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