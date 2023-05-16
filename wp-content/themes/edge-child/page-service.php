<?php
/**
 * The template for displaying all pages.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(3);?>


<div id="content" class="service">

	<section id="section-bread" class="section fp-section fp-table">
		<div class="container">
			<?php mytheme_breadcrumb(); ?>
		</div>
	</section>

	<section id="section1" class="section fp-section fp-table service-1">

		<div class="container-mod2">

			<div class="container">

				<div class="container-content-in">

					<div class="container-content--in">	
						
							<div class="container-content---in">	
								<h2>BUSINESS</h2>
								<span>私たちの仕事</span>

								<h3>
									<p>様々な分野から</p>
									<p>お客様のビジネスをサポート</p>
								</h3>

								<div class="container-content---in_bottom">

									<div class="container-content---in_bottom_txt">
										主に製造業を豊かにするためのサービスをご提供しています。
										「それは昔から継承されている伝統技術から最新のITテクノロジーを活かしたサービスまで幅広く、 
										お客様へのサービスを充実させるため、会社を挙げて常にチャレンジしています。」
									</div>	



								</div>
								
							</div><!-- //container-content---in -->

					</div>

				</div><!-- //container-top-in -->
				
				

				<div class="container-content-in container-content-in-right">

					<div class="container-content--in">	
						
							<div class="container-content---in">

								<ul>
									<li>
										<a href="#service-2">
											<img src="<?php echo get_template_directory_uri() . '/images/service-2.png'; ?>">
											<!-- <div class="service-link"><h3>工作機械</h3><span class="arrow-1"><span class="arrow-1-1"></span></span></div> -->
										</a>
										
									</li>
									<li>
										<a href="#service-3">
											<img src="<?php echo get_template_directory_uri() . '/images/service-3.png'; ?>">
											<!-- <div class="service-link"><h3>クリエーティブ支援</h3><span class="arrow-1"><span class="arrow-1-1"></span></span></div> -->
										</a>
									</li>
									<li>
										<a href="#service-4">
											<img src="<?php echo get_template_directory_uri() . '/images/service-4.png'; ?>">
											<!-- <div class="service-link"><h3>テクトレージラボ</h3><span class="arrow-1"><span class="arrow-1-1"></span></span></div> -->
										</a>
									</li>
								</ul>	
					
								
							</div><!-- //container-content---in -->

					</div>

				</div><!-- //container-top-in -->	
			</div>
		</div>
	</section>
	<!-- // service-1 -->


	<section id="service-2" class="section service-2">

			<div class="cap-posi-ctr">

				<div class="cap-posi-l">
				</div>
				
				<div class="cap-posi-r">
				</div>

			
			</div>

			<div class="container">

				<h3>工作機械関連事業</h3>

				<div class="container-content--in">	

					<div class="container-content--in-txt">
						<p>
						日本のものづくりを支える製造業界。それをさらに支えるのがテクトレージの主事業です。
						工作機械の販売はもちろん制度の活用や工場内の環境整備まで様々な形でお客様をサポートし、
						共に歩んでいける良きパートナーとなれるよう、日々努力しています。
						</p>	
					</div>	



					<div class="container-content---in">

							<?php $fields01 = $cfs->get( 'add-work-company' ); ?>

							
							<?php foreach ((array)$fields01 as $field ):?>

								<div id="kousaku<?php echo $i++ ?>" class="container-content---in-ctr">

									<img src="<?php echo $field['img-work-company']; ?>">
									<h4><?php echo $field['title-work-company']; ?></h4>
									<p>
										<?php echo $field['txt-work-company']; ?>
									</p>

									<?php
									$iffield = $field['link-work-txt'];
									if($iffield) :
									?>
									<button><a href="<?php echo $field['link-work-txt']; ?>">さらに詳しく</a></button>
									<?php else : ?>
									
									<?php endif; ?>

												
								</div>

							<?php endforeach; ?>

					
	
						
					</div><!-- //container-content---in -->
				
				</div><!-- /container-content--in -->

			</div>
	</section>
	<!-- // service-2 -->


	<section id="service-3" class="section service-3">

		<div class="cap-posi-ctr">

			<div class="cap-posi-l">
			</div>
			
			<div class="cap-posi-r">
			</div>

		
		</div>

		<div class="container">

			<h3>クリエイティブ支援</h3>

			<div class="container-content--in">	

				<div class="container-content--in-txt">
					<p>
					社内にクリエイティブの部門を持つことは、テクトレージの明確な強みのひとつです。
					商社としての本分は欠かすこと無く、プラスアルファでまったく別分野のご提案を行うことで、
					新たに広がっていくお取引も少なくありません。
					こんなものは作れる？というご相談をお待ちしています。
					</p>	
				</div>	


				<div class="container-content---in">


					<?php $fields01 = $cfs->get( 'add-work-creative' ); ?>
					
					<?php foreach ((array)$fields01 as $field ):?>

					<div id="creative<?php echo $i++ ?>" class="container-content---in-ctr">

						<img src="<?php echo $field['img-work-creative']; ?>">
						<h4><?php echo $field['title-work-creative']; ?></h4>
						<p>
							<?php echo $field['txt-work-creative']; ?>
						</p>

						<?php
						$iffield = $field['link-work-creative'];
						if($iffield) :?>
						<button><a href="<?php echo $field['link-work-creative']; ?>">さらに詳しく</a></button>
						<?php else : ?>
						
						<?php endif; ?>

									
					</div>
					<?php endforeach; ?>

					
			</div><!-- //container-content---in -->

		</div>
	</section>
	<!-- // service-3 -->


	<section id="service-4" class="section service-4">

		<div class="cap-posi-ctr">

			<div class="cap-posi-l">
			</div>
			
			<div class="cap-posi-r">
			</div>

		
		</div>

		<div class="container">

			<h3>テクトレージラボ</h3>

			<div class="container-content--in">	

				<div class="container-content--in-txt">
					<p>
					テクトレージの「ものづくり」はいつも会話の中から生まれます。何気なく口にした言葉がヒントになり、
					新しいサービスや製品となって世に出ていくことも。
					社員の誰もがアイデアマンで、オフィスはさながら研究所。
					今日もどこかで何かが生まれようとしています。
					</p>	
				</div>
				


				<div class="container-content---in">

					<?php $fields01 = $cfs->get( 'add-work-lab' ); ?>
						
						<?php foreach ((array)$fields01 as $field ):?>

						<div id="labo<?php echo $i++ ?>" class="container-content---in-ctr">

							<img src="<?php echo $field['img-work-lab']; ?>">
							<h4><?php echo $field['title-work-lab']; ?></h4>
							<p>
								<?php echo $field['txt-work-lab']; ?>
							</p>

							<?php
							$iffield = $field['link-work-lab'];
							if($iffield) :?>
							<button><a href="<?php echo $field['link-work-lab']; ?>">さらに詳しく</a></button>
							<?php else : ?>
						
							<?php endif; ?>

										
						</div>
					<?php endforeach; ?>

					<?php
					/*
					
					<div class="container-content---in-ctr">

						<img src="<?php echo get_template_directory_uri() . '/images/service-2.png'; ?>">
						<h4>VIDEFIT</h4>
						<p>
							この文章はダミーですわたしたちは常にあなたのパートナーであり続けますが、<br />
							まずは仕事へのポリシーをぜひ知っ ていてください。<br />
							そうすれば、いつでも気軽にビジネストークができるはずです。<br />
						</p>
						<button><a href="#">さらに詳しく</a></button>
					
					</div>

					<div class="container-content---in-ctr">

						<img src="<?php echo get_template_directory_uri() . '/images/service-2.png'; ?>">
						<h4>空中浮遊ディスプレイ</h4>
						<p>
							この文章はダミーですわたしたちは常にあなたのパートナーであり続けますが、<br />
							まずは仕事へのポリシーをぜひ知っ ていてください。<br />
							そうすれば、いつでも気軽にビジネストークができるはずです。<br />
						</p>
						<button><a href="#">さらに詳しく</a></button>
					
					</div>

					<div class="container-content---in-ctr">

						<img src="<?php echo get_template_directory_uri() . '/images/service-2.png'; ?>">
						<h4>USB⇔RS232C for NC</h4>
						<p>
							この文章はダミーですわたしたちは常にあなたのパートナーであり続けますが、<br />
							まずは仕事へのポリシーをぜひ知っ ていてください。<br />
							そうすれば、いつでも気軽にビジネストークができるはずです。<br />
						</p>
						<button><a href="#">さらに詳しく</a></button>
					
					</div>

					<div class="container-content---in-ctr">

						<img src="<?php echo get_template_directory_uri() . '/images/service-2.png'; ?>">
						<h4>キカイカタログ</h4>
						<p>
							この文章はダミーですわたしたちは常にあなたのパートナーであり続けますが、<br />
							まずは仕事へのポリシーをぜひ知っ ていてください。<br />
							そうすれば、いつでも気軽にビジネストークができるはずです。<br />
						</p>
						<button><a href="#">さらに詳しく</a></button>
					
					</div>


					<div class="container-content---in-ctr">

						<img src="<?php echo get_template_directory_uri() . '/images/service-2.png'; ?>">
						<h4>中小企業GOTCHA!</h4>
						<p>
							この文章はダミーですわたしたちは常にあなたのパートナーであり続けますが、<br />
							まずは仕事へのポリシーをぜひ知っ ていてください。<br />
							そうすれば、いつでも気軽にビジネストークができるはずです。<br />
						</p>
						<button><a href="#">さらに詳しく</a></button>
					
					</div>

					<div class="container-content---in-ctr">

						<img src="<?php echo get_template_directory_uri() . '/images/service-2.png'; ?>">
						<h4>レーシングシミュレーター</h4>
						<p>
							この文章はダミーですわたしたちは常にあなたのパートナーであり続けますが、<br />
							まずは仕事へのポリシーをぜひ知っ ていてください。<br />
							そうすれば、いつでも気軽にビジネストークができるはずです。<br />
						</p>
						<button><a href="#">さらに詳しく</a></button>
					
					</div>

					*/
					?>


					
					
			</div><!-- //container-content---in -->

		</div>
	</section>
	<!-- // service-4 -->




<?php get_footer();?>