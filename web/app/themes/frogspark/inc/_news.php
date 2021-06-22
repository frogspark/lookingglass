<section class="bg-quinary" style="overflow: hidden;">
	<div class="container">
		<div class="justify-content-center justify-content-lg-start mb-lg-8 row">
			<div class="col-12 col-md-10 col-lg-6 col-xl-4 mb-8 text-center text-lg-start" data-aos="fade-up" data-aos-delay="50">
				<h3><?php the_field( 'news_title', 'option' ); ?></h3>
				<div class="wysiwyg"><?php the_field( 'news_text', 'option' ); ?></div>
			</div>
		</div>
		<div class="justify-content-center row">
			<div class="col-12 col-md-10 col-lg-12 mb-8 px-0" data-aos="fade-up" data-aos-delay="50">
				<div class="carousel-news pb-10 pb-lg-0 slick-overflow">
					<?php for ($x = 1; $x <= 3; $x++): ?>
						<div class="px-4">
							<a class="d-block text-center text-lg-start" href="/">
								<div class="bg-wrapper mb-4"><div class="bg-portrait" style="background-image: url(<?php echo wp_get_upload_dir()[ 'baseurl' ]; ?>/2021/06/placeholder.jpg);"></div></div>
								<p class="h4 mb-2 text-primary">This is the title of a blog post</p>
								<p class="fw-semibold mb-2 text-primary">24.06.21</p>
								<p class="mb-2 text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
								<p class="mb-0"><span class="btn-arrow-secondary">Read more</span></p>
							</a>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>
</section><?php
