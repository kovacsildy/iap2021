<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link href="src/scss/style.scss" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header>
		<div class="container">
			<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php endif; ?>
			<?php if (has_nav_menu('menu')): ?>
				<nav class="menu">
					<?php
					wp_nav_menu([
						'theme_location' => 'menu'
					]);
					?>
				</nav>
			<?php endif ?>
			<ul>
				<li><a href="/"><img src="<?= get_stylesheet_directory_uri() . "/images/Icon_color.svg" ?>" /></a>
			</ul>
		</div>
		<div class="container">
			<h1>Manifest is a newborn theme.<br> Clean, simple and fast.</h1>
		</div>
	</header>