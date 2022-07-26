<?php
/*
 Template Name: Contato
*/
 ?>
 
 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			 	<?php echo get_template_part('partials/breadcrumbs') ?>

 				<div class="c-contact">
          <div class="o-wrapper o-wrapper--1280">
            <h2 class="o-ttl o-ttl--50 o-ttl--secondary"><?php the_title(); ?></h2>

            <div class="c-contact__container">
              <div class="c-contact__left">
                <?php echo get_field('text'); ?>

                <div class="c-contact__content">
                  <?php while( have_rows('contact_info') ): the_row(); ?>
      
                    <div class="c-contact__item">
                      <?php $description = get_sub_field('description'); ?>

                      <h3 class="o-ttl o-ttl--16 o-ttl--color-primary"><?php echo get_sub_field('title'); ?></h3>
                      <?php if($description): ?>
                        <p class="c-contact__description"><?php echo $description; ?></p>
                      <?php endif; ?>

                      <div class="c-contact__info">
                        <div class="c-contact__phone">
                          <p><b>Telefone:</b> <?php echo get_sub_field('phone'); ?></p>
                        </div>

                        <div class="c-contact__email">
                          <p><b>E-mail:</b> <?php echo get_sub_field('email'); ?></p>
                        </div>
                      </div>
                    </div>  

                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
              </div>
  
              <div class="c-form">
                <?php echo do_shortcode('[contact-form-7 id="195" title="Contato"]'); ?>
              </div>
            </div>
          </div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
