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
			<a href="/"><img src="<?= get_stylesheet_directory_uri() . "/images/Logo.svg" ?>" /></a>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Works</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="/"><img src="<?= get_stylesheet_directory_uri() . "/images/Icon_color.svg" ?>" /></a>
			</ul>
		</div>
		<div>
			<h1>Manifest is a newborn theme.<br> Clean, simple and fast.</h1>
		</div>
	</header>