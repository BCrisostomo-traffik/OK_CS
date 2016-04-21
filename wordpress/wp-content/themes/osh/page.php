<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>





<div id="form-container" class="small-12 columns end" style="z-index:999;">
	<div id="form-inner">
		<div id="top-form" class="text-center">


			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				?>
				<h1>
					<?php the_field('title_' . $language);?>

				</h1>
			<p><?php
				the_field('content_' . $language); ?>

				</p>
			<?php
			endwhile;
			?>

		</div>

	</div>
</div>



<?php get_footer(); ?>
