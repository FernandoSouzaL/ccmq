			<footer class="c-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="c-banner c-banner--footer" style="background: url('<?php echo get_field('image_banner', 132); ?>')">
					<div class="c-banner__center">
						<div class="o-wrapper o-wrapper--1280">
							<div class="c-footer__container">
								<div>
									<h2 class="o-ttl o-ttl--35 o-ttl--secondary o-ttl--white"><?php echo get_field('title_banner', 132); ?></h2>
									<a href="<?php echo get_field('link_banner', 132); ?>" class="o-btn o-btn--primary">Saiba mais</a>
								</div>	

								<div>
									<img src="<?php echo get_field('logo_banner', 132); ?>">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="o-wrapper o-wrapper--1280">

					<div class="c-footer__info">
						<div class="c-footer__item">
							<h3 class="o-ttl o-ttl--16 o-ttl--secondary o-ttl--upper">Institucional</h3>
							
							<ul class="c-footer__menu">
								<li><a href="<?php echo get_permalink(43); ?>">A Casa e o Poeta</a></li>
								<li><a href="<?php echo get_permalink(85); ?>">Instituições do Estado</a></li>
								<li><a href="<?php echo get_permalink(108); ?>">Contato</a></li>
							</ul>
						</div>

						<div class="c-footer__item">
							<h3 class="o-ttl o-ttl--16 o-ttl--secondary o-ttl--upper">Programação</h3>

							<ul class="c-footer__menu">
								<li><a href="<?php echo get_post_type_archive_link( 'noticias' ); ?>">Notícias</a></li>
							</ul>
						</div>

						<div class="c-footer__item">
							<h3 class="o-ttl o-ttl--16 o-ttl--secondary o-ttl--upper">Endereço</h3>

							<p><?php echo get_field('address', 132); ?></p>
						</div>

						<div class="c-footer__item">
							<h3 class="o-ttl o-ttl--16 o-ttl--secondary o-ttl--upper">Atendimento</h3>

							<p><?php echo get_field('attendance', 132); ?></p>
						</div>

						<div class="c-footer__item">
							<h3 class="o-ttl o-ttl--16 o-ttl--secondary o-ttl--upper">REDES:</h3>

							<ul class="c-menu__redes">
								<?php echo get_template_part('partials/main-redes-menu'); ?>
							</ul>
						</div>
					</div>

					<div class="c-footer__content">
						<div class="c-footer__sponsorship">
							<p class="o-ttl o-ttl--16 o-ttl--bold o-ttl--secondary o-ttl--center">PATROCÍNIO:</p>

							<div class="c-footer__sponsorship-container">
								<?php while( have_rows('sponsorship', 132) ): the_row(); ?>

									<div>
										<img src="<?php echo get_sub_field('image') ?>">
									</div>

								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>

						<div class="c-footer__realization">
							<p class="o-ttl o-ttl--16 o-ttl--bold o-ttl--secondary">REALIZAÇÃO:</p>

							<div class="c-footer__realization-container">
								<?php while( have_rows('realization', 132) ): the_row(); ?>

									<div>
										<img src="<?php echo get_sub_field('image') ?>">
									</div>

								<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div>
					</div>

					<p class="c-footer__copyright o-ttl o-ttl--center">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Todos os direitos reservados. <a href="http://ondaweb.com.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ondaweb-ico-black.png" /></a></p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php include get_template_directory() . '/partials/svgs.php' ?>

		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
