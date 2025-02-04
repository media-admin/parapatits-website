<?php
/**
 * Template Name: Projects
 */

get_header(); ?>

<main class="site-main">
	<div class="single-project site-content">

		<?php
  $image_id = get_post_thumbnail_id(get_the_ID());
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), "full");
  $alt_text = get_post_meta($image_id, "_wp_attachment_image_alt", true);
  ?>

		<section class="site-intro box--left-aligned unstacked-wrapper">
			<div class="unstacked-left">
				<article data-inviewport="entrance-fade-right" class="wrapper">
					<h1 class="site-title h1__title"><?php the_title(); ?></h1>
					<p class="single-project__meta h2__subheading site-subtitle h1__subtitle h1__subtitle--left-aligned"><?php the_field(
       "project-city"
     ); ?> - <?php the_field("project-date"); ?></p>
				</article>
			</div>
			<div class="unstacked-right">
				<img class="img--centered lazyload" src="<?php echo $featured_img_url; ?>" alt="<?php echo $alt_text; ?>">
			</div>
		</section>

		<div class="single-project__content-wrapper wrapper">
			<blockquote data-inviewport="entrance-fade-bottom" class="single-project__quote">
					<?php the_field("project-cite"); ?>
			</blockquote>
			<cite data-inviewport="entrance-fade-bottom" class="single-project__quote-author">
					<?php the_field("project-cite-author"); ?>
			</cite>

			<div data-inviewport="entrance-fade-bottom" class="single-project__content-container">
			<?php
   global $post;
   $content = apply_filters("the_content", $post->post_content);
   echo $content;
   ?>
			</div>
		</div>

		<?php echo do_shortcode("[shortcode_projects_slider]"); ?>

		<?php echo do_shortcode("[shortcode_recall]"); ?>

	</div>

</main>

<?php get_footer();
?>
