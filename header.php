<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<?php wp_head(); ?>
<?php inv_custom_header_scripts(); ?>
</head>

<body <?php body_class(); ?>  >
<div class="page">

	<header class="header bg-dark">
		<div class="overlay"></div>
		
		<nav class="navbar navbar-expand-lg navbar-dark" role="navigation">		
		  <div class="container">		  		
			<a class="navbar-brand" href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="navbar-brand__logo">
			</a>			

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-main-navbar-collapse-1" aria-controls="bs-main-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'decentralized' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>				
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-main',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-main-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>		
		  </div>
		</nav>
		
		<?php 
		//utilities
		show_widjet_tape(); 
		show_breadcrumbs(); 		
		?>	

	</header>
	
	<div class="page__content content">
		
