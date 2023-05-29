<?php
/**
 * Displays the header content
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
?>
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
<body <?php body_class(); ?> id="head-jump">
	<?php 
	if ( function_exists( 'wp_body_open' ) ) {

		wp_body_open();

	} ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZPXPF6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content','edge');?></a>



<!-- Masthead ============================================= -->

<header id="masthead" class="site-header top-header othrt-bg-color" role="banner">

	<div class="container">


        
		<div class="logo-container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri().'/images/logo.png'; ?>" alt="株式会社テクトレージ" width="100px"></a>
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

<!-- end #masthead -->





<!-- Main Page Start ============================================= -->
<div id="content" class="other-content">
<div class="container clearfix">
<?php 
if(is_front_page()){
	do_action('edge_display_frontpage_features');
}
if(!is_home()){?>

	<div class="page-header">

	
		<?php if ( is_front_page()) : ?>
			<h2 class="page-title"><?php echo edge_header_title(); ?></h2>
			<!-- .page-title -->
		<?php else : ?>
			<h1 class="page-title"><?php echo edge_header_title(); ?></h1>
			<!-- .page-title -->
		<?php endif; ?>

	
		<?php edge_breadcrumb(); ?>
		<!-- .breadcrumb -->
	</div>
	<!-- .page-header -->
<?php }