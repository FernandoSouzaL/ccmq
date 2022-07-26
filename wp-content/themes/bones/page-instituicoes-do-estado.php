<?php
/*
 Template Name: Instituições
*/
 ?>
 
 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			 	<?php echo get_template_part('partials/breadcrumbs') ?>

        <div class="o-wrapper o-wrapper--1280">
          <div class="c-banner c-banner--top" style="background: url('<?php echo get_field('image'); ?>')">
            <div class="c-banner__title">
              <h2 class="o-ttl o-ttl--50 o-ttl--bold o-ttl--secondary"><?php the_title(); ?></h2>
              <p class="o-ttl--16 o-ttl--bold"><?php echo get_field('description_banner'); ?></p>
            </div>
          </div>
        </div>

 				<div class="c-institutes">
          <div class="o-wrapper o-wrapper--1140">
            <?php while( have_rows('institutes') ): the_row(); ?>

              <div class="c-institutes__item">
                <h2 class="o-ttl o-ttl--35 o-ttl--secondary js-institutes">
                  <?php echo get_sub_field('title'); ?>
                  <div class="c-institutes__btn"></div>
                </h2>
                
                <div class="c-institutes__content">
                  <?php echo get_sub_field('description'); ?>

                  <div class="c-institutes__institute">
                    <?php while( have_rows('institutions') ): the_row(); ?>

                      <div class="c-institutes__institute-item">
                        <h3 class="o-ttl o-ttl--22 o-ttl--secondary o-ttl--color-primary"><?php echo get_sub_field('title_secondary'); ?></h3>
                        <?php echo get_sub_field('description_secondary'); ?>
                      </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                  </div>
                </div>
              </div>

            <?php endwhile; wp_reset_postdata(); ?>
          </div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
