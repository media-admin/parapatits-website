<!DOCTYPE html>
<html lang='de'>
	<head>
		<!-- Meta Data -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="content-type" content="text/html; charset=macintosh" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Site Title -->
		<?php if (is_front_page() ) : ?>
			<title>Startseite | <?php bloginfo( 'name' ); ?></title>
		<?php else : ?>
			<title><?php wp_title($sep = ''); ?> | <?php bloginfo( 'name' ); ?></title>
		<?php endif; ?>


		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		<div class="container outer-container">
			<?php if(!empty($post->post_content)) { ?>
			<?php } else { ?>
			<?php
				 $args = array(
				 'post_status' => 'publish',
				 'posts_per_page' => 1,
				 'post_type' => 'hinweis',
				 'orderby'   => 'date',
				 'order' => 'DESC',
				 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<article class="message">
					<div class="message-header">
						<h2 class=""><?php the_title(); ?></h2>
					</div>

					<div class="message-body">
						<p class="">
							<?php the_content(); ?>
						</p>
					</div>
				</article>
			<?php
			endwhile;
			wp_reset_postdata();
			?>
			<?php };?>

		<header>
				<div class="navbar-brand">

					<a class="header__logo" href="<?php echo get_home_url(); ?>">
						<img class="header__logo-image" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logo-tischlerei-parapatits.svg" alt="Tischlerei Parapatits">
					</a>

					<a role="button" class="navbar-burger burger column column--menu" aria-label="menu" aria-expanded="false" data-target="navbar-main">
						<span class="burger-button__line" aria-hidden="true"></span>
						<span class="burger-button__line" aria-hidden="true"></span>
						<span class="burger-button__line" aria-hidden="true"></span>
					</a>

					<nav class="navbar" role="navigation" aria-label="main navigation">

						<div id="navbar-main" class="navbar-menu">
							<!-- Main Navigation -->
							<?php
								$defaults = array(
									'walker'         => new Bulma_Navwalker(),
									'menu'           => 'Hauptnavigation',
									'theme_location' => 'nav-menu-main',
									'depth'          => 2,
									'container'      => FALSE,
									'menu_class'     => '',
									'items_wrap'     => '%3$s',
									'fallback_cb'		=>	'Bulma_NavWalker::fallback'
								);
								wp_nav_menu( $defaults );
							?>
						</div>

						<script>
							jQuery(document).ready(function() {
								// Check for click events on the navbar burger icon
								jQuery(".navbar-burger").click(function() {
									// Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
									jQuery(".navbar-burger").toggleClass("is-active");
									jQuery(".navbar-menu").toggleClass("is-active");
								});
							});
						</script>

						<div class="navbar-end"></div>
					</div> <!-- div.navbar-end -->
				</nav>
			</div> <!-- div.navbar-brand -->

		</header>
