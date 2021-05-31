<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="<?php bloginfo('description'); ?> | <?php bloginfo('name') ?>	| <?php wp_title(''); ?>  <?php the_field('description_seo'); ?>">
		<title>
			<?php bloginfo('name') ?>	| <?php wp_title(''); ?> <?php the_field('title_seo'); ?>
		</title>

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <?php wp_head(); ?>
	</head>

	<body>
		
		<header>
			<nav>
				<?php
					$args = array(
						'menu' => 'principal',
						'container' => false
					);
					wp_nav_menu($args)
				?>
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri() ?>/img/rest.png" alt="Rest"></h1>
			<?php
				$otherpage = 17
			?>
			<p><?php the_field('addres', $otherpage); ?> - <?php the_field('district', $otherpage); ?> - <?php the_field('country', $otherpage) ?></p>
			<p class="telefone"><?php the_field('phone', $otherpage); ?></p>

		</header>