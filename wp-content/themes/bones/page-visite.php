<?php
/*
 Template Name: Visite
*/
 ?>
 
 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			 	<?php echo get_template_part('partials/breadcrumbs') ?>

        <div class="o-wrapper o-wrapper--1280">
          <div class="c-banner c-banner--top" style="background: url('<?php echo get_field('image_banner'); ?>')">
            <div class="c-banner__title">
              <h2 class="o-ttl o-ttl--50 o-ttl--bold o-ttl--secondary"><?php echo get_field('title_banner'); ?></h2>
              <p class="o-ttl--16 o-ttl--bold"><?php echo get_field('description_banner'); ?></p>
            </div>
          </div>
        </div>

 				<div class="c-visit">
          <div class="o-wrapper o-wrapper--1140">
            <div class="c-visit__text">
              <?php echo get_field('text'); ?>
            </div>
          </div>

          <div class="c-bg c-bg--wine">
            <div class="o-wrapper o-wrapper--1280">
              <div class="c-visit__container">
                <?php $block = get_field('block'); ?>
                <div class="c-visit__img">
                  <img src="<?php echo $block['image_left'] ?>">  
                </div>
  
                <div class="c-visit__txt">
                  <h2 class="o-ttl o-ttl--35 o-ttl--point o-ttl--white o-ttl--secondary"><?php echo $block['title'] ?></h2>
                  <?php echo $block['text'] ?>

                  <div class="c-visit__info">
                    <p class="o-ttl--16 o-ttl--white"><span class="o-ttl--pink o-ttl--bold">Telefone:</span> <?php echo $block['phone'] ?></p>
                    <p class="o-ttl--16 o-ttl--white"><span class="o-ttl--pink o-ttl--bold">E-mail:</span> <?php echo $block['email'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
