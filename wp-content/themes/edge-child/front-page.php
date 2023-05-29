<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$edge_settings = edge_get_theme_options(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

<!-- favicon -->

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=3">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=3">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=3">
<link rel="manifest" href="/site.webmanifest?v=3">
<link rel="mask-icon" href="/safari-pinned-tab.svg?v=3" color="#5bbad5">
<link rel="shortcut icon" href="/favicon.ico?v=3">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- End favicon -->


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZPXPF6');</script>
<!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZPXPF6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<header id="masthead" class="site-header top-header" role="banner">

	<div class="container">
		
        
		<div class="logo-container">
			 <h1 class="pc"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri().'/images/logo_white.png'; ?>" alt="株式会社テクトレージ"></a></h1>
			 <h1 class="sp"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri().'/images/logo_black.png'; ?>" alt="株式会社テクトレージ"></a></h1>
			
		</div>

		<!-- Main Header============================================= -->
		<div id="sticky_header">
					<div class="container clearfix">

				
					<!-- end .nav-site-title -->
						<!-- Main Nav ============================================= -->
						<?php
							if (has_nav_menu('primary')) { ?>
						<?php $args = array(
							'theme_location' => 'primary',
							'container'      => '',
							'items_wrap'     => '<ul id="primary-menu" class="menu nav-menu">%3$s</ul>',
							); ?>
						<nav id="site-navigation" class="main-navigation clearfix" role="navigation" aria-label="<?php esc_attr_e('Main Menu','edge');?>">


							<?php wp_nav_menu($args);//extract the content from apperance-> nav menu ?>
						</nav> <!-- end #site-navigation -->

						<div class="openbtn4" onclick="actionToggle();"><span></span><span></span><span></span></div>
						

							   <!-- メニュー -->

				

							<!-- Navigation -->
								<nav id="navi" class="navi drawer-content" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
									<div id="navi-in" class="navi-in">
									<?php wp_nav_menu(
									array (
										//カスタムメニュー名
										'theme_location' => 'mobile-menu',
										//コンテナを表示しない
										'container' => '',
										//カスタムメニューを設定しない際に固定ページでメニューを作成しない
										'fallback_cb' => '',
										//出力されるulに対してidやclassを表示しない
										'items_wrap' => '<ul id="mobile-menu" class="nav-menu">%3$s</ul>',
									)
									); ?>
								</div><!-- /#navi-in -->
								</nav>
								<!-- /Navigation -->
						
								</nav> <!-- end #site-navigation -->
					
						<?php } else {// extract the content from page menu only ?>

					  	<!-- end .menu-toggle -->
						  
							
						</nav> <!-- end #site-navigation -->



						<?php }
						$search_form = $edge_settings['edge_search_custom_header'];
						if (1 != $search_form) { ?>

					
						<?php } 

			echo '</div> <!-- end .container -->
			</div> <!-- end #sticky_header -->';
		$enable_slider = $edge_settings['edge_enable_slider'];
		edge_slider_value();
		if ($enable_slider=='frontpage'|| $enable_slider=='enitresite'){
			if(is_front_page() && ($enable_slider=='frontpage') ) {
				if($edge_settings['edge_slider_type'] == 'default_slider') {
						edge_page_sliders();
				}else{
					if(class_exists('Edge_Plus_Features')):
						edge_image_sliders();
					endif;
				}
			}
			if($enable_slider=='enitresite'){
				if($edge_settings['edge_slider_type'] == 'default_slider') {
						edge_page_sliders();
				}else{
					if(class_exists('Edge_Plus_Features')):
						edge_image_sliders();
					endif;
				}
			}
		} 
		?>
		
	</div>
</header>






	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content','edge');?></a>
<!-- Masthead ============================================= -->



  <div id="fullpage">




  <section id="section0" class="section sec1">
  	<div class="quiz">
		<a href="https://www.techtrage.co.jp/techtquiz/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/quiz-bnr.png'; ?>"></a>
	</div>
  	<span class="moveUp arrow"><a href="#section2"><i class="fa fa-angle-down" aria-hidden="true"></i></a></span>
		<video id="myVideo" loop muted data-autoplay playsinline autoplay>
			<source src="<?php echo get_template_directory_uri() . '/video/techtrage.mp4'; ?>" type="video/mp4">
		</video>
	
	</section><!-- section -->

	
									

    <section class="section sec2" style="background-image: url(<?php the_field('about-img',13); ?>)">

	

	<span class="moveUp arrow"><a href="#section3"><i class="fa fa-angle-down" aria-hidden="true"></i>
</a></span>


	
    	<div class="container-mod2">

			<div class="container-top-in">

				<div class="container-top--in">
					
				<?php
				/*
					<h2><span class="color_FFA830">C</span>OMPANY<span class="sub_title"><?php $page_obj = get_page_by_path('company');
						$page = get_post( $page_obj );echo $page->post_title;?></span></h2>
				*/
				?>		
						<div class="top-sp-img">
							<img src="<?php the_field('about-img-sp',13); ?>" alt="ABOUTへ">
						</div>
					
						<div class="container-top---in">	
							<h2>ABOUT</h2>
							<span>会社について</span>

							<div class="container-top---in_bottom">
							
								<p>お客様を支え、共に成長し続けていける</p>
								<p>会社作りをしています。2014年設立。</p>

							</div>

							<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/about/">VIEW MORE</a></p>
							
						</div>

				</div>

			</div><!-- //container-top-in -->


		</div>
		
    </section>

    <section class="section sec3" style="background-image: url(<?php the_field('service-img',13); ?>)">

	<span class="moveUp arrow"><a href="#section4"><i class="fa fa-angle-down" aria-hidden="true"></i></a></span>

		
		<div class="container-mod3">

			<div class="container-top-in">

				<div class="top-sp-img">
					<img src="<?php the_field('service-img-sp',13); ?>" alt="SERVICEページへ">
				</div>

				<div class="container-top--in">
						
					
						<div class="container-top---in">	
							<h2>SERVICE</h2>
							<span>事業紹介</span>

							<div class="container-top---in_bottom">
							
								<p>お客様の “めんどくさい” を肩代わり。</p>
								<p>常に寄り添い、尽くすことが心情です。</p>

							</div>

							<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/service/">VIEW MORE</a></p>
							
						</div>

				</div>

			</div><!-- //container-top-in -->


		</div>

    </section>



	
	<section class="section sec7" style="background-image: url(<?php the_field('recruit-img',13); ?>)">
		
		<span class="moveUp arrow"><a href="#section5"><i class="fa fa-angle-down" aria-hidden="true"></i></a></span>

    	<div class="container-mod3">

			<div class="container-top-in">

				<div class="top-sp-img">
					<img src="<?php the_field('recruit-img-sp',13); ?>" alt="RECRUITへ">
				</div>

				<div class="container-top--in">
						
					
						<div class="container-top---in">	
							<h2>RECRUIT</h2>
							<span>採用情報</span>

							<div class="container-top---in_bottom">
							
								<p>あなたの人生の1ページにふさわしい会社となれるよう</p>
								<p>常に成長を見据え、共に歩める仲間を募集しています。</p>

							</div>

							<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/recruit/">VIEW MORE</a></p>
							
						</div>

				</div>

			</div><!-- //container-top-in -->


		</div>
		
    </section>

	<section class="section sec8">

	<span class="moveUp arrow"><a href="#section6"><i class="fa fa-angle-down" aria-hidden="true"></i></a></span>

    	<div class="container-mod3">

	
			<div class="container-top-inーL">

				<div class="container-top--in">
					
					<div class="container-top---in">	
						<h2>NEWS</h2>
						<span>新着情報</span>

						<div class="container-top---in_bottom">
						
						<p>テクトレージが運営しているサービスサイトや</p>
						<p>ブログの更新情報です。</p>

						</div>

						<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/news/">VIEW MORE</a></p>
						
					</div>

				</div>


			</div><!-- //container-top-inーL -->
			

			<div class="container-top-inーR">

				<div class="container-top--in">
					
					<div class="container-top---in">
						
						<div class="container-top---in_top">
						
							<h2>ものづくりmagazine新着情報</h2>


							<?php
							require_once( './wp-load.php' );
							include_once( ABSPATH . WPINC . '/feed.php' );
							$feeduri = 'https://techtrage.jp/feed/';
							$rss = fetch_feed($feeduri);

							if (!is_wp_error($rss)) {
								$maxitems = $rss->get_item_quantity(5);//件数
								$rss_items = $rss->get_items( 0, $maxitems );
							}

							// 出力
						
							foreach ( $rss_items as $item ) :
							echo '<dl>';
							echo '<dt>';
							echo '<span class="day">'.date('Y/m/d',strtotime( $item->get_date() )).'</span>';
							echo '</dt>';
							echo '<dd>';
							echo '<span class="text">'.'<a href="'.$item->get_permalink().'">'.$item->get_title().'</a>'.'</span>';
							echo '</dd>';
								//echo '<li>'.date('Y/m/d',strtotime( $item->get_date() )).'<a href="'.$item->get_permalink().'">'.$item->get_title().'</a>';
							echo '</dl>';
							endforeach;
							
							?>


						</div><!-- //container-top---in_top -->

						
						<div class="container-top---in_bottom">

						<h2>VIDEFIT 新着動画</h2>

							<ul>
								<li>
									
									<?php $fieldname = get_post_meta(13, 'videfit-img-1', true); ?>
									<?php $fieldname = wp_get_attachment_image_src($fieldname, 'large'); ?>
									<img src="<?php echo $fieldname[0]; ?>">
																		

								
									<a href="<?php echo get_post_meta(13 , 'videfit-link-1' ,true); ?>">VIEW on VIDEFIT<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
								</li>

								<li>
									<?php $fieldname = get_post_meta(13, 'videfit-img-2', true); ?>
									<?php $fieldname = wp_get_attachment_image_src($fieldname, 'large'); ?>
									<img src="<?php echo $fieldname[0]; ?>">
									<a href="<?php echo get_post_meta(13 , 'videfit-link-2' ,true); ?>">VIEW on VIDEFIT<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
								</li>
							
							

							</ul>
						
						

						</div>

						
						
					</div>

				</div>

			</div><!-- //container-top--in-R -->


		</div>
		
    </section>

    <section class="section sec9">

	<footer id="footer-top-page">
        <div class="contact">
            <div class="contact-container">
                <div class="contact-item-left">
                    <img src="<?php echo get_template_directory_uri() . '/images/mail_gray.png'; ?>">
                    <div class="contact-item-left-paragraph">
                        <h2>CONTACT</h2>
                        <span>お問い合わせ</span>
                        
                    </div>
                </div>
                <div class="contact-item-right">
                    <p>製品の詳細や使用方法、会社のことなど</p>
                    <p>お気軽にお問い合わせください。</p>
                   
					<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/contact/">問い合わせフォームへ</a></p>
            </div>
            </div>
        </div>


        <div class="footer">

		
		     <div class="btn_arrows"><a class="section-top" href="#section1"><span>PAGE TOP</span></a></div> 


			 <div class="footer-top">
                <div class="footer-top-container">
                    <div class="footer-top-left">
                        <img src="<?php echo get_template_directory_uri() . '/images/footer_logo.png'; ?>">
                        <p class="footer-paragraph">株式会社テクトレージ</p>
                        <p class="footer-paragraph">神奈川県横浜市港北区小机町1521-5</p>
                        <h5>TEL 045-530-5941</h5>
						
						<ul class="footer-middle-sns">
							<li><a href="https://www.facebook.com/techtrage/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/facebook_icon.png'; ?>"></a></li>
							<li><a href="https://twitter.com/techtrage" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/twitter_icon.png'; ?>"></a></li>
							<li><a href="https://line.me/R/ti/p/%7Btechtrage%7D" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/line_icon.png'; ?>"></a></li>
						</ul>	
                    </div>


                    <div class="footer-top-right">

					<ul>
						<li>
							<h4><a href="<?php echo home_url(); ?>/about/">ABOUT</h4></strong>
							<p><a href="<?php echo home_url(); ?>/about/#about-2">代表メッセージ</a></p>
							<p><a href="<?php echo home_url(); ?>/about/#about-1">経営理念</a></p>
							<p><a href="<?php echo home_url(); ?>/about/#about-3">会社概要</a></p>
						</li>

						<li>
							<h4><a href="<?php echo home_url(); ?>/service/">SERVICE</a></h4>
							<p>工作機械販売事業</p>
							<ul>
								<li><a href="<?php echo home_url(); ?>/service/machine-sales/">・工作機械販売</a></li>
								<li><a href="<?php echo home_url(); ?>/service/teaching-support/">・教育支援の実施</a></li>
								<li><a href="<?php echo home_url(); ?>/service/subsidy-support/">・補助金・助成金の申請サポート</a></li>
								<li><a href="#">・システムインテグレーション</a></li>
								<li><a href="<?php echo home_url(); ?>/service/factory-layout/">・ファクトリーレイアウト</a></li>
							</ul>
						</li>

						<li>
							<h4></h4>
							<p>クリエイティブ支援</p>
							<ul>
								<li><a href="<?php echo home_url(); ?>/service/video-production/">・映像制作</a></li>
								<li><a href="<?php echo home_url(); ?>/service/development/">・ソフトウェア<br />　ハードウェア開発 </a></li>
							</ul>
						</li>

						<li>
							<h4></h4>
							<p>テクトレージラボ</p>
							<ul>
								<li><a href="<?php echo home_url(); ?>/service/videfit/">・VIDEFIT</a></li>
								<li><a href="<?php echo home_url(); ?>/service/miraipix/">・空中浮遊ディスプレイ</a></li>
								<li><a href="<?php echo home_url(); ?>/service/usb-rs232cfornc/">・USB⇔RS232C for NC</a></li>
								<li><a href="<?php echo home_url(); ?>/service/kikai-catalog/">・キカイカタログ</a></li>
								<li><a href="<?php echo home_url(); ?>/service/chusho-gotcha/">・中小企業 GOTCHA!</a></li>
							</ul>
						</li>

						<li class="footer-top-right-list-end">
							
							<p><a href="<?php echo home_url(); ?>/recruit/">RECRUIT</a></p>
							<p><a href="<?php echo home_url(); ?>/news/">NEWS</a></p>
							<p><a href="https://techtrage.jp/" target="_blank">ものづくりmagazine</a></p>
						</li>


					</ul>
					

					
						<div class="footer-link-bottom">
							
							<ul>

								<li><a href="<?php echo home_url(); ?>/service/kikai-catalog/">キカイカタログ</a></li>
								<li><a href="<?php echo home_url(); ?>/service/videfit/">VIDEFIT</a></li>
								<li><a href="<?php echo home_url(); ?>/service/chusho-gotcha/">中小企業GOTCHA!</a></li>
								<li><a href="<?php echo home_url(); ?>/service/knowledgeholder/">KnowLedge Holder</a></li>
								<li><a href="<?php echo home_url(); ?>/service/kh-scheduler/">KH Scheduler</a></li>
								
							</ul>	
						</div>	

                    </div>
                </div>
            </div>



            <div class="footer-middle">
                <div class="footer-middle-container">

					<ul class="pc">
					
						<li><a href="https://www.yokohamafc.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer_yokohama_fc_logo.png'; ?>"></a></li>
						<li class="footer-baystars">
						<a href="https://www.baystars.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer_baystars_logo.png'; ?>"></a>
						<p>
										株式会社テクトレージは<br />
										横浜DeNAベイスターズを応援しています。
									</p>
						</li>
						<li><a href="https://www.oita-trinita.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer_ooita_logo.png'; ?>"></a></li>
					</ul>
			
					<ul class="sp">

							<li class="footer-baystars">
						<a href="https://www.baystars.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer_baystars_logo.png'; ?>"></a>
						
						</li>
						<li><a href="https://www.yokohamafc.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer_yokohama_fc_logo.png'; ?>"></a></li>
						
						<li><a href="https://www.oita-trinita.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/footer_ooita_logo.png'; ?>"></a></li>
					</ul>	
				
                </div>
            </div>

            <div class="footer-bottom">
				<p>&copy; <?php echo date('Y'); ?> Techtrage Co.,Ltd</p>
            </div>
        </div>		
    </footer>

	
    </section>

  </div>

</div><!-- //flex-container -->

		
		






</div> <!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>