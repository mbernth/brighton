<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Brighton
 * @since Brighton 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="images/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="images/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="images/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="images/widetile.png" />
	<meta name="msapplication-square310x310logo" content="images/largetile.png" />
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin-ext" rel="stylesheet">
    
</head>

<body <?php body_class(); ?>>
<div id="page" class="page-wrap">
	
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'brighton' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    
			<div class="site-header-main">
            
				<hgroup>
					<?php brighton_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</hgroup>

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'brighton' ); ?></button>

					<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'brighton' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu',
							) );
						?>
					</nav><!-- .main-navigation -->
					<?php endif; ?>

					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'brighton' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>',
								) );
							?>
						</nav><!-- .social-navigation -->
					<?php endif; ?>
				
				<?php endif; ?>
                
			</div><!-- .site-header-main -->
		
        </header><!-- .site-header -->
        
        <?php if ( get_header_image() ) : ?>
			<?php
				/**
				 * Filter the default brighton custom header sizes attribute.
				 *
				 * @since Brighton 1.0
				 *
				 * @param string $custom_header_sizes sizes attribute
				 * for Custom Header. Default '(max-width: 709px) 85vw,
				 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
				 */
				$custom_header_sizes = apply_filters( 'brighton_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
			?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div><!-- .header-image -->
		<?php endif; // End header image check. ?>

		<div id="content" class="site-content">
