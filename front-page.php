<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package galifao
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="expanded row">		
			<div id="destaque" class="small-12">

				<?php

				$args = array(
					'post_type' => array( 'ritornelo', 'post' ),
					'posts_per_page' => '1', 
					'tag' => 'destaque'

					);
				$query = new WP_Query( $args );



				if ( $query->have_posts() ) {

					while ( $query->have_posts() ) 

					{

						$query->the_post();




					}

				}

				wp_reset_postdata();

				?>
<div class="expanded row">
	<div id="enfoque" class="hide-for-small-only medium-12 columns;">
				<?php 

				$image = get_field('enfoque');

				if( !empty($image) ): ?>

				<img class="small-12 columns" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
			

	</div><!--enfoque-->				
</div><!--expanded row-->


<div class="expanded row">
	<div id="enfoquepeq" class="show-for-small-only small-12 columns;">
				<?php 

				$image = get_field('enfoque');

				if( !empty($image) ): ?>

				<img class="small-12 columns" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
			<h1 class="titulo-enfoque vermelho small-6 medium-6 large-7">

					<?php the_title(); ?>	</h1>

	</div><!--enfoque-->				
</div><!--expanded row-->

		</div><!--destaque-->

	</div><!--expanded row-->

	<div class="row small-up-1 medium-up-2 large-up-4">


		<?php

		$args = array(
			'post_type' => array( 'ritornelo', 'post' ),

			);
		$query = new WP_Query( $args );



		if ( $query->have_posts() ) {

			while ( $query->have_posts() ) 

			{

				$query->the_post();
				echo'<div class="column">';
				the_post_thumbnail();

				the_title(); 
				echo '</div>';

			}

		}

		wp_reset_postdata();

		?>


	</div><!--row small-up-1 medium-up-2 large-up-4-->



</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();


