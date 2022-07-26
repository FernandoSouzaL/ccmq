<?php get_header(); ?>

  <div id="content">

    <div id="inner-content" class="cf">

      <main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php echo get_template_part('partials/breadcrumbs') ?>

          <div class="c-single-news">

            <div class="o-wrapper o-wrapper--1420">
              <div class="c-single-news__banner" style="background: url('<?php echo get_field('image_banner'); ?>');">
                <div class="c-single-news__title">
                  <h2 class="o-ttl o-ttl--35 o-ttl--secondary"><?php the_title(); ?></h2>
                </div>
              </div>
            </div>

            <div class="o-wrapper o-wrapper--1280">
              <div class="c-single-news__container">
                <aside class="c-single-news__info-top">
                  <div class="c-single-news__date">
                    <p class="o-ttl--16 o-ttl--pink o-ttl--bold">Publicado: <br>
                      <?php echo get_the_date('d/m/Y'); ?>
                    </p>
                  </div>

                  <?php 
                    $author = get_field('author');
                    if($author):
                  ?>
                    <div class="c-single-news__author">
                      <p class="o-ttl--16 o-ttl--pink o-ttl--bold">Por: <br>
                        <?php echo $author; ?>
                      </p>
                    </div>
                  <?php endif; ?>
                </aside>
  
                <div class="c-single-news__content">
                  <hr class="c-single-news__underline c-single-news__underline--top">
      
                  <?php if( have_rows('layout') ): while( have_rows('layout') ): the_row(); ?>
      
                    <?php if( get_row_layout() == 'text_field' ): ?>
      
                      <div class="c-single-news__text-block">
                        <?php echo get_sub_field('text'); ?>
                      </div>
      
                    <?php elseif( get_row_layout() == 'image_field' ): ?>
      
                      <div class="c-single-news__image-block">
                        <img src="<?php echo get_sub_field('image') ?>" alt="<?php the_title(); ?>">
                        
                        <?php 
                          $photographer = get_sub_field('photographer'); 
                          if($photographer): ?>
                            <h3 class="o-ttl--16 o-ttl--pink">Imagem por: <?php echo $photographer; ?>.</h3>
                          <?php endif; ?>
      
                          <hr class="c-single-news__underline c-single-news__underline--img">
                      </div>
      
                    <?php endif; ?>
      
                  <?php endwhile; wp_reset_postdata(); endif; ?>
  
                  <div class="c-single-news__tags">
                      <?php 
                        $tags = get_the_tags(); 
                        if(!empty($tags)):
                          $taglist = "";
                          foreach($tags as $tag) {
                            $taglist .= $tag->name . ', ';
                          } 
                      ?>
                      <p class="o-ttl--16"><b class="o-ttl--pink">Palavras-chave:</b> <?php echo rtrim($taglist, ', '); ?>.</p>
                    <?php endif; ?>
                  </div>
  
                  <hr class="c-single-news__underline c-single-news__underline--bottom">
                  
                  <div class="c-single-news__info-bottom">
                    <p class="o-ttl--16 o-ttl--pink o-ttl--bold">Publicado: <?php echo get_the_date('d/m/Y'); ?></p>
  
                    <?php get_sidebar(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; ?>

        <div class="c-single-news__more-container">
          <div class="o-wrapper o-wrapper--870">
            <h2 class="o-ttl o-ttl--35 o-ttl--secondary o-ttl--point">Confira também</h2>
  
            <?php
              $args = array(
                'post_type'      => 'noticias',
                'order'          => 'DESC',
                'orderby'        => 'rand',
                'posts_per_page' => 3,
                'post__not_in'   => array($post->ID)
              );
  
              $query = new WP_Query($args);
  
              while( $query->have_posts() ): $query->the_post();
            ?>
  
              <a class="c-single-news__more" href="<?php echo get_permalink(); ?>">
                <h3 class="o-ttl o-ttl--25 o-ttl--secondary o-ttl--extrabold"><?php the_title(); ?></h3>
              </a>
  
            <?php endwhile; ?>
          </div>
        </div>

        <?php else : ?>

          <article id="post-not-found" class="hentry cf">
              <header class="article-header">
                <h1><?php _e( 'Oops, post não encontrado!', 'bonestheme' ); ?></h1>
              </header>
          </article>

        <?php endif; ?>

      </main>

    </div>

  </div>

<?php get_footer(); ?>
