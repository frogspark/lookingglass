<?php $query = array ( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array($post->ID) ); ?>
<?php $posts = new WP_Query( $query ); ?>
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
	</div>
</section>