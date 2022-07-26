<?php get_header(); ?>

  <div id="content">

    <div id="inner-content" class="cf">

      <main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <?php echo get_template_part('partials/breadcrumbs') ?>

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
              <h2 class="o-ttl o-ttl--35 o-ttl--secondary">Notícias</h2>

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

        <div class="o-wrapper o-wrapper--1280">
          <form id="filter" class="c-filter" action="#">
            <div class="c-filter__control">
              <select name="data" class="c-filter__select">
                <option value="all">Todas as Datas</option>
                <?php 
                  $taxData = get_terms( 'datas', array(
                    'parent' 	   => 0,
                    'hide_empty' => false,
                  ) );
    
                  foreach( $taxData as $data): 
                ?>
                  <option value="<?php echo $data->term_id; ?>"><?php echo $data->name; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="c-filter__control c-filter__control--secondary">
              <div class="c-filter__control">
                <select name="category" class="c-filter__select">
                  <option value="">Categoria</option>
                  <?php 
                    $taxData = get_terms( 'categories', array(
                      'parent' 	   => 0,
                      'hide_empty' => false,
                    ) );
      
                    foreach( $taxData as $data): 
                  ?>
                    <option value="<?php echo $data->term_id; ?>"><?php echo $data->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="c-filter__control">
                <select name="public" class="c-filter__select">
                  <option value="">Público</option>
                  <?php 
                    $taxData = get_terms( 'publico', array(
                      'parent' 	   => 0,
                      'hide_empty' => false,
                    ) );
      
                    foreach( $taxData as $data): 
                  ?>
                    <option value="<?php echo $data->term_id; ?>"><?php echo $data->name; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="c-filter__control">
                  <button class="c-filter__btn">Filtrar</button>
              </div>
            </div>
            
            <input type="hidden" name="action" value="filter">
          </form>
        </div>

        <div class="c-news">

          <div class="o-wrapper o-wrapper--1280">
            <?php if (have_posts()): ?>
                
              <div class="c-news__container">
                <?php while (have_posts()) : the_post(); ?>
    
                  <?php echo get_template_part( 'partials/news-item' ); ?>
    
                <?php endwhile; ?>
              </div>

              <?php if( $wp_query->max_num_pages > 1 ): ?>
                <div class="o-btn__center">
                  <div id="loadmore" class="o-btn o-btn--primary">Carregar mais</div>
                </div>
              <?php endif; ?>
      
            <?php else : ?>
      
              <article id="post-not-found" class="hentry cf">
                <header class="article-header">
                  <h1><?php _e( 'Nenhum resultado de busca', 'bonestheme' ); ?></h1>
                </header>
              </article>
    
            <?php endif; ?>
          </div>
        </div>

      </main>

    </div>

  </div>

<?php get_footer(); ?>
