<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
$edge_settings = edge_get_theme_options();
if($edge_settings['edge_blog_layout'] == 'photography_layout' && !is_page() && !is_single()){
	if(class_exists('WooCommerce') && is_shop()): ?>
		</div> <!-- end .container -->
	<?php else: ?>
	</div> <!-- end #main -->
	<?php
	endif;
}else{?>
</div> <!-- end .container -->
<?php
} ?>
</div> <!-- end #content -->
<!-- Footer Start ============================================= -->



<footer id="footer-others-page">

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

		
		     <div class="btn_arrows"><a class="section-top" href="#content"><span>PAGE TOP</span></a></div> 


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
					



					<?php
					/*
					
					
						<dl>
							<dt><a href="<?php echo home_url(); ?>/about/">ABOUT</a><span>&#047;</span></dt>
							<dd>
								<ul>
									<li><a href="<?php echo home_url(); ?>/about/#about-2">代表メッセージ</a></li>
									<li><a href="<?php echo home_url(); ?>/about/#about-1">経営理念</a></li>
									<li><a href="<?php echo home_url(); ?>/about/#about-3">会社概要</a></li>
								</ul>	
							</dd>	
						</dl>	

						<dl class="foooter-kousaku">
							<dt><a href="<?php echo home_url(); ?>/service/">SERVICE</a><span>&#047;</span></dt>
							<dd>
								<div class="footer-top-right-in">
									<span>工作機械販売事業</span>
									<ul>
										<li><a href="<?php echo home_url(); ?>/service/machine-sales/">工作機械販売</a></li>
										<li><a href="<?php echo home_url(); ?>/service/teaching-support/">教育支援の実施</a></li>
										<li><a href="<?php echo home_url(); ?>/service/subsidy-support/">補助金・助成金の申請サポート</a></li>
										<li><a href="#">システムインテグレーション</a></li>
										<li><a href="<?php echo home_url(); ?>/service/factory-layout/">ファクトリーレイアウト</a></li>
									</ul>
								</div>
								<div class="footer-top-right-in">
									<span>クリエイティブ支援</span>	
									<ul>
										<li><a href="<?php echo home_url(); ?>/service/video-production/">映像制作</a></li>
										<li><a href="<?php echo home_url(); ?>/service/development/">ソフトウェア・ハードウェア開発 </a></li>
									</ul>
								</div>
								<div class="footer-top-right-in">
									<span>テクトレージラボ</span>	
									<ul>
										<li><a href="<?php echo home_url(); ?>/service/videfit/">VIDEFIT</a></li>
										<li><a href="<?php echo home_url(); ?>/service/miraipix/">空中浮遊ディスプレイ</a></li>
										<li><a href="<?php echo home_url(); ?>/service/usb-rs232cfornc/">USB⇔RS232C for NC</a></li>
										<li><a href="<?php echo home_url(); ?>/service/kikai-catalog/">キカイカタログ</a></li>
										<li><a href="<?php echo home_url(); ?>/service/chusho-gotcha/">中小企業 GOTCHA!</a></li>
									</ul>
								</div>	
							</dd>	
						</dl>

						*/
						?>

					
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
       

		<?php
		/*
		
		<div class="quiz">
			<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/robo.gif'; ?>">テクトレージQ&A</a>
		</div>
		*/
		?>	
</footer>





</div> <!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>