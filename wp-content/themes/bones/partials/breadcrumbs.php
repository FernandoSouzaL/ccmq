<?php 
  $page = get_the_title();
  if($page == 'Home'):
?>
  <div class="c-breadcrumbs">
    <div class="o-wrapper o-wrapper--1280">
      <?php 
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p class="o-ttl--16 o-ttl--bold">','</p>' );
        } 
      ?>
    </div>
  </div>
<?php else: ?>
  <div class="c-breadcrumbs c-breadcrumbs--secondary">
    <div class="o-wrapper o-wrapper--1280">
      <?php 
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p class="o-ttl--16 o-ttl--bold">','</p>' );
        } 
      ?>
    </div>
  </div>
<?php endif; ?>