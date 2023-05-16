<?php
/*

Template Name: ファースビュー画像テンプレート

*/


get_header(3);?>

<section id="section-bread" class="section fp-section fp-table">
	<div class="container">
		<?php mytheme_breadcrumb(); ?>
	</div>
</section>


<div id="content-temp" class="temp-frama-img">

	<section  class="section temp-frama-img-1" style="background-image: url('<?php echo CFS()->get( 'img-temp-img' ); ?>
'); ">
	


		<div class="container-mod1">

			<a href="#section" class="arrow_u"></a>

		</div>

	</section>
	<!-- // recruit-1 -->




	<section id="section"  class="section">

		<div class="container">

			<?php the_content(); ?>

		</div>

	</section>
	<!-- // recruit-2 -->

	<section class="section fp-section fp-table section-6">

		<div class="container-mod3-R bottom_breadcrumb">


			<div class="container-content-in mod3-R-bg-black">

				<div class="container-content--in position">
					
				<nav aria-label="Breadcrumb" class="breadcrumb">
				<?php mytheme_breadcrumb(); ?>

				<?php
				/*
					<ul>
						<li><a href="<?php echo home_url(); ?>/service/#service-2">工作機械販売事業</a></li>
						<li><a href="<?php echo home_url(); ?>/service/#service-3">クリエイティブ支援</a></li>
						<li><a href="<?php echo home_url(); ?>/service/#service-4">テクトレージラボ</a></li>
						<!-- <li><span aria-current="page">Product</span></li> -->
					</ul>
				*/
				?>	
				</nav>

				</div>



			</div><!-- //mod3-R-bg-white -->	

		</div>

	</section>
	<!-- // section-6 -->





<?php get_footer();?>

