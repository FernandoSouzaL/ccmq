<?php
	include '../../../../../wp-load.php';

	switch ($_GET['acao']) {

		case 'busca_noticias':

			$meta_data = $_POST["meta_data"];
			// $meta_category = $_POST["meta_category"];
			// $meta_pub = $_POST["meta_pub"];

				$args = array(
					'post_type' 		 => 'noticias',
					'order' 				 => 'DESC',
					'posts_per_page' => -1,
					'meta_query'		 => array(
							'relation' => 'AND',
								array(
									'tax_query' => array(
										'taxonomy' => 'datas',
										'field'    => 'slug',
										'terms'    => '2022',
									)
								),
								array(
									'tax_query' => array(
										'taxonomy' => 'categories',
										'field'    => 'slug',
										'terms'    => 'show',
									)
								),
								array(
									'tax_query' => array(
										'taxonomy' => 'publico',
										'field'    => 'slug',
										'terms'    => 'infantil',
									)
								)
						)
				);
				
				$query = new WP_Query( $args );

				while( $query->have_posts() ): $query->the_post(); ?>

					<?php the_title(); ?>

				<?php endwhile; ?>
	<?php 
			break;
		}
	?>