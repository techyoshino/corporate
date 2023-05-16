<?php
/**
 * The template for displaying all pages.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(3);?>


<div id="content" class="mission">

<?php
/*

<section id="section-bread" class="section section-bread-sp fp-section fp-table">
	<div class="container">
		<?php mytheme_breadcrumb(); ?>
	</div>
</section>

*/
?>


	<section id="section1" class="section fp-section fp-table mission-1">

		<div class="container-mod2">

			<div class="container">

				<div class="container-content-in">

					<div class="container-content--in">
						
						
						
							<div class="container-content---in">	
								<h2 id="about-1">MISSION</h2>
								<span>企業理念</span>

								<h3>
									<p>Let’s Change!!</p>
								</h3>

								<div class="container-content---in_bottom">

									<div class="container-content---in_bottom_L">
								
										お客様の変化に協力する良きパートナーとなるため、
										テクトレージ自身が常に進化を続けていきます。
										弊社は Creative / Consult / Cordial の３つのCをモットーに掲げ、
										お客様により良いサービスをご提供し、
										その成長を支える企業として業界の常識に捕らわれず、
										新しい製品・サービスの開発研究を続けていきます。

									</div>

									<div class="container-content---in_bottom_R">

										<img src="<?php echo get_template_directory_uri() . '/images/mission-2.png'; ?>">

									</div>

								</div>
								
							</div>

					</div>
				</div><!-- //container-top-in -->	

			</div>

		</div>

	</section>
	<!-- // mission-1 -->

	<section  class="section fp-section fp-table mission-2">

		<img src="<?php echo get_template_directory_uri() . '/images/mission-5.png'; ?>">

	</section>
	<!-- // mission-2 -->


	<section id="about-2" class="section fp-section fp-table mission-3">

		<div class="container-mod2">

		

				<div class="container-content-in">

					<div class="container-content--in">
							
						
						<div class="container-content---in">
							
							<div class="container-content---in_top">
						
								<h2 id="about-2">MESSAGE</h2>
								<span>代表メッセージ</span>

							</div>

							<div class="container-content---in_bottom">

								<h3>
									<?php the_field('message-title'); ?>
								</h3>

							
								<div class="container-content---in_bottom-txt">
									
									<?php the_field('message-txt'); ?>

									<h3><span>代表取締役</span>林充</h3>
									<img class="pc" src="<?php echo get_template_directory_uri() . '/images/mission-7.png'; ?>">
								</div>
							
								<div class="container-content---in_bottom-photo">
									<img src="<?php the_field('message-img'); ?>">
									<img class="sp" src="<?php echo get_template_directory_uri() . '/images/mission-7.png'; ?>">
								</div>	
		

							</div>
							
						</div>

					</div>
				</div><!-- //container-top-in -->	
		</div>

	</section>
	<!-- //  mission-3 -->

	<section  class="section fp-section fp-table mission-4">

		<img src="<?php echo get_template_directory_uri() . '/images/mission-3.png'; ?>">

	</section>
	<!-- // mission-4 -->


	<section id="about-3" class="section fp-section fp-table mission-5">

		<div class="container-mod2">

			<div class="container">

				<div class="container-content-in">

					<div class="container-content--in">
						
					<?php
					/*
						<h2><span class="color_FFA830">C</span>OMPANY<span class="sub_title"><?php $page_obj = get_page_by_path('company');
							$page = get_post( $page_obj );echo $page->post_title;?></span></h2>
					*/
					?>		
						
							<div class="container-content---in">	
								<h2 id="about-3">COMPANY<span class="pc"><img src="<?php echo get_template_directory_uri() . '/images/mission-6.png'; ?>"></span></h2>
								<span>会社概要</span>

							

								<div class="container-content---in_bottom">

								<?php the_field('company-overview'); ?>

									<div class="about_banner_col">
										<a href="https://www.techtrage.co.jp/techtquiz/"><img src="<?php echo get_template_directory_uri() . '/images/quiz_bnr.png'; ?>"></a>
									</div>


									<div class="access_col">

										<h3>アクセスマップ</h3>

										<div class="access_col_in">
											<p>横浜OFFICE　〒222-0036　神奈川県横浜市港北区小机町1521-5</p>

											<div class="access_map">
												<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3247.834536349238!2d139.59405741517298!3d35.50836943023495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5qiq5rWcT0ZGSUNF44CA44CSMjIyLTAwMzbjgIDnpZ7lpYjlt53nnIzmqKrmtZzluILmuK_ljJfljLrlsI_mnLrnlLoxNTIxLTU!5e0!3m2!1sja!2sjp!4v1662005696255!5m2!1sja!2sjp" width="1170" height="323" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											</div>	

										</div><!-- //access_col_in -->

										<div class="access_col_in">
											
											<p>大阪OFFICE　〒577-0841　大阪府東大阪市足代3丁目1番7号 リップル布施南ビル602B</p>

											<div class="access_map">
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6563.263741192422!2d135.55889114705545!3d34.66399879589407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dfcb9877cee5%3A0xe2354b5bf48c90ce!2z5biD5pa95Y2X44OT44Or!5e0!3m2!1sja!2sjp!4v1679559075210!5m2!1sja!2sjp" width="1170" height="323" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											</div>	

										</div><!-- //access_col_in -->

										<div class="access_col_in">
											<p>大分OFFICE　〒870-0035　大分県大分市中央町4-2-29 園田ビル 202</p>

											<div class="access_map">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.0842790476026!2d131.6032672!3d33.23809539999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35469f1038e13687%3A0x1b753820894e8caa!2z5qCq5byP5Lya56S-44OG44Kv44OI44Os44O844K4IOWkp-WIhuOCquODleOCo-OCuQ!5e0!3m2!1sja!2sjp!4v1680596077440!5m2!1sja!2sjp" width="1170" height="323" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											</div>	

										</div><!-- //access_col_in -->


										<div class="access_col_in">
											<p>茨城OFFICE　〒310-0801　茨城県水戸市桜川1-9-16 すざくHOUSE 110号室</p>

											<div class="access_map">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.6464187429387!2d140.4704157!3d36.3693425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60222526a78f69cf%3A0xb50cb41010f99ce7!2z5qCq5byP5Lya56S-44OG44Kv44OI44Os44O844K4IOiMqOWfjuOCquODleOCo-OCuQ!5e0!3m2!1sja!2sjp!4v1680596402089!5m2!1sja!2sjp" width="1170" height="323" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											</div>	

										</div><!-- //access_col_in -->

										<div class="access_col_in">
											<p>静岡OFFICE　〒431-1402　静岡県浜松市北区三ケ日町都筑505-1 シャンボール浜名湖2号館　819号室</p>

											<div class="access_map">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.9311353041785!2d137.5753548!3d34.782508899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601b2f0f517e9021%3A0x1ab5b6540df5a34d!2z5qCq5byP5Lya56S-44OG44Kv44OI44Os44O844K4IOmdmeWyoeOCquODleOCo-OCuQ!5e0!3m2!1sja!2sjp!4v1680596453416!5m2!1sja!2sjp" width="1170" height="323" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											</div>	

										</div><!-- //access_col_in -->

									</div>

								</div>

								
								
							</div>

					</div>
				</div><!-- //container-top-in -->	

			</div>

		</div>

	</section>
	<!-- // mission-5 -->

	<section  class="section mission-6 sp">

	<ul>
		<li><a href="#about-1">企業理念</a></li>
		<li><a href="#about-2">代表メッセージ</a></li>
		<li><a href="#about-3">会社概要</a></li>
		
	</ul>


	</section>
	<!-- // mission-6 -->





<?php get_footer();?>