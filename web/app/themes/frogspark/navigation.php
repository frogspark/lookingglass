<?php $alt = false; ?>
<?php if (is_front_page()): ?>
  <?php $alt = true; ?>
<?php endif; ?>

<header class="<?php if ($alt): echo 'alt'; endif; ?> py-2 py-lg-4" id="header">
  <div class="container">
    <div class="row">
      <div class="align-items-center col-6 col-lg-auto d-flex flex-row">
        <a class="logo" href="/"><img alt="<?php echo get_bloginfo('name'); ?>" src="<?php if ($alt): echo get_field('logo_alt', 'option')['url']; else: echo get_field('logo', 'option')['url']; endif;?>"></a>
      </div>
      <div class="align-items-center col-6 col-lg d-flex flex-row justify-content-end">
        <nav class="d-none d-xl-block" id="navigation">
          <ul class="nav">
            <?php $menu = wp_get_nav_menu_items('Primary menu'); ?>
            <?php foreach ($menu as $item): ?>
              <li class="ms-xl-10"><a class="btn-underline-<?php if ($alt): echo 'quinary'; else: echo 'primary'; endif; ?> fw-semibold" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <nav class="d-none d-xl-block" id="navigation-full">
          <ul class="nav">
            <?php // $menu = wp_get_nav_menu_items('Secondary menu'); ?>
          </ul>
        </nav>
        <div class="d-none d-xl-block ms-xl-10">
          <button class="align-items-center <?php if ($alt): echo 'alt'; endif; ?> d-flex flex-row p-0" id="fullmenu" name="menu" type="button">
            <span class="fw-semibold">Full Menu</span>
            <span class="burger ms-4"></span>
          </button>
        </div>
        <nav class="d-block d-xl-none" id="navigation-mobile">
          <ul class="nav">
            <?php // $menu = wp_get_nav_menu_items('Tertiary menu'); ?>
          </ul>
        </nav>
        <div class="d-block d-xl-none order-2 order-lg-1">
          <button class="align-items-center <?php if ($alt): echo 'alt'; endif; ?> d-flex flex-row p-0" id="burger" name="menu" type="button">
            <span class="burger"></span>
          </button>
        </div>
        <ul class="align-items-center d-flex flex-row list-unstyled mb-0 ms-xl-8 order-1 order-lg-2" id="shortcuts">
          <li class="me-5 me-xl-0 ms-xl-7"><a class="fs-5 text-secondary" href="/"><i class="far fa-heart"></i></a></li>
          <li class="me-6 me-xl-0 ms-xl-6"><a class="fs-5 text-secondary" href="/"><i class="far fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>