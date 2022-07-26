 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			 	<?php echo get_template_part('partials/breadcrumbs') ?>

        <div class="o-wrapper o-wrapper--1280">
          <div class="c-banner c-banner--top" style="background: url('<?php echo get_field('banner'); ?>')">
            <div class="c-banner__title">
              <h2 class="o-ttl o-ttl--50 o-ttl--bold o-ttl--secondary"><?php the_title(); ?></h2>
            </div>
          </div>
        </div>

 				<div class="c-single-house">
          <div class="o-wrapper o-wrapper--1140">
            <?php echo get_field('free_text'); ?>

            <div class="c-single-house__info">
              <?php echo get_field('place_info'); ?>
            </div>

            <div class="c-single-house__history">
              <?php $history = get_field('history'); ?>
              <h2 class="o-ttl o-ttl--35 o-ttl--secondary">
                <span class="o-ttl--point"><?php echo $history['title']; ?></span>
                <span class="o-ttl o-ttl--22 o-ttl--secondary o-ttl--pink"><?php echo $history['place_date'] ?></span>
              </h2>  

              <?php echo $history['text'] ?>

              <div class="c-single-house__capacity">
                <h3 class="o-ttl o-ttl--22 o-ttl--secondary"><?php echo $history['capacity'] ?></h3>
                <h3 class="o-ttl o-ttl--22 o-ttl--secondary"><?php echo $history['goal'] ?></h3>
              </div>
            </div>
          </div>

          <div class="c-bg c-bg--gray">
            <div class="o-wrapper o-wrapper--1140">
              <h2 class="o-ttl o-ttl--35 o-ttl--secondary o-ttl--point">Galeria</h2>

              <div class="c-single-house__gallery">
                <?php $galleries = get_field('gallery'); ?>
                <?php foreach( $galleries as $gallery ): ?>
    
                  <div class="c-single-house__gallery-item">
                    <img src="<?php echo $gallery['url']; ?>">
                  </div>
    
                <?php endforeach; wp_reset_postdata(); ?>
              </div>
            </div>
          </div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
