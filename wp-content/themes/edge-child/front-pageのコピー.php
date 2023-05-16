<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$edge_settings = edge_get_theme_options(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body>


<header id="masthead" class="site-header top-header" role="banner">

	<div class="container">


        
		<div class="logo-container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri().'/images/logo_white.png'; ?>" alt="ロゴ" width="100px"></a>
		</div>

		<!-- Main Header============================================= -->
		<div id="sticky_header">
					<div class="container clearfix">

					<?php
					/*
					  	<h3 class="nav-site-title">
							<a href="<?php echo esc_url(home_url('/'));?>" title="<?php echo esc_attr(get_bloginfo('name', 'display'));?>"><?php bloginfo('name');?></a>
						</h3>
					*/
					?>	
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
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" type="button">
								<span class="line-one"></span>
					  			<span class="line-two"></span>
					  			<span class="line-three"></span>
						  	</button>
					  		<!-- end .menu-toggle -->
							<?php wp_nav_menu($args);//extract the content from apperance-> nav menu ?>
						</nav> <!-- end #site-navigation -->
						<?php } else {// extract the content from page menu only ?>
						<nav id="site-navigation" class="main-navigation clearfix" role="navigation" aria-label="<?php esc_attr_e('Main Menu','edge');?>">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" type="button">
								<span class="line-one"></span>
					  			<span class="line-two"></span>
					  			<span class="line-three"></span>
						  	</button>
					  	<!-- end .menu-toggle -->
							<?php	wp_page_menu(array('menu_class' => 'menu', 'items_wrap'     => '<ul id="primary-menu" class="menu nav-menu">%3$s</ul>')); ?>
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
		} ?>
		
	</div>
</header>






	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content','edge');?></a>
<!-- Masthead ============================================= -->





<div class="flex-container">


  <div id="side-bar">
    <div id="header-bar" class="hidden-pc">
      <!-- <div id="navToggle">
        <div> <span></span> <span></span> <span></span> </div>
      </div> -->
      <nav  id="slide_menu" class="accordion_nav">

	
	  
        <ul>
      	  <li><a href="#section1">Section1</a></li>
          <li><a href="#section2">Section2</a></li>
          <li><a href="#section3">Section3</a></li>
          <li><a href="#section4">Section4</a></li>
		  <li><a href="#section4">Section5</a></li>
        </ul>
	
	

		<?php 
		wp_nav_menu( array( 
			'theme_location' => 'test-menu' 
		) ); 
		?>


      </nav>
    </div>
  </div>  

  



  <div id="fullpage">

    <section class="section sec1">
    	<div class="container1 container">
			<h2>お客様の「めんどくさい」を</h2>
			<h2>サポートするパートナー企業です。</h2>
			<h3>Techtrage Co.,Ltd</h3>
		</div>
		<a class="scroll-prompt" href="#section2"><span>SCROLL DOWN</span></a>
    </section>

    <section class="section sec2">

	
    	<div class="container-mod2">

			<div class="container-top-in">

				<div class="container-top--in">
					
				<?php
				/*
					<h2><span class="color_FFA830">C</span>OMPANY<span class="sub_title"><?php $page_obj = get_page_by_path('company');
						$page = get_post( $page_obj );echo $page->post_title;?></span></h2>
				*/
				?>		
					
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

    <section class="section sec3 service">

		<div class="container-mod3">

			<div class="container-top-in">

				

				<h2>SERVICE<span>.01</span></h2>
				<span>事業紹介</span>

				<div class="container-top-service-bottom">
					<h3>工作機械販売事業</h3>
					<p>製造業の事業者様へ生産設備の更新や増設のご案内、</p>
					<p>それに伴う各種サポート業務を行っています。</p>
				</div><!-- //container-top-service-bottom -->

				<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/machine-tool-sales/">VIEW MORE</a></p>

			</div>
		</div><!-- //container-mod3 -->

    </section>

	<section class="section sec4 service">

		<div class="container-mod3">

			<div class="container-top-in">

				

				<h2>SERVICE<span>.02</span></h2>
				<span>事業紹介</span>
				<div class="container-top-service-bottom">
					<h3>レーシングシム販売事業</h3>
					<p>実車を運転しているかのように稼働する</p>
					<p>高度シミュレーターの代理販売と活用を行っています。</p>
				</div><!-- //container-top-service-bottom -->

				<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/machine-tool-sales/">VIEW MORE</a></p>

			</div>
		</div><!-- //container-mod3 -->

	</section>

	<section class="section sec5 service">

		<div class="container-mod3">

			<div class="container-top-in">

				

				<h2>SERVICE<span>.03</span></h2>
				<span>事業紹介</span>
				<div class="container-top-service-bottom">
					<h3>ウェアブランディング事業</h3>
					<p>企業ブランディングの一環として作業着をはじめとした</p>
					<p>オリジナルウェアの提案・制作を行います。</p>
				</div><!-- //container-top-service-bottom -->

				<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/machine-tool-sales/">VIEW MORE</a></p>

			</div>
		</div><!-- //container-mod3 -->

	</section>


	<section class="section sec6 service">

		<div class="container-mod3">

			<div class="container-top-in">

				

				<h2>SERVICE<span>.04</span></h2>
				<span>事業紹介</span>
				<div class="container-top-service-bottom">
					<h3>クリエイティブ支援</h3>
					<p>ロゴマークやホームページの制作、会社ムービーなど</p>
					<p>ビジュアル面での企業価値向上をお手伝いします。</p>
				</div><!-- //container-top-service-bottom -->

				<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/machine-tool-sales/">VIEW MORE</a></p>

			</div>
		</div><!-- //container-mod3 -->

	</section>

	
	<section class="section sec7">
    	<div class="container-mod2">

			<div class="container-top-in">

				<div class="container-top--in">
					
				<?php
				/*
					<h2><span class="color_FFA830">C</span>OMPANY<span class="sub_title"><?php $page_obj = get_page_by_path('company');
						$page = get_post( $page_obj );echo $page->post_title;?></span></h2>
				*/
				?>		
					
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

    	<div class="container-mod3">

			<div class="container-top-inーL">

				<div class="container-top--in">
					
					<div class="container-top---in">	
						<h2>News</h2>
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
						
							<h2>新着情報</h2>

							<?php
								global $post;
								$args = array( 
									'posts_per_page' => 3 ,
									'paged'  =>  get_query_var( 'paged', 1 ), //ページネーション
								
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) {
								setup_postdata($post);
								?>


								<dl>
									<dt><span class="day"><?php the_time('Y.m.d') ?> </span><span class="label"><?php the_category(',') ?></span></dt>
									<dd><span class="text"><a href="<?php the_permalink(); ?>"> <?php echo get_the_excerpt(); ?></a></span></dd>	
								</dl>

							<?php
							}
							wp_reset_postdata();
							?>


						</div><!-- //container-top---in_top -->

						
						<div class="container-top---in_bottom">

						<h2>VIDEFIT 新着動画</h2>

							<ul>
								<li>
									<img src="<?php echo get_template_directory_uri().'/images/test-1.png'; ?>">
									<a href="#">VIEW on VIDEFIT<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
								</li>

								<li>
									<img src="<?php echo get_template_directory_uri().'/images/test-2.png'; ?>">
									<a href="#">VIEW on VIDEFIT<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
								</li>
							
							

							</ul>
						
						

						</div>

						
						
					</div>

				</div>

			</div><!-- //container-top--in-R -->


		</div>
		
    </section>

    <section class="section sec9">

	<footer>
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
                    <!-- <p class="link-contact common-link"><a>問い合わせフォームへ<span></span></a></p> -->
					<p class="link_company"><a class="button" href="<?php echo home_url(); ?>/contact/">問い合わせフォームへ</a></p>
            </div>
            </div>
        </div>


        <div class="footer">

			<!-- <a class="section-top" href="#section1">topへ</a> -->
			<div class="cp_arrows"><a class="section-top" href="#section1">PAGE TO<span><i class="cp_arrow_up"></i></span></a></div>


            <div class="footer-top">
                <div class="footer-top-container">
                    <div class="footer-top-left">
                        <img src="<?php echo get_template_directory_uri() . '/images/footer_logo.png'; ?>">
                        <p class="footer-paragraph">株式会社テクトレージ</p>
                        <p class="footer-paragraph">神奈川県横浜市港北区小机町1521-5</p>
                        <h5>TEL 045-530-5941</h5>
                    </div>
                    <div class="footer-top-right">
					
					<?php
					/*
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu'
                        ) );
                    ?>
					*/
					?>
						<dl>
							<dt><a href="#">ABOUT</a><span>&#047;</span></dt>
							<dd>
								<ul>
									<li><a href="#">代表メッセージ</a></li>
									<li><a href="#">経営理念</a></li>
									<li><a href="#">会社概要</a></li>
								</ul>	
							</dd>	
						</dl>	

						<dl>
							<dt><a href="#">SERVICE</a><span>&#047;</span></dt>
							<dd>
								<ul>
									<li><a href="#">工作機械販売事業</a></li>
									<li><a href="#">レーシングシム販売事業</a></li>
									<li><a href="#">ウェアブランディング事業</a></li>
									<li><a href="#">クリエイティブ支援</a></li>
								</ul>	
							</dd>	
						</dl>
						
						<dl>
							<dt><a href="#">RECRUIT</a><span>&#047;</span></dt>
							<dd>
								<ul>
									<li><a href="#">社内での役割</a></li>
									<li><a href="#">働く環境や社内制度</a></li>
									<li><a href="#">データで見るテクトレージ</a></li>
									<li><a href="#">募集中の職種</a></li>
									<li><a href="#">エントリーフォーム</a></li>
								</ul>	
							</dd>	
						</dl>

						<dl>
							<dt><a href="#">NEWS</a><span>&#047;</span></dt>
							<dd>
								<ul>
									<li><a href="#">ものづくりmagazine</a></li>
								</ul>	
							</dd>	
						</dl>

                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="footer-middle-container">
                    <a href="https://www.facebook.com/techtrage/"><img src="<?php echo get_template_directory_uri() . '/images/facebook_icon.png'; ?>"></a>
                    <a href="https://twitter.com/techtrage"><img src="<?php echo get_template_directory_uri() . '/images/twitter_icon.png'; ?>"></a>
                    <img src="<?php echo get_template_directory_uri() . '/images/line_icon.png'; ?>">
                    <a href="https://www.meti.go.jp/policy/sme_chiiki/chiiki_kenin_kigyou/"><img src="<?php echo get_template_directory_uri() . '/images/ministry_of_economy_logo.png'; ?>"></a>
                    <a href="https://www.farobotsier.com/"><img src="<?php echo get_template_directory_uri() . '/images/sier_logo.png'; ?>"></a>
                    <a href="https://www.yokohamafc.com/"><img src="<?php echo get_template_directory_uri() . '/images/yokohama_fc_logo.png'; ?>"></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2021 Techtrage Co.,Ltd</p>
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