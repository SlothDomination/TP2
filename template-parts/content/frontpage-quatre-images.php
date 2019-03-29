<?php
/**
 * Template part pour afficher les catégories du front-page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<div class="wp-block-column">
	<figure class="wp-block-image">
		<a href="<?php the_permalink(); ?>">
			<?php 
				$image = get_field('mon_image');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}		
			?>
		<?php the_title(); ?></a>
	</figcaption>
	</figure>
</div>