<!DOCTYPE html>
<!--[if IE 9]><html  <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<!-- Domains to Prefetch - comment/uncomment as needed -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="stylesheet" href="https://use.typekit.net/gnz4lge.css">

		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Site Title -->
		<title><?php wp_title(); ?></title>

		<!-- paste google analytics code here -->
		<!-- ====== -->
		<?php global $template;
		echo '<!--' . $template . '-->'; ?>
		<!-- ====== -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class('menu-active'); ?> >
		<div id="background-image" style='background-image: url("<?= get_field('background_image'); ?>")'></div>
