<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="CSS Whisperer, Front End Developer and UI Designer out of Vancouver, Canada">
	<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200;300;400&family=Merriweather:wght@300;400&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class('default'); ?>>

	<header id="header">

		<div class="header__logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="EKJohansen: CSS Whisperer" rel="home">
			<span class="header__logo--initials">EK</span>
			<span class="header__logo-j">J</span>
			<span class="header__logo-mobilehide">ohansen</span></a>
		</div>
		
		<nav id="menu" role="navigation">
			<button id="header__nav-toggle" aria-expanded="false" aria-label="Open the menu">
				<span class="header__nav-toggle--sr-only">Menu</span>
				<span class="header__nav-toggle--hamburger line-1" aria-hidden="true"></span>
				<span class="header__nav-toggle--hamburger line-2" aria-hidden="true"></span>
				<span class="header__nav-toggle--hamburger line-3" aria-hidden="true"></span>
			</button>

			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'header__nav--container' ) ); ?>
		</nav>

		  <!-- adding the theme swapper -->
		<div class="header__theme-swapper">
			Themes: <a id="dark" href="#">dark</a>  
			<a href="#" id="light">light</a>
			<a href="#" id="default">reset</a>
		</div>
	</header>