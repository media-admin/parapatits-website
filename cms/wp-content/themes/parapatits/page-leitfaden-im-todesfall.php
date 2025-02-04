<?php
/**
 * Template Name: Seite Leitfaden im Todesfall
 */

get_header("bestattung"); ?>

	<main class="site-main">
		<div class="site-content">
			<section class="site-intro box--left-aligned unstacked-wrapper no-margin-bottom">
				<div class="unstacked-left">
					<article data-inviewport="entrance-fade-right" class="wrapper">
						<h1 class="site-title h1__title"><?php the_title(); ?></h1>
						<p class="site-subtitle h1__subtitle h1__subtitle--left-aligned">Was tun, wenn ein Familienmitglied stirbt?</p>
					</article>
				</div>
				<div class="unstacked-right add-margin-bottom">
					<img class="img--centered lazyload" src="<?php bloginfo(
       "template_directory"
     ); ?>/assets/images/bestattung/leitfaden-im-todesfall/cut-for-web_highres-12-DSC03325_web.jpg" alt="Rufen Sie uns an. Wir kümmern uns um alles Weitere.">
				</div>
			</section>

			<section class="box--right-aligned unstacked-wrapper">
				<div class="unstacked-right unstacked-right--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Leitfaden</h2>
						<div data-inviewport="entrance-fade-bottom" class="">
							<p class="">
								Die erste und wichtigste Aktion ist die Kontaktaufnahme mit uns. Danach werden wir Sie um ein persönliches Treffen bei uns bitten. Bitte bringen Sie dabei die benötigen Dokumente mit. Alle weiteren Schritte besprechen wir gemeinsam in aller Ruhe, mit Umsicht und Feingefühl.
							</p>
							<a class="btn btn--red btn--centered-aligned" role="button" href="/weiterfuehrende-infos/#wichtige-dokumente">Dokumente anzeigen</a>
						</div>
					</article>
				</div>
				<div class="unstacked-left">
					<div class="img--right-aligned">
						<img class="lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="0" data-rellax-mobile-speed="0" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/bestattung/leitfaden-im-todesfall/cut-for-web_highres-17-DSC03396_web.jpg" data-rellax-speed="-2" alt="Begleitung mit Feingefühl">
					</div>
				</div>
			</section>

			<section class="box--centered unstacked-wrapper">
				<div class="unstacked-left unstacked-left--content">
					<article class="wrapper content-wrapper">
						<h2 data-inviewport="entrance-fade-bottom" class="h2__heading">Unsere Leistungen</h2>
						<div data-inviewport="entrance-fade-bottom" class="">
							<p class="">
								Erfahren Sie, wie wir Sie unterstützen können.
							</p>
							<a data-inviewport="entrance-fade-bottom" class="btn btn--red btn--centered-aligned" role="button" href="/unsere-leistungen">Leistungen anzeigen</a>
						</div>
					</article>
				</div>
				<div class="unstacked-right">
					<div class="img--fullwidth">
						<img class="add-margin-bottom--small lazyload rellax" data-rellax-speed="-2" data-rellax-xs-speed="0" data-rellax-mobile-speed="0" data-rellax-tablet-speed="-2" data-rellax-desktop-speed="-2" src="<?php bloginfo(
        "template_directory"
      ); ?>/assets/images/bestattung/leitfaden-im-todesfall/cut-for-web_highres-5-DSC03387_web.jpg" alt="Umfassende Begleitung">
					</div>
				</div>
			</section>
		</div>

		<?php echo do_shortcode("[shortcode_recall]"); ?>

		</div>
	</main>

<?php get_footer();
?>
