<?php $alt = false; $template = get_page_template_slug(); ?>
<?php if (is_front_page()): ?>
  <?php $alt = true; ?>
<?php elseif ($template === 'page-virgin_islands.php' || $template === 'page-about.php' || $template === 'page-news.php' || $template === 'page-advertise.php' || $template === 'page-agent_yacht_search.php' || $template === 'page-mortgage_calculator.php'): ?>
  <?php $alt = true; ?>
<?php endif; ?>

<header class="<?php if ($alt): echo 'alt'; endif; ?>" id="header">
  <div class="container">
    <div class="row">
      <div class="align-items-center col-6 col-lg-auto d-flex flex-row position-relative py-2 py-lg-4" style="z-index: 99;">
        <?php if ($alt): ?>
          <a class="alt logo" href="/"><img alt="<?php echo get_bloginfo('name'); ?>" src="<?php echo get_field('logo_alt', 'option')['url']; ?>"></a>
          <a class="default logo" href="/"><img alt="<?php echo get_bloginfo('name'); ?>" src="<?php echo get_field('logo', 'option')['url']; ?>"></a>
        <?php else: ?>
          <a class="logo" href="/"><img alt="<?php echo get_bloginfo('name'); ?>" src="<?php echo get_field('logo', 'option')['url']; ?>"></a>
        <?php endif; ?>
      </div>
      <div class="align-items-center col-6 col-lg d-flex flex-row justify-content-end py-2 py-lg-4">
        <nav class="d-none d-xl-block" id="navigation">
          <ul class="nav">
            <?php $menu = wp_get_nav_menu_items('Primary menu'); ?>
            <?php foreach ($menu as $item): ?>
              <li class="ms-xl-10"><a class="btn-underline-<?php if ($alt): echo 'quinary'; else: echo 'primary'; endif; ?> fw-semibold" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <nav class="d-none d-lg-block" id="navigation-full">
          <ul class="nav">
            <div class="container">
              <div class="justify-content-center row">
                <div class="col-12 col-md-10 col-lg-6">
                  <div class="row">
                    <?php $menu = wp_get_nav_menu_items('Secondary menu'); ?>
                    <?php foreach ($menu as $item): ?>
                      <div class="col-12 col-lg-6 mb-2">
                        <li><a class="btn-underline-primary fw-semibold" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </nav>
        <div class="d-none d-lg-block ms-xl-10">
          <button class="align-items-center <?php if ($alt): echo 'alt'; endif; ?> d-flex flex-row p-0" id="fullmenu" name="menu" type="button">
            <span class="fw-semibold">Full Menu</span>
            <span class="burger ms-4"></span>
          </button>
        </div>
        <nav class="d-block d-lg-none" id="navigation-mobile">
          <ul class="nav">
            <?php $menu = wp_get_nav_menu_items('Secondary menu'); ?>
            <?php foreach ($menu as $item): ?>
              <li class="my-2"><a class="btn-underline-primary fw-semibold" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <div class="d-block d-lg-none order-2 order-lg-1">
          <button class="align-items-center <?php if ($alt): echo 'alt'; endif; ?> d-flex flex-row p-0" id="burger" name="menu" type="button">
            <span class="burger"></span>
          </button>
        </div>
        <ul class="align-items-center d-flex flex-row list-unstyled mb-0 ms-lg-8 order-1 order-lg-2 position-relative" id="shortcuts" style="z-index: 99;">
          <li class="me-5 me-lg-0 ms-lg-7"><a class="fs-5 text-secondary" href="/"><i class="far fa-heart"></i></a></li>
          <li class="me-6 me-lg-0 ms-lg-6"><a class="fs-5 text-secondary" href="/"><i class="far fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>