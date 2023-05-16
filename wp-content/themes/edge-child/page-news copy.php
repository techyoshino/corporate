<?php
/**
 * The template for displaying all pages.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(3);?>

<section id="section-bread" class="section fp-section fp-table section-bread-sp">
	<div class="container">
		<?php mytheme_breadcrumb(); ?>
	</div>
</section>


<div id="content" class="news">

	<section id="section1" class="section fp-section fp-table news-1">

	
		<div class="container">

			<div class="container-content-in">
				
				

				<div class="container-content-in_bottom">

				<h2>新着情報</h2>



					<?php
					global $post;
					$args = array( 
						'posts_per_page' => 5 ,
						'paged'  =>  get_query_var( 'paged', 1 ), //ページネーション
					
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) {
					setup_postdata($post);
					?>


					<dl>
						<dt><span class="day"><?php the_time('Y.m.d') ?> </span><span class="label"><?php the_category(',') ?></span></dt>
						<dd><span class="text"><a href="<?php the_permalink(); ?>"> <?php echo mb_substr( get_the_excerpt(), 0, 40 ) . '[...]'; ?></a></span></dd>	
					</dl>

					<?php
					}
					wp_reset_postdata();
					?>

					
					
				<?php
				/*
					<div class="nav-links">
					<?php

					// ①ページネーションに現在のページ位置を知らせるのに必要
						$paged = (int) get_query_var('paged');

						// ②記事一覧のMaxページ数を取得するのに必要
						$the_query = new WP_Query($args);

						// ↑をすれば、$the_query->max_num_pages ← Maxページ数を取得できるように
						// ページネーション
						$page_arg = array(
						'current' => max( 1, $paged ),
						'total' => $the_query->max_num_pages,
						);

						echo paginate_links($page_arg);

					?>
					</div>
					*/
					?>


				</div>

				<div class="container-content-in_bottom">


				<h2>ものづくりマガジン新着情報</h2>

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


				</div>

				

				
				<?php
				/*

				<div class="nav-links">
					<a class="prev page-numbers" href="#">«</a><!-- 現在の前のページへのリンク -->
					<a class="page-numbers" href="#">1</a><!-- 1ページ目へのリンク -->
					<span class="page-numbers current">2</span><!-- 現在閲覧しているページ(2ページ) -->
					<a class="page-numbers" href="#">3</a><!-- 3ページ目へのリンク -->
					<span class="page-numbers dots">…</span><!-- ...の部分 -->
					<a class="page-numbers" href="#">27</a><!-- 27ページ目(最後のページ)へのリンク -->
					<a class="next page-numbers" href="#">»</a><!-- 現在の次のページへのリンク -->
				</div>

				*/
				?>

					

			
			</div><!-- //container-top-in -->	

		</div>

	

	</section>
	<!-- // mission-1 -->




<?php get_footer();?>