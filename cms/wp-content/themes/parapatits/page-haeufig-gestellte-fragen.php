<?php
/**
 * Template Name: Seite FAQs
 */

get_header("tischlerei"); ?>

	<main class="site-main">
		<div class="site-content">
			<section class="faqs site-intro box--left-aligned unstacked-wrapper no-margin-bottom--small">
				<div class="unstacked-left">
					<article data-inviewport="entrance-fade-right" class="wrapper">
						<h1 class="site-title h1__title"><?php the_title(); ?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Fragen, die wir schon mehr als einmal beantworten durften.</p>
					</article>
				</div>
				<div class="unstacked-right">
					<img class="img--centered lazyload" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/tischlerei/haeufig-gestellte-fragen/parapatits-tischlerei_highres-19-DSC03271_web.jpg" alt="Durch präzise Planung steht einer reibungslosen Umsetzung nichts im Weg.">
				</div>
			</section>

			<section id="accordion" class="wrapper">
				<?php
    $args = [
      "post_status" => "publish",
      "posts_per_page" => 999,
      "post_type" => "faq",
      "faq-category" => "allgemeine-frage",
    ];

    $loop = new WP_Query($args);

    while ($loop->have_posts()):
      $loop->the_post(); ?>
						<article data-inviewport="entrance-fade-bottom" class="accordion__item">
							<button class="accordion"><?php the_title(); ?><p class="accordion__pointer"><i class="arrow down"></i></p></button>
							<div class="panel">
								<?php the_content(); ?>
							</div>
						</article>
				<?php
    endwhile;
    ?>
				<?php wp_reset_postdata(); ?>
			</section>

			<?php echo do_shortcode("[shortcode_special_question]"); ?>

			<?php echo do_shortcode("[shortcode_our_values]"); ?>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer();
?>
