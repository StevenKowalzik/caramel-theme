<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * 
 * @since caramel 1.0
 */

$useLightbox = get_theme_mod( 'portfolio_use_lightbox' );
?>

	<article	class="caramel-portfolio-item"
				<?php if($useLightbox){echo 'data-lightbox="' . get_the_post_thumbnail_url() . '"';} ?>
				id="post-<?php the_ID(); ?>">

		<header style="display: none;" class="entry-header">

			<?php
			the_title(
				sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>'
			);
			?>

		</header><!-- .entry-header -->

		<?php
		if($useLightbox == false){
			echo '<a href="' . esc_url( get_permalink()) . '">';
		}
		
		echo get_the_post_thumbnail( $post->ID, 'large', $attr = 'class=caramel-portfolio-item__image' ); 

		if($useLightbox == false){
			echo '</a>';
		}
		?>

	</article>