<?php get_header(); ?>

<?php get_template_part( 'navigation' ); ?>

    <section class="bg-quinary pb-4 pb-lg-16 pt-12">
        <div class="container">
            <div class="d-none d-lg-flex justify-content-center mb-8 row">
                <div class="col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
                    <p class="mb-0"><a class="btn-back" href="/">Back to listings</a></p>
                </div>
            </div>
            <div class="justify-content-center row">
                <div class="col-12 mb-8" data-aos="fade-up" data-aos-delay="50">
                    <div class="display-ads horizontal-ad"><img src="https://via.placeholder.com/1000x250" alt="placeholder ads"></div>
                </div>

                <div class="col-12 col-md-10 col-lg-12" data-aos="fade-up" data-aos-delay="50">
                    <div class="bg-landscape property-main" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div>
                </div>
            </div>
            <div class="justify-content-center row">
                <div class="col-12 col-md-10 col-lg-12 mb-8" data-aos="fade-up" data-aos-delay="50">
                    <div class="carousel-sub pb-10">
                        <?php $count = 0; ?>
                        <?php while (have_rows('images')): the_row(); ?>
                            <div>
                                <div class="<?php if ($count == 0): echo 'active'; endif; ?> bg-landscape property-sub" data-image="<?php echo get_sub_field('image')['url']; ?>" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div>
                            </div>
                            <?php $count = $count + 1; ?>
                        <?php endwhile; ?>
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
                            <li class="nav-item"><button aria-controls="nav-home" aria-selected="true" class="active nav-link pb-2 pb-lg-4 pe-sm-8 ps-sm-8 ps-lg-0 pt-2 pt-lg-0" data-bs-target="#nav-info" data-bs-toggle="pill" id="nav-info-tab" role="tab" type="button">Description</button></li>
<!--                            --><?//php// (ADD IF STATEMENT CONDITION): ?>
<!--                            <li class="nav-item"><button aria-controls="nav-video" aria-selected="false" class="nav-link pb-2 pb-lg-4 pt-2 pt-lg-0 px-sm-8" data-bs-target="#nav-video" data-bs-toggle="pill" id="nav-video-tab" role="tab" type="button">Video Tour</button></li>-->
<!--                            --><?//php// endif; ?>
<!--                            <li class="nav-item"><button aria-controls="nav-map" aria-selected="false" class="nav-link pb-2 pb-lg-4 pt-2 pt-lg-0 px-sm-8" data-bs-target="#nav-map" data-bs-toggle="pill" id="nav-map-tab" role="tab" type="button">Map</button></li>-->
<!--                            <li class="nav-item"><button aria-controls="nav-area" aria-selected="false" class="nav-link pb-2 pb-lg-4 pt-2 pt-lg-0 px-sm-8" data-bs-target="#nav-area" data-bs-toggle="pill" id="nav-area-tab" role="tab" type="button">Local Area</button></li>-->
                            <li class="nav-item"><button aria-controls="nav-calculator" aria-selected="false" class="nav-link pb-2 pb-lg-4 pt-2 pt-lg-0 px-sm-8" data-bs-target="#nav-calculator" data-bs-toggle="pill" id="nav-calculator-tab" role="tab" type="button">Mortgage Calculator</button></li>
                        </ul>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div aria-labelledby="nav-info-tab" class="active fade show pt-6 tab-pane" id="nav-info" role="tabpanel">
                            <div class="row">
                                <div class="col-12 col-lg-10 col-xl-8">

                                    <h1 class="mb-2 text-secondary"><?php the_title(); ?></h1>
<!--                                    <p class="h3">Large family home.</p>-->
                                    <?php $fmt = new NumberFormatter("en_US",  NumberFormatter::CURRENCY);
                                    $price_tmp = get_field('price');
                                    $money = $fmt->formatCurrency($price_tmp, "USD"); ?>
                                    <p class="align-items-start align-items-lg-center d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start fs-6 mb-8"><span class="fw-semibold me-lg-6"><?php echo $money; ?></span></p>
<!--                                    <div class="mb-4 row">-->
<!--                                        --><?php //for ($x = 1; $x <= 6; $x++): ?>
<!--                                            <div class="col-12 col-md-6 col-lg-4 mb-4">-->
<!--                                                <p class="mb-0"><i class="fas fa-house me-1 text-secondary"></i> 400sq/ft property</p>-->
<!--                                            </div>-->
<!--                                        --><?php //endfor; ?>
<!--                                    </div>-->

                                    <div class="mb-4 row">
                                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                                            <p class="mb-0"><i class="fas fa-house me-1 text-secondary"></i> <?php echo the_field('acreage'); ?></p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                                            <p class="mb-0"><i class="fa-solid fa-toilet me-1 text-secondary"></i> <?php echo the_field('bathrooms'); ?></p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                                            <p class="mb-0"><i class="fa-solid fa-bed me-1 text-secondary"></i> <?php echo the_field('bedrooms'); ?></p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 mb-4">
                                            <p class="mb-0"><i class="fa-solid fa-water-ladder me-1 text-secondary"></i> <?php echo the_field('pools'); ?></p>
                                        </div>
                                    </div>

                                    <div class="wysiwyg">
                                        <?php echo get_field('description'); ?>
<!--                                        <p class="fw-bold">Key Features</p>-->
<!--                                        <ul>-->
<!--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab</li>-->
<!--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab</li>-->
<!--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab</li>-->
<!--                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab</li>-->
<!--                                        </ul>-->
<!--                                        <p class="fw-bold">Description</p>-->
<!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2 col-xl-4 d-none d-lg-block">
                                    <div class="display-ads vertical-full-width"><img src="https://via.placeholder.com/250x1500" alt="placeholder ads"></div>
                                </div>
                            </div>
                        </div>

<!--                        --><?php //// if(ADD IF STATEMENT CONDITION HERE): ?>
<!--                        <div aria-labelledby="nav-video-tab" class="tab-pane pt-10 fade" id="nav-video" role="tabpanel">-->
<!--                            <div class="row">-->
<!--                                <div class="col-12 col-lg-10 col-xl-8">-->
<!--                                    <div class="mb-6 video-wrapper"><video controls="true" src="/app/uploads/2021/08/test.mp4" style="height: auto; max-width: 100%; width: 100%;"></video></div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="col-12 col-lg-2 col-xl-4 d-none d-lg-block">-->
<!--                                    <div class="display-ads vertical-full-width"><img src="https://via.placeholder.com/250x1500" alt="placeholder ads"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        --><?php //// endif; ?>
<!---->
<!--                        <div aria-labelledby="nav-area-tab" class="tab-pane pt-10 fade" id="nav-area" role="tabpanel">-->
<!--                            <div class="row">-->
<!--                                <div class="col-12 col-lg-10 col-xl-8">-->
<!--                                    <div class="wysiwyg">-->
<!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="col-12 col-lg-2 col-xl-4 d-none d-lg-block">-->
<!--                                    <div class="display-ads vertical-full-width"><img src="https://via.placeholder.com/250x1500" alt="placeholder ads"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div aria-labelledby="nav-map-tab" class="tab-pane pt-10 fade" id="nav-map" role="tabpanel">-->
<!--                            <div class="row">-->
<!--                                <div class="col-12 col-lg-10 col-xl-8">-->
<!--                                    <div class="mb-8">-->
<!--                                        <div class="map" style="height: 0; padding-bottom: 56.25%; width: 100%;"><div class="marker" data-icon="--><?php //echo wp_get_upload_dir()[ 'baseurl' ]; ?><!--/2021/06/marker.svg" data-lat="52.914669" data-lng="-1.5400072"></div></div>-->
<!--                                        --><?php //get_template_part('inc/_map-script'); ?>
<!--                                    </div>-->
<!--                                    <div class="wysiwyg">-->
<!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="col-12 col-lg-2 col-xl-4 d-none d-lg-block">-->
<!--                                    <div class="display-ads vertical-full-width"><img src="https://via.placeholder.com/250x1500" alt="placeholder ads"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div aria-labelledby="nav-calculator-tab" class="tab-pane pt-10 fade" id="nav-calculator" role="tabpanel">
                            <div class="row">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <div class="row">
                                        <?php get_calculator(); ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2 col-xl-4 d-none d-lg-block">
                                    <div class="display-ads vertical-full-width"><img src="https://via.placeholder.com/250x1500" alt="placeholder ads"></div>
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
                <?php $agents = get_field('agents'); ?>
                <!-- Loop through Agents row in ACF -->
                <?php while (have_rows('agents')): the_row(); ?>
                    <!-- Set $agent as the sub field within this ACF (it's the only sub field available) -->
                    <?php $agent = get_sub_field('agent'); ?>

                    <div class="col-lg-4 mb-8" data-aos="fade-up" data-aos-delay="50">
                        <div class="border border-tertiary px-4 px-md-8 py-8 text-center">
                            <div class="justify-content-center row">
                                <div class="col-lg-4 mb-4">
                                    <div class="bg-square" style="background-image: url(<?php echo get_field('image', $agent)['url']; ?>);"></div>
                                </div>
                                <div class="col-12 border-bottom border-tertiary mb-4 text-center">
                                    <p class="fs-5 mb-0"><?php echo get_the_title($agent); ?></p>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-4 text-center">
                                <!-- See here we're just using the_field rather than the_sub_field. -->
                                <!-- the_sub_field will only work on fields that are within the current repeater (in this case, "Agents" on the property ACF group). -->
                                <!-- To get the custom fields from the agents, we use the standard the_field/get_field functions and add the agent ID (defined as $agent) as a second parameter. -->
                                <li><a class="btn-underline-primary" href="tel:<?php the_field('phone_number', $agent); ?>"><?php the_field('phone_number', $agent); ?></a></li>
                                <li><a class="btn-underline-primary" href="mailto:<?php the_field('email_address', $agent); ?>"><?php the_field('email_address', $agent); ?></a></li>
                            </ul>
                            <p class="mb-0"><a class="btn-secondary" href="/"><span>Request a viewing</span></a></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="d-flex d-lg-none justify-content-center row">
                <div class="col-12 col-md-10 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
                    <div class="carousel-base pb-14 slick-overflow">
                        <?php while (have_rows('agents')): the_row(); ?>
                            <?php $agent = get_sub_field('agent'); ?>
                            <div class="px-4">
                                <div class="border border-tertiary px-4 px-md-8 py-8 text-center">
                                    <div class="justify-content-center row">
                                        <div class="col-8 col-sm-6 col-md-4 mb-4">
                                            <div class="bg-square" style="background-image: url(<?php echo get_field('image', $agent)['url']; ?>);"></div>
                                        </div>
                                        <div class="col-12 border-bottom border-tertiary mb-4 text-center">
                                            <p class="fs-5 mb-0"><?php the_sub_field('title'); ?></p>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mb-4 text-center">
                                        <li><a class="btn-underline-primary" href="tel:<?php the_field('phone_number', $agent); ?>"><?php the_field('phone_number', $agent); ?></a></li>
                                        <li><a class="btn-underline-primary" href="mailto:<?php the_field('email_address', $agent); ?>"><?php the_field('email_address', $agent); ?></a></li>
                                    </ul>
                                    <p class="mb-0"><a class="btn-secondary" href="/"><span>Request a viewing</span></a></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-quinary" style="overflow: hidden;">
        <div class="container">
            <div class="justify-content-center justify-content-lg-between mb-lg-8 row">
                <div class="col-12 col-md-10 col-lg-6 col-xl-4 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
                    <h3>Similar properties</h3>
                    <div class="wysiwyg"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p></div>
                </div>

                <div class="d-none d-lg-block col-lg-6 pb-8" data-aos="fade-up" data-aos-delay="50">
                    <div class="display-ads horizontal-ad"><img src="https://via.placeholder.com/1000x250" alt="placeholder ads"></div>
                </div>
            </div>
            <div class="justify-content-center row">
                <div class="col-12 col-md-10 col-lg-12 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
                    <div class="carousel-featured pb-10 pb-lg-0 slick-overflow">
                        <?php $prop_type = get_field('property_type'); echo $prop_type;?>
                        <?php $query = array('post_type' => 'property', 'posts_per_page' => 12, 'meta_key' => 'property_type', 'meta_value'	=> $prop_type); ?>
                        <?php $posts = new WP_Query($query); ?>
                        <?php while($posts->have_posts()) : $posts->the_post(); ?>
                            <div class="px-4">
                                <div class="property">
                                    <div class="gallery mb-4">
                                        <div class="carousel-gallery">
                                            <?php while (have_rows('images')): the_row(); ?>
                                                <div>
                                                    <div class="bg-portrait" style="background-image: url(<?php echo get_sub_field('image')['url']; ?>);"></div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                        <a class="heart" href="/"></a>
                                        <?php if ( $i === 2 ): echo '<span class="bg-secondary h5 note px-2 py-1 text-quinary">New listing</span>'; endif; ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-6 mb-2 mb-lg-0 text-center text-lg-start">
                                            <p class="fw-semibold mb-1"><?php echo the_title(); ?></p>
                                            <p class="mb-1"><?php echo the_field('island'); ?></p>
                                            <?php $fmt = new NumberFormatter("en_US",  NumberFormatter::CURRENCY);
                                            $price_tmp = get_field('price');
                                            $money = $fmt->formatCurrency($price_tmp, "USD"); ?>
                                            <p class="mb-0"><?php echo $money; ?></p>
                                        </div>
                                        <div class="col-12 col-lg-6 d-flex flex-column justify-content-end">
                                            <p class="mb-0 text-center text-lg-end"><a class="btn-arrow-secondary" href="/sales/test/">More details</a></p>
                                        </div>
                                    </div>
                                        <?php $agents = get_field('agents'); ?>
                                        <?php if($agents): // Handle if no agents set ?>
                                        <?php if (count($agents) > 1): // multiple agents, output message ?>
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
                                                    <li><?php echo get_the_title($agents[0]['agent']); ?></li>
                                                    <li><a class="btn-underline-secondary" href="<?php get_permalink($agents[0]); ?>">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                        <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-4 pt-lg-16 pb-12 pb-lg-24">
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