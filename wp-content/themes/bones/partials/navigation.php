<div class="c-menu">

  <div class="c-menu__container">
    <ul class="c-menu__list">
      <li>
        <a href="<?php echo get_post_type_archive_link( 'tribe_events' ); ?>" class="o-ttl--15 o-ttl--bold o-ttl--upper">Programação</a>
      </li>
      
      <li>
        <a href="<?php echo get_permalink(117); ?>" class="o-ttl--15 o-ttl--bold o-ttl--upper">VISITE</a>
      </li>
      
      <li>
        <a href="#" class="o-ttl--15 o-ttl--bold o-ttl--upper js-no-action">Institucional</a>

        <div class="c-sub-menu">
          <ul class="c-sub-menu__list">
            <li>
              <a href="<?php echo get_permalink(43); ?>" class="o-ttl--15 o-ttl--white o-ttl--upper">A CASA E O POETA</a>
            </li>

            <li>
              <a href="#" class="c-sub-menu__active-current o-ttl--15 o-ttl--white o-ttl--upper js-active-menu-space">
                ESPAÇOS DA CASA 
                <svg width="6.211" height="10.995">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right" />
								</svg>
              </a>
            </li>

            <li>
              <a href="<?php echo get_permalink(85); ?>" class="o-ttl--15 o-ttl--upper o-ttl--white">Instituições do Estado</a>
            </li>
          </ul>

          <div class="c-sub-menu__controler">
            <div class="c-sub-menu__container">
              <ul class="c-sub-menu__content">
                <?php
                  $terms = get_terms(array(
                    'taxonomy' => 'categorias',
                    'parent' 	 => 0,
                    'hide_empty' => false,
                  ));

                  foreach ($terms as $term): 
                ?>

                  <div class="c-sub-menu__cat-list">

                    <li class="c-sub-menu__cat-title js-toggle-cat">
                      <?php echo $term->name; ?>

                      <svg width="6.211" height="10.995">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right" />
                      </svg>
                    </li>

                      <div class="c-sub-menu__cat-content">

                        <?php 
                          $args = array(
                            'post_type'      => 'espacos-da-casa',
                            'orderby'        => 'title',
                            'posts_per_page' => -1,
                            'tax_query'      => array(
                              array(
                                  'taxonomy' => 'categorias',
                                  'field'    => 'slug',
                                  'orderby'	 => 'title',
                                  'terms'    => $term->slug,
                              ),
                            ),
                          );
    
                          $query = new WP_Query($args);
    
                          while( $query->have_posts() ): $query->the_post();
                        ?> 
    
                            <li>
                              <a href="<?php echo get_permalink(); ?>" class="o-ttl--15 o-ttl--white"><?php the_title(); ?></a>
                            </li>
    
                        <?php endwhile; wp_reset_postdata(); ?>

                      </div>
                  </div>

                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </li>
      
      <li>
        <a href="<?php echo get_post_type_archive_link( 'noticias' ); ?>" class="o-ttl--15 o-ttl--bold o-ttl--upper">Notícias</a>
      </li>

      <li>
        <a href="<?php echo get_permalink(108); ?>" class="o-ttl--15 o-ttl--bold o-ttl--upper">Contato</a>
      </li>
    </ul>
  </div>

  <div class="c-search">
    <a href="#" class="js-search">
      <svg width="15" height="15">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search" />
      </svg>
    </a>

    <div class="c-search__block">
      <?php echo get_template_part('searchform'); ?>                    
    </div>
  </div>

  <div class="c-menu__hamburguer js-active-menu-mobile">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>