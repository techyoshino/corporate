<?php
/**
 * The template for displaying all pages.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(2);
	$edge_settings = edge_get_theme_options();
	global $edge_content_layout;
	if( $post ) {
		$layout = get_post_meta( $post->ID, 'edge_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	}
	if( 'default' == $layout ) { //Settings from customizer
		if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')){ ?>

<div id="primary">
<?php }
	}else{ // for page/ post
		if(($layout != 'no-sidebar') && ($layout != 'full-width')){ ?>
<div id="primary">
	<?php }
	}?>
	<main id="main">
	<?php
	if( has_post_thumbnail() && $edge_settings['edge_display_page_featured_image']!=0) { ?>
		<div class="post-image-content">
			<figure class="post-featured-image">
				<a href="<?php the_permalink();?>" title="<?php echo the_title_attribute('echo=0'); ?>">
				<?php the_post_thumbnail(); ?>
				</a>
			</figure><!-- end.post-featured-image  -->
		</div> <!-- end.post-image-content -->
	<?php }
	if( have_posts() ) {
		while( have_posts() ) {
			the_post(); ?>
	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<article>
		<div class="entry-content clearfix">
			<?php the_content();
				wp_link_pages( array( 
				'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'edge' ),
				'after'             => '</div>',
				'link_before'       => '<span>',
				'link_after'        => '</span>',
				'pagelink'          => '%',
				'echo'              => 1
				) ); ?>
		</div> <!-- entry-content clearfix-->
		<?php  comments_template(); ?>

<table style="width: 100%; border-collapse: collapse; border-style: solid; border-color: #231815; background-color: #ffffff;">
<tbody>
<!-- <tr>
<td style="width: 50%; background-color: #cccccc;">1月21日（土）</td>
<td style="width: 50%; background-color: #cccccc;">受付終了</td>
</tr>
<tr>
<td style="width: 50%; background-color: #cccccc;">2月18日（土）</td>
<td style="width: 50%; background-color: #cccccc;">受付終了</td>
</tr>
<tr>
<td style="width: 50%; background-color: #cccccc;">3月11日（土）</td>
<td style="width: 50%; background-color: #cccccc;">受付終了</td>
</tr>
<tr>
<td>4月22日（土）</td>
<td>受付中</td>
</tr>
<tr>
<td>5月20日（土）</td>
<td>受付中</td>
</tr>
<tr>
<td>6月17日（土）</td>
<td>受付中</td>
</tr> -->




<?php $fields01 = CFS()->get( 'reception-day-loop', 3349 ); ?>
<?php if ($fields01)://faq_loop が存在するとき ?>
   <?php foreach ( $fields01 as $field ):?>

	<tr>
		
		<?php
		$fields = $field['reception'];//子ループ（ドロップダウンリスト）
		foreach ((array)$fields as $key => $label ):
		?>
		
		<td><?php echo $label; ?></td>

		<?php endforeach; ?>
		
		<td><?php echo $field['reception-day']; ?></td>

		
		
	</tr>
     
   <?php endforeach; ?>
<?php endif; ?>








</tbody>
</table>
		</article>
	</section>
	<?php }
	} else { ?>
	<h1 class="entry-title"> <?php esc_html_e( 'No Posts Found.', 'edge' ); ?> </h1>
	<?php
	} ?>
	</main> <!-- #main -->
	<?php 
if( 'default' == $layout ) { //Settings from customizer
	if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')): ?>
</div> <!-- #primary -->
<?php endif;
}else{ // for page/post
	if(($layout != 'no-sidebar') && ($layout != 'full-width')){
		echo '</div><!-- #primary -->';
	} 
}
get_sidebar();
get_footer();