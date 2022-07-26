<?php
/*
 Template Name: Home
*/
 ?>
 
 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

 			<section class="c-banner c-banner--video">
			 	<?php $banner = get_field('banner_home'); ?>

				<video class="c-video c-video--desktop" width="768" height="768" muted autoplay loop>
					<source src="<?php echo $banner['video']; ?>" type="video/mp4">
				</video>

				<video class="c-video c-video--mobile" width="600" height="500" muted autoplay loop playsinline>
					<source src="<?php echo $banner['video_mobile']; ?>" type="video/mp4">
				</video>

				<h2 class="c-video__title o-ttl--45 o-ttl--secondary o-ttl--white o-ttl--center"><?php echo $banner['title_banner']; ?></h2>
 			</section>


 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			 	<?php echo get_template_part('partials/breadcrumbs') ?>

 				<div class="c-home">
					<?php
						$args = array(
							'post_type' => 'noticias',
							'order'			=> 'DESC',
							'tax_query'	=> array(
								array(
									'taxonomy' => 'destaques',
									'field'    => 'slug',
									'terms'    => 'destaque',
								),
							),
						);

						$query = new WP_Query($args);

						if( $query->have_posts() ): ?>

							<div class="o-wrapper o-wrapper--1280">
								<h2 class="o-ttl o-ttl--35 o-ttl--secondary o-ttl--point">Notícias</h2>
	
								<div class="swiper-container c-slider c-slider--highlights js-slider-highlights">
									<div class="swiper-wrapper">
										<?php while( $query->have_posts() ): $query->the_post(); ?>
	
											<div class="swiper-slide c-slider__slide">
												<div class="c-slider__content">
													<img src="<?php echo get_field('image_banner') ?>" alt="<?php the_title() ?>">
		
													<div class="c-slider__position">
														<a class="c-slider__container" href="<?php echo get_permalink(); ?>">
															<div class="c-slider__date">
																<p class="o-ttl--16 o-ttl--pink o-ttl--bold">Publicado: <br>
																	<?php echo get_the_date('d/m/Y') ?>
																</p>
															</div>
			
															<div class="c-slider__title">
																<h2 class="o-ttl--35 o-ttl--secondary"><?php the_title() ?></h2>
															</div>
														</a>
													</div>
												</div>
											</div>
	
										<?php endwhile; wp_reset_postdata(); ?>
									</div>

									<div class="swiper-buttons">
										<div class="swiper-button swiper-button-prev">
											<svg width="18.5" height="32.74">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-prev" />
											</svg>
										</div>

										<div class="swiper-button swiper-button-next">
											<svg width="18.5" height="32.74">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-next" />
											</svg>
										</div>
									</div>
									<div class="swiper-pagination"></div>
								</div>
							</div>

						<?php endif; ?>

						<div class="c-home__schedule">
							<div class="o-wrapper o-wrapper--1280">
								<h2 class="o-ttl o-ttl--35 o-ttl--secondary o-ttl--point">Programação</h2>
							</div>
						</div>

						<div class="o-wrapper o-wrapper--1280">
							<div class="c-bg c-bg--gray">
								<div class="c-home__info o-grid o-grid__col-3 o-grid__gap-160">
									<?php while( have_rows('info') ): the_row(); ?>
										
										<div class="c-home__info-item">
											<h3 class="o-ttl o-ttl--22 o-ttl--secondary o-ttl--color-primary"><?php echo get_sub_field('title'); ?></h3>
											<p class="o-ttl--16 o-ttl--bold o-ttl--upper"><?php echo get_sub_field('description'); ?></p>
										</div>

									<?php endwhile; wp_reset_postdata(); ?>
								</div>
							</div>
						</div>

						<?php $banner = get_field('banner_page'); ?>
						<div class="o-wrapper o-wrapper--1280">
							<div class="c-banner c-banner--home" style="background: url('<?php echo $banner['image'] ?>')">
								<div class="c-banner__filter" style="background-image: linear-gradient(to left, <?php echo $banner['filter_color'] ?>, transparent)"></div>
								<h2 class="o-ttl o-ttl--45 o-ttl--white o-ttl--medium o-ttl--center"><?php echo $banner['title'] ?></h2>
								<img src="<?php echo $banner['logo'] ?>">
							</div>
						</div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
