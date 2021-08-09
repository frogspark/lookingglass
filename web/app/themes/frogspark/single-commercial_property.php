<?php get_header(); ?>

  <?php get_template_part( 'navigation' ); ?>

  <section class="bg-quinary pb-4 pb-lg-16 pt-12">
    <div class="container">
      <div class="d-none d-lg-flex justify-content-center mb-8 row">
        <div class="col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
          <p class="mb-0"><a class="btn-back" href="/sales/">Back to listings</a></p>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12" data-aos="fade-up" data-aos-delay="50">
          <div class="bg-landscape property-main" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-sub pb-10">
            <?php for ($x = 1; $x <= 12; $x++): ?>
              <div>
                <div class="<?php if ($x == 1): echo 'active'; endif; ?> bg-landscape property-sub" data-image="<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-4 pb-lg-16">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
          <nav>
            <ul class="nav nav-pills" id="nav-property" role="tablist">
              <li class="nav-item"><button aria-controls="nav-home" aria-selected="true" class="active nav-link pb-2 pb-lg-4 pe-sm-8 ps-sm-8 ps-lg-0 pt-2 pt-lg-0" data-bs-target="#nav-info" data-bs-toggle="pill" id="nav-info-tab" role="tab" type="button">Info</button></li>
              <li class="nav-item"><button aria-controls="nav-video_map" aria-selected="false" class="nav-link pb-2 pb-lg-4 pt-2 pt-lg-0 px-sm-8" data-bs-target="#nav-video_map" data-bs-toggle="pill" id="nav-video_map-tab" role="tab" type="button">Video Tour & Map</button></li>
              <li class="nav-item"><button aria-controls="nav-schooling" aria-selected="false" class="nav-link pb-2 pb-lg-4 pt-2 pt-lg-0 px-sm-8" data-bs-target="#nav-schooling" data-bs-toggle="pill" id="nav-schooling-tab" role="tab" type="button">Schooling</button></li>
              <li class="nav-item"><button aria-controls="nav-area" aria-selected="false" class="nav-link pb-2 pb-lg-4 pt-2 pt-lg-0 px-sm-8" data-bs-target="#nav-area" data-bs-toggle="pill" id="nav-area-tab" role="tab" type="button">Local Area</button></li>
              <li class="nav-item"><button aria-controls="nav-calculator" aria-selected="false" class="nav-link pb-2 pb-lg-4 pt-2 pt-lg-0 px-sm-8" data-bs-target="#nav-calculator" data-bs-toggle="pill" id="nav-calculator-tab" role="tab" type="button">Mortgage Calculator</button></li>
            </ul>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div aria-labelledby="nav-info-tab" class="active fade show pt-6 tab-pane" id="nav-info" role="tabpanel">
              <div class="row">
                <div class="col-12 col-lg-10 col-xl-8">
                  <h1 class="mb-2 text-secondary">3 bed apartment in Kingston</h1>
                  <p class="h3">Large family home.</p>
                  <p class="align-items-start align-items-lg-center d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start fs-6 mb-8"><span class="fw-semibold me-lg-6">USD$575,000</span> <span class="fw-semibold">Listing #7564</span></p>
                  <div class="mb-4 row">
                    <?php for ($x = 1; $x <= 6; $x++): ?>
                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <p class="mb-0"><i class="fas fa-house me-1 text-secondary"></i> 400sq/ft property</p>
                      </div>
                    <?php endfor; ?>
                  </div>
                  <div class="wysiwyg">
                    <p class="fw-bold">Key Features</p>
                    <ul>
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</li>
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</li>
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</li>
                      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</li>
                    </ul>
                    <p class="fw-bold">Description</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
            </div>
            <div aria-labelledby="nav-video_map-tab" class="tab-pane pt-10 fade" id="nav-video_map" role="tabpanel">
              <div class="row">
                <div class="col-12 col-lg-10 col-xl-8">
                  <div class="mb-6 video-wrapper"><video controls="true" src="/app/uploads/2021/08/test.mp4" style="height: auto; max-width: 100%; width: 100%;"></video></div>
                  <div class="map" style="height: 0; padding-bottom: 56.25%; width: 100%;"><div class="marker" data-icon="<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/marker.svg" data-lat="52.914669" data-lng="-1.5400072"></div></div>
                  <?php get_template_part('inc/_map-script'); ?>
                </div>
              </div>
            </div>
            <div aria-labelledby="nav-area-tab" class="tab-pane pt-10 fade" id="nav-area" role="tabpanel">
              <div class="row">
                <div class="col-12 col-lg-10 col-xl-8">
                  <div class="wysiwyg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
            </div>
            <div aria-labelledby="nav-schooling-tab" class="tab-pane pt-10 fade" id="nav-schooling" role="tabpanel">
              <div class="row">
                <div class="col-12 col-lg-10 col-xl-8">
                  <div class="wysiwyg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
            </div>
            <div aria-labelledby="nav-calculator-tab" class="tab-pane pt-10 fade" id="nav-calculator" role="tabpanel">
              <div class="row">
                <div class="col-12 col-lg-10 col-xl-8">
                  <div class="row">
                    <?php get_calculator(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-4 pb-lg-16" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-8 col-xl-10 mb-8 text-center" data-aos="fade-up" data-aos-delay="50">
          <p class="h2 mb-0">Like this property? Contact an agent to arrange a viewing</p>
        </div>
      </div>
      <div class="d-none d-lg-flex justify-content-center row">
        <?php for ($x = 1; $x <= 2; $x++): ?>
          <div class="col-lg-4 mb-8" data-aos="fade-up" data-aos-delay="50">
            <div class="border border-tertiary px-4 px-md-8 py-8 text-center">
              <div class="justify-content-center row">
                <div class="col-lg-4 mb-4">
                  <div class="bg-square" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div>
                </div>
                <div class="col-12 border-bottom border-tertiary mb-4 text-center">
                  <p class="fs-5 mb-0">Maritha Keil</p>
                  <p class="fs-5 fw-semibold mb-4">Coldwell Banker</p>
                </div>
              </div>
              <ul class="list-unstyled mb-4 text-center">
                <li><a class="btn-underline-primary" href="tel:01332 123456">01332 123456</a></li>
                <li><a class="btn-underline-primary" href="mailto:name@agent.co.uk">name@agent.co.uk</a></li>
              </ul>
              <p class="mb-0"><a class="btn-secondary" href="/"><span>Request a viewing</span></a></p>
            </div>
          </div>
        <?php endfor; ?>
      </div>
      <div class="d-flex d-lg-none justify-content-center row">
        <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-base pb-14 slick-overflow">
            <?php for ($x = 1; $x <= 2; $x++): ?>
              <div class="px-4">
                <div class="border border-tertiary px-4 px-md-8 py-8 text-center">
                  <div class="justify-content-center row">
                    <div class="col-8 col-sm-6 col-md-4 mb-4">
                      <div class="bg-square" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div>
                    </div>
                    <div class="col-12 border-bottom border-tertiary mb-4 text-center">
                      <p class="fs-5 mb-0">Maritha Keil</p>
                      <p class="fs-5 fw-semibold mb-4">Coldwell Banker</p>
                    </div>
                  </div>
                  <ul class="list-unstyled mb-4 text-center">
                    <li><a class="btn-underline-primary" href="tel:01332 123456">01332 123456</a></li>
                    <li><a class="btn-underline-primary" href="mailto:name@agent.co.uk">name@agent.co.uk</a></li>
                  </ul>
                  <p class="mb-0"><a class="btn-secondary" href="/"><span>Request a viewing</span></a></p>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-quinary" style="overflow: hidden;">
    <div class="container">
      <div class="justify-content-center justify-content-lg-start mb-lg-8 row">
        <div class="col-12 col-md-10 col-lg-6 col-xl-4 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
          <h3>Similar properties</h3>
          <div class="wysiwyg"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-12 col-md-10 col-lg-12 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
          <div class="carousel-featured pb-10 pb-lg-0 slick-overflow">
            <?php for ($x = 1; $x <= 3; $x++): ?>
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
                    <div class="col-12 col-lg-6 mb-2 mb-lg-0 text-center text-lg-start">
                      <p class="fw-semibold mb-1">3 bed apartment</p>
                      <p class="mb-1">Kingston</p>
                      <p class="mb-0">USD $575,000</p>
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-end">
                      <p class="mb-0 text-center text-lg-end"><a class="btn-arrow-secondary" href="/sales/test/">More details</a></p>
                    </div>
                  </div>
                  <?php if ($x == 1 || $x == 4 || $x == 9): ?>
                    <div class="d-none d-lg-flex mt-4 px-4 row">
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
                    <div class="d-none d-lg-flex mt-4 row">
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
      </div>
    </div>
  </section>

  <section class="my-2 my-lg-8"></section>

  <?php get_template_part( 'inc/_signup' ); ?>

  <section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>