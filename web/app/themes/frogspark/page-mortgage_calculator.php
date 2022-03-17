<?php /* Template Name: Mortgage Calculator */ ?>

<?php get_header(); ?>

	<?php get_template_part( 'navigation' ); ?>
	
	<form class="d-none">
		<input id="fixed-rate" name="fixed" type="text" value="<?php the_field('interest_rates_fixed'); ?>">
	</form>

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
					<div class="bg-quinary border border-quaternary px-4 px-sm-8 py-8 text-center text-lg-start">
            <h2 class="h3"><?php the_field('calculator_title'); ?></h2>
            <div class="mb-8 mb-lg-12 row">
              <div class="col-12 col-xl-11">
                <div class="wysiwyg"><?php the_field('calculator_text'); ?></div>
              </div>
            </div>
            <div class="mb-8 row">
              <?php get_calculator(); ?>
            </div>
            <div class="row">
              <div class="col-12">
                <p class="mb-0 text-center"><a class="btn-secondary" href="/"><span>View properties in this price range</span></a></p>
              </div>
            </div>
          </div>
				</div>
			</div>
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