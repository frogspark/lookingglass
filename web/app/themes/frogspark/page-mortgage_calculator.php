<?php /* Template Name: Mortgage Calculator */ ?>

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
					<div class="bg-quinary border border-quaternary px-4 px-sm-8 py-8 text-center text-lg-start">
            <h2 class="h3"><?php the_field('calculator_title'); ?></h2>
            <div class="mb-8 mb-lg-12 row">
              <div class="col-12 col-xl-11">
                <div class="wysiwyg"><?php the_field('calculator_text'); ?></div>
              </div>
            </div>
            <div class="mb-8 row">
              <div class="col-12 col-lg-5 mb-8 mb-lg-0">
                <form id="calculator">
                  <div class="mb-8 mb-lg-12">
                    <div class="row">
                      <div class="col-12 col-lg-auto text-center text-lg-start"><p class="fw-semibold mb-2">Property Price</p></div>
                      <div class="col-12 col-lg text-center text-lg-end"><p class="mb-4 mb-lg-2">USD$ <span id="price-value">250000</span></p></div>
                    </div>
                    <div class="slider-wrapper w-100"><input class="slider" id="price" max="1000000" min="0" name="price" type="range" value="500000"></div>
                  </div>
                  <div class="mb-8 mb-lg-12">
                    <div class="row">
                      <div class="col-12 col-lg-auto text-center text-lg-start"><p class="fw-semibold mb-2">Deposit</p></div>
                      <div class="col-12 col-lg text-center text-lg-end"><p class="mb-4 mb-lg-2">USD$ <span id="deposit-value">250000</span> <span id="deposit-percent">(0%)</span></p></div>
                    </div>
                    <div class="slider-wrapper w-100"><input class="slider" id="deposit" max="500000" min="0" name="deposit" type="range" value="0"></div>
                  </div>
                  <div class="mb-8 mb-lg-12">
                    <div class="row">
                      <div class="col-12 col-lg-auto text-center text-lg-start"><p class="fw-semibold mb-2">Terms in years</p></div>
                      <div class="col-12 col-lg text-center text-lg-end"><p class="mb-4 mb-lg-2"><span id="terms-value">0</span></p></div>
                    </div>
                    <div class="slider-wrapper w-100"><input class="slider" id="terms" max="50" min="0" name="terms" type="range" value="0"></div>
                  </div>
                  <div>
                    <div class="row">
                      <div class="col-12 col-lg-auto text-center text-lg-start"><p class="fw-semibold mb-2">Interest rate</p></div>
                      <div class="col-12 col-lg text-center text-lg-end">
                        <ul class="d-flex flex-row justify-content-center justify-content-lg-end list-radio list-unstyled">
                          <li class="mr-4 mr-lg-0 ms-4 ms-lg-0">
                            <input checked id="fixed" name="interest" type="radio" value="Fixed">
                            <label for="fixed">Fixed</label>
                          </li>
                          <li class="mr-4 mr-lg-0 ms-4 ms-lg-8">
                            <input id="variable" name="interest" type="radio" value="Variable">
                            <label for="variable">Variable</label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-12 col-lg-7 col-xl-6 offset-xl-1">
                <div class="bg-quaternary mb-8 pb-lg-1 px-4 px-sm-8 pt-8">
                  <div class="row">
                    <div class="col-12 col-lg-auto mb-2 text-center text-lg-start"><p class="fw-bold fs-5 mb-0">Your monthly fee</p></div>
                    <div class="col-12 col-lg d-flex flex-column justify-content-center mb-4 mb-lg-2 text-center text-lg-end"><p class="mb-0">USD$ <span id="result-fee">0</span></p></div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-auto mb-2 mb-lg-8 text-center text-lg-start"><p class="fw-semibold mb-0">Mortgage amount</p></div>
                    <div class="col-12 col-lg mb-8 text-center text-lg-end"><p class="mb-0">USD$ <span id="result-mortgage-1">0</span></p></div>
                  </div>
                </div>
                <div class="bg-quaternary pb-8 pb-lg-9 px-4 px-sm-8 pt-8">
                  <div class="row">
                    <div class="col-12 mb-4 mb-lg-2 text-center text-lg-start"><p class="fw-bold fs-5 mb-0">Total purchase cost</p></div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-auto mb-2 text-center text-lg-start"><p class="fw-semibold mb-0">Property price</p></div>
                    <div class="col-12 col-lg mb-4 mb-lg-2 text-center text-lg-end"><p class="mb-0">USD$ <span id="result-price">0</span></p></div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-auto mb-2 mb-lg-8 text-center text-lg-start"><p class="fw-semibold mb-0">Taxes & Expenses</p></div>
                    <div class="col-12 col-lg mb-8 text-center text-lg-end"><p class="mb-0">USD$ <span id="result-taxes">0</span></p></div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-auto mb-2 text-center text-lg-start"><p class="fw-bold fs-5 mb-0">Total with mortgage</p></div>
                    <div class="col-12 col-lg d-flex flex-column justify-content-center mb-4 mb-lg-2 text-center text-lg-end"><p class="mb-0">USD$ <span id="result-total">0</span></p></div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-auto mb-2 text-center text-lg-start"><p class="fw-semibold mb-0">Deposit</p></div>
                    <div class="col-12 col-lg mb-4 mb-lg-2 text-center text-lg-end"><p class="mb-0">USD$ <span id="result-deposit">0</span></p></div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-auto mb-2 text-center text-lg-start"><p class="fw-semibold mb-0">Mortgage amount</p></div>
                    <div class="col-12 col-lg mb-4 mb-lg-2 text-center text-lg-end"><p class="mb-0">USD$ <span id="result-mortgage-2">0</span></p></div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-lg-auto mb-2 mb-lg-0 text-center text-lg-start"><p class="fw-semibold mb-0">Mortgage interest</p></div>
                    <div class="col-12 col-lg mb-0 text-center text-lg-end"><p class="mb-0">USD$ <span id="result-interest">0</span></p></div>
                  </div>
                </div>
              </div>
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

	<?php get_template_part( 'inc/_news' ); ?>

	<section class="my-2 my-lg-8"></section>

	<?php get_template_part( 'inc/_signup' ); ?>

	<section class="my-2 my-lg-8"></section>

<?php get_footer(); ?>