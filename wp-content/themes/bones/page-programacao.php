<?php
/*
 Template Name: Programação
*/
 ?>
 
 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			 	<?php echo get_template_part('partials/breadcrumbs'); ?>

 				<div class="c-prog">
          <div class="o-wrapper o-wrapper--1280">
              
          </div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
