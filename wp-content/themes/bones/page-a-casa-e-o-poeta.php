<?php
/*
 Template Name: A casa e o poeta
*/
 ?>
 
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

 				<div class="c-house">
          <div class="o-wrapper o-wrapper--1280">
            <div class="c-house__container">
              <?php $block = get_field('house'); ?>
              <div class="c-house__txt">
                <h2 class="o-ttl o-ttl--35 o-ttl--bold o-ttl--secondary o-ttl--point"><?php echo $block['title']; ?></h2>
                <?php echo $block['text_left']; ?>
              </div>
              
              <div class="c-house__img">
                <img src="<?php echo $block['image_right']; ?>">
              </div>
            </div>
          </div>

          <div class="o-wrapper o-wrapper--1140">
            <div class="c-house__txt-2">
              <?php echo $block['text'] ?>
            </div>
          </div>

          <div class="c-bg c-bg--wine c-bg--margin">
            <div class="o-wrapper o-wrapper--1280">
              <div class="c-house__container">
                <?php $block2 = get_field('poet'); ?>
                <div class="c-house__img">
                  <img src="<?php echo $block2['image_left']; ?>">
                </div>

                <div class="c-house__txt">
                  <h2 class="o-ttl o-ttl--35 o-ttl--bold o-ttl--secondary o-ttl--white o-ttl--point"><?php echo $block2['title']; ?></h2>
                  <div class="o-ttl--white">
                    <?php echo $block2['text_right']; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="o-wrapper o-wrapper--1140">
            <?php $association = get_field('association'); ?>
            <h2 class="o-ttl o-ttl--35 o-ttl--bold o-ttl--secondary o-ttl--point o-ttl--center"><?php echo $association['title']; ?></h2>
            <h3 class="o-ttl o-ttl--22 o-ttl--bold o-ttl--secondary o-ttl--center o-ttl--color-primary"><?php echo $association['title_secondary']; ?></h3>

            <div class="c-house__team">
              <?php while( have_rows('association') ): the_row(); ?>
                <?php while( have_rows('team') ): the_row(); ?>

                  <div class="c-house__team-item">
                    <h3 class="o-ttl--16 o-ttl--bold o-ttl--color-primary o-ttl--center"><?php echo get_sub_field('competence'); ?></h3>
                    <p class="o-ttl--16 o-ttl--center"><?php echo get_sub_field('name'); ?></p>
                  </div>

              <?php endwhile; endwhile; wp_reset_postdata(); ?>
            </div>

            <div class="c-house__content">
              <?php echo $association['text'] ?>
            </div>

            <div class="c-house__info">
              <p class="o-ttl--16 o-ttl--pink"><b>Endereço:</b> <?php echo $association['address']; ?></p>
              <p class="o-ttl--16 o-ttl--pink"><b>Telefone:</b> <?php echo $association['phones']; ?></p>

              <div style="display: flex; align-items: center;">
                <p class="o-ttl--16 o-ttl--pink"><b>Redes Sociais:</b></p>
                <div class="c-house__social-medias">
                  <?php while( have_rows('association') ): the_row(); ?>
                    <?php while( have_rows('social_media') ): the_row(); ?>

                      <a class="o-ttl--pink" href="<?php echo get_sub_field('link'); ?>">
                        <svg width="22" height="22">
                          <title><?php echo get_sub_field('name'); ?></title>
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#<?php echo get_sub_field('name'); ?>" />
                        </svg>
                      </a>

                  <?php endwhile; endwhile; wp_reset_postdata(); ?>
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
