<?php
/**
 * Template Name: Seite Bereich Bestattung
 */

get_header("bestattung"); ?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned unstacked-wrapper">
				<div class="unstacked-left">
					<article data-inviewport="entrance-fade-right" class="wrapper">
						<h1 class="site-title h1__title"><?php the_title(); ?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Wir begleiten Sie.</p>
						<div class="">
							<p class="">
								Der Erhalt der Menschenwürde bis zum Schluss.
							</p>
						</div>
					</article>
				</div>
				<div class="unstacked-right">
					<div class="img--wood-square-gray">
						<img class="img--wood-square-before img--wood-square-before-gray" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/oak-wood-gray.png" alt="Gray Wood Square">
						<img id="jumping-img" class="img--centered img--wood-square lazyload" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-18-DSC03400_web.jpg" alt="Persönliche Bestattung">
					</div>
				</div>
			</section>

			<section class="box--right-aligned unstacked-wrapper add-margin-bottom--large">
				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Unser Arbeitsfeld</h2>
						<p data-inviewport="entrance-fade-bottom" class="">
							Als Bestatter ist es unsere Aufgabe, Verstorbene in der richtigen Form zur letzten Ruhe zu geleiten und die Hinterbliebenen mit Erfahrung und Feingefühl zu begleiten.
						</p>
					</article>
				</div>
				<div class="unstacked-left">
					<div class="img--left-aligned">
						<img class="lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="0" data-rellax-mobile-speed="0" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-8-DSC03310_web.jpg" alt="Wir begleiten und geleiten Sie.">
					</div>
				</div>
			</section>

			<section class="box--left-aligned unstacked-wrapper">
				<div class="unstacked-left unstacked-left--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Wir unterstützen Sie ganzheitlich</h2>
						<p data-inviewport="entrance-fade-bottom" class="">
							In intensivem, persönlichem Kontakt leiten wir Sie durch diese schwere Zeit und versuchen, Ihnen das Abschiednehmen zu erleichtern. Wir übernehmen die behördlichen Wege und organisieren in enger Abstimmung mit Ihnen alles rund um die Bestattung und Trauerfeier. Sie können sich voll und ganz auf Ihre Trauer und das Abschiednehmen einlassen.
							Oft fehlt den Erwachsenen die Zeit und Kraft, um Minderjährigen zu erklären, was vor sich geht. Wir haben dazu spezielle Weiterbildungen absolviert und kümmern uns einfühlsam um Kinder und Jugendliche.
						</p>
					</article>
				</div>
				<div class="unstacked-right no-margin-bottom--small">
					<div class="img--right-aligned">
						<img class="lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="0" data-rellax-mobile-speed="0" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-10-DSC03314_web.jpg" alt="Begleitung mit Feingefühl von alt bis jung.">
					</div>
				</div>
			</section>

			<section class="box--right-aligned unstacked-wrapper add-margin-bottom--large">
				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Was ist Ihre Aufgabe?</h2>
						<p data-inviewport="entrance-fade-bottom" class="">
							Nachdem Sie vom Sterbefall erfahren, sollten Sie uns umgehend kontaktieren. Näheres besprechen wir mit Ihnen in aller Ruhe und Schritt für Schritt.
						</p>
					</article>
				</div>
				<div class="unstacked-left">
					<div class="img--left-aligned">
						<img class="lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="0" data-rellax-mobile-speed="0" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-16-DSC03376_web.jpg" alt="Persönliche Bestattung">
					</div>
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_just_call]"); ?>

			<section class="box--centered unstacked-wrapper">
				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Leitfaden im Todesfall</h2>
						<p data-inviewport="entrance-fade-bottom" class="">
							Was tun, wenn ein Familienmitglied stirbt?
						</p>
						<a class="btn btn--red btn--centered-aligned" role="button" href="/leitfaden-im-todesfall">Leitfaden anzeigen</a>
					</article>
				</div>
				<div class="unstacked-left">
					<div class="img--left-aligned">
						<img class="lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="0" data-rellax-mobile-speed="0" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/bestattung/bestattung/cut-for-web_highres-14-DSC03332_web.jpg" alt="Schritt für Schritt, in aller Ruhe">
					</div>
				</div>
			</section>

			<?php echo do_shortcode("[shortcode_testimonials_bestattung]"); ?>

			<?php echo do_shortcode("[shortcode_your_opinion]"); ?>

			<?php echo do_shortcode("[shortcode_partner_bestattung]"); ?>

			<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer();
?>
