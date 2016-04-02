<?php
/**
 * @package Rachelle
 */

get_header(); ?>

<div class="work-page">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header>
		<section class="page-content">
			<?php
			while ( have_posts() ) : the_post();
				// get_template_part( 'template-parts/content', get_post_format() );
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'rachelle' ),
				'next_text'          => __( 'Next page', 'rachelle' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) ); ?>
		</section>

	<?php // If no content, include the "No posts found" template.
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
</div>

<?php get_footer(); ?>
