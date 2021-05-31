<?php
 //Template Name: Menu da Semana
?>
<?php get_header(); ?>
	<section class="container">
		<h2 class="subtitulo"><?php the_title(); ?></h2>
		<?php if(have_rows('menu_category')) : while(have_rows('menu_category')) : the_row() ?>
			<div class="menu-prato grid-8">
				<h2><?php the_sub_field('category_title') ?></h2>	
				<ul>
					<?php if(have_rows('menu_item')) : while(have_rows('menu_item')) : the_row() ?>
						<li>
							<span><sup>R$</sup> <?php the_sub_field('item_value') ?></span>
							<div>
								<h3><?php the_sub_field('item_name') ?></h3>
								<?php the_sub_field('item_description') ?>
							</div>
						</li>
					<?php endwhile; else: endif ?>
				</ul>
			</div>
		<?php endwhile; else: endif ?>
	</section>
<?php get_footer(); ?>