<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header>

	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;
		// End the loop.

		// Previous/next page navigation.
		the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'brighton' ),
			'next_text'          => __( 'Next page', 'brighton' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'brighton' ) . ' </span>',
		) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

	</main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
