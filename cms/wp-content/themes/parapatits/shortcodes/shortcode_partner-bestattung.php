<section class="partner box--centered">
	<article class="">
		<div data-inviewport="entrance-fade-bottom" class="">
			<h2 class="partner__title h2__title h2__heading">Unsere Partner</h2>
		</div>
		<div data-inviewport="entrance-fade-bottom" class="partner__container">
			<ul class="partner__listing">

				<?php
    $args = [
      "post_status" => "publish",
      "posts_per_page" => -1,
      "post_type" => "partner",
      "partner-category" => "bestattung",
    ];

    $loop = new WP_Query($args);

    while ($loop->have_posts()):

      $loop->the_post();

      $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), "full");
      ?>

						<li class="partner__listing-item">
							<a class="partner__link" href="<?php the_field(
         "partner-url"
       ); ?>" target="_blank">
								<div class="img-wrapper--partner__logo">
									<img data-inviewport="entrance-scale-backward-center-reverse" class="partner__logo lazyload" src="<?php echo $featured_img_url; ?>" alt="">
								</div>
							</a>
						</li>

					<?php
    endwhile;
    ?>

				<?php wp_reset_postdata(); ?>

			</ul>
		</div>
	</article>
</section>