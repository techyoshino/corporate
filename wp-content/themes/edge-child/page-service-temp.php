<?php
/*

Template Name: 詳細ページテンプレート

*/


get_header(3);?>


<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>


<div id="content" class="corporate service-cont <?php echo $slug; ?>">




	<section  class="section fp-section fp-table section-1" style="background-image: url(<?php echo the_field('headimg'); ?>);">
	
	<div class="use-rgba-image">

		<div id="section-bread" class="section fp-section fp-table">
			<div class="container">
				<?php mytheme_breadcrumb(); ?>
			</div>
		</div>
	</div>	

	</section>
	<!-- // mission-1 -->

	<section  class="section fp-section fp-table section-2">

		<div class="container-mod3-R">


			<div class="container-content-in mod3-R-bg-black">

				<div class="container-content--in">
						
					
					<div class="container-content---in">
						
						<div class="container-content---in_top">

							<div class="container-content---in_top_navi">
								<!-- <h3>SERVICE</h3> -->

								<?php
								/*
								<nav aria-label="Breadcrumb" class="breadcrumb">
									<ul>
										<li><a href="">工作機械販売事業</a></li>
										<li><a href="">レーシングシム販売事業</a></li>
										<li><a href="">ウェアブランディング事業</a></li>
										<li><a href="">クリエイティブ支援</a></li>
										<!-- <li><span aria-current="page">Product</span></li> -->
									</ul>
								</nav>
								*/
								?>
							</div>	
					
							<div class="service_title"><h1><?php the_title(); ?></h1><span><?php the_field('titile-child'); ?></span></div>

						</div>
						
					</div>

				</div>
			</div><!-- //container-top-in -->	
		</div>

	</section>
	<!-- // section-2 -->


	<section  class="section fp-section fp-table section-3">

		<div class="container-mod2">
			<img src="<?php the_field('mainimg'); ?>">
		</div>


	</section>
	<!-- //  section-3 -->

	<section  class="section fp-section fp-table section-4">

		<div class="container-mod3-R">


			<div class="container-content-in mod3-R-bg-black">

				<div class="container-content--in">
						
					
					<div class="container-content---in">
						
						<div class="container-content---in_top">

							<h2>
								<?php the_field('content-title'); ?>
							</h2>

							<p>
							<?php the_field('content-txt'); ?>
							</p>
					
					
						

						</div>
						
					</div>

				</div>
			</div><!-- //container-top-in -->	
		</div>

	</section>
	<!-- // section-4 -->

	<section  class="section fp-section fp-table section-5">

		<div class="container-mod3-R initiatives">


			<div class="container-content-in mod3-R-bg-white">

				<div class="container-content--in position">

					<div class="container">
						<?php the_content(); ?>
					</div>			
		
				</div>



			</div><!-- //mod3-R-bg-white -->	

		</div>

	</section>
	<!-- // section-5 -->


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