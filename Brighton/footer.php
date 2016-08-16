<?php ?>

</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'brighton' ); ?>">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
				) );
			?>
		</nav>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'brighton' ); ?>">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
				) );
			?>
		</nav>
	<?php endif; ?>

	<div class="site-info">
		<?php
			do_action( 'brighton_credits' );
		?>
		<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brighton' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'brighton' ), 'WordPress' ); ?></a>
	</div>
    
</footer>
	
</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
