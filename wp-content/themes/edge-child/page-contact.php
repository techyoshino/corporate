<?php
/**
 * The template for displaying all pages.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(3);?>

<?php
/*
<section id="section-bread" class="section fp-section fp-table section-bread-sp">
	<div class="container">
		<?php mytheme_breadcrumb(); ?>
	</div>
</section>
*/
?>


<div id="content" class="contact-Ctr">

	<section id="section1" class="section fp-section fp-table contact-1">

	
		<div class="container">

			<div class="container-content-in">
				
				<h2><?php the_title(); ?></h2>

				<div class="container-content-in_bottom">


					<?php the_content(); ?>

								

				</div>

			</div><!-- //container-top-in -->	

		</div>

	

	</section>
	<!-- // mission-1 -->

	



<?php get_footer(3);?>