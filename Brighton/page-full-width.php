<?php 
	/*
	Template Name: Full Width
	*/ 
?>
<?php get_header(); ?>

<div id="primary" class="content-area full-width-content">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_sidebar( 'content-bottom' ); ?>
<?php get_footer(); ?>
