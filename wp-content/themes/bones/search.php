<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="cf">

			<main class="c-main" role="main">

				<div class="o-wrapper o-wrapper--1280">
					<h2 class="c-search__title">Resultados para: <?php echo esc_attr(get_search_query()); ?></h2>
				</div>

				<?php if (have_posts()): ?>
					<div class="o-wrapper o-wrapper--1280">
						
						<?php while (have_posts()) : the_post(); ?>

							<h3>
								<a class="c-search__item" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							
						<?php endwhile; ?>
						
					</div>

				<?php else : ?>

						<article id="post-not-found" class="hentry cf">
							<header class="article-header">
								<h1><?php _e( 'Desculpe, sem resultados.', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Tente buscar por outro termo.', 'bonestheme' ); ?></p>
							</section>
						</article>

				<?php endif; ?>

			</main>

		</div>

	</div>

<?php get_footer(); ?>
