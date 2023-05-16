<?php


    add_action( 'wp_enqueue_scripts', 'edge_enqueue_styles' );
    function edge_enqueue_styles() {
 
  	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/scss/style.css', array('parent-style'));
    wp_enqueue_style( 'splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css');
    

    //親テーマのjquery.fullPage.css
    wp_enqueue_style( 'fullPage-style', get_template_directory_uri() . '/css/jquery.fullPage.css' );
    //親テーマのjquery-2.1.4.min
    wp_enqueue_script( 'jquery-2.1.4.min', get_template_directory_uri() . '/js/jquery-2.1.4.min.js' );
    
    if( is_front_page() ){ 
    //親テーマのjquery.fullPage.js
    wp_enqueue_script( 'front', get_template_directory_uri() . '/js/front.js' );
    wp_enqueue_script( 'fullPage', get_template_directory_uri() . '/js/jquery.fullPage.min.js' );
   
    }

    //親テーマのfunctions.js
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/common.js' );
    //splide
    wp_enqueue_script( 'slide','https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js' );


    //子テーマのfunctions.js
    wp_enqueue_script( 'functions-child', get_stylesheet_directory_uri() . '/js/common.js', array( 'functions' ) );


     //カスタムフィールドgoogle map api
     wp_enqueue_script( 'googlemap','https://maps.googleapis.com/maps/api/js?key=AIzaSyBj6YhVoveR83UwNcrC_t2cM479caeiLD8' );

  
}




add_shortcode('url', 'shortcode_url');
function shortcode_url() {
return get_bloginfo('url');
}



add_shortcode('template', 'shortcode_tp');
function shortcode_tp() {
return get_template_directory_uri();
}



add_shortcode('uploads', 'shortcode_up');
function shortcode_up() {
$upload_dir = wp_upload_dir();
return $upload_dir['baseurl'];
}


add_shortcode('wpurl', 'shortcode_wpurl');
function shortcode_wpurl() {
return get_bloginfo('wpurl');
}




//固定ページにカテゴリ追加
add_action( 'init', 'my_add_pages_categories' ) ; 
function my_add_pages_categories()
{
    register_taxonomy_for_object_type( 'category', 'page' ) ;
}
add_action( 'pre_get_posts', 'my_set_page_categories' ) ;
function my_set_page_categories( $query )
{
    if ( $query->is_category== true && $query->is_main_query()){
        $query->set( 'post_type', array( 'post', 'page', 'nav_menu_item' )) ;
    }
}


function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBj6YhVoveR83UwNcrC_t2cM479caeiLD8';
    return $api;
}
 add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


//siteurl
add_shortcode('surl', 'shortcode_surl');
function shortcode_surl() {
	return site_url();
}


if( is_singular() ) {
	if ( is_single() ) {
		$cat = get_the_category();
		echo get_category_parents($cat[0], true, $sep);
	}
	the_title();
}



//パンくずリスト
if ( ! function_exists( 'mytheme_breadcrumb' ) ) {
  function mytheme_breadcrumb() {
  
  // トップページでは何も出力しないように
  if ( is_front_page() ) return false;
  
  //そのページのWPオブジェクトを取得
  $wp_obj = get_queried_object();
  
  //JSON-LD用のデータを保持する変数
  $json_array = array();
  
  echo '<div class="breadcrumb-col">'. //id名などは任意で
  '<ul>'.
  '<li>'.
  '<a href="'. esc_url( home_url() ) .'"><span>ホーム</span></a>'.
  '<span class="arrow">></span>'.
  '</li>';
  
  if ( is_attachment() ) {
  
  //添付ファイルページ ( $wp_obj : WP_Post )
  $post_title = apply_filters( 'the_title', $wp_obj->post_title );
  echo '<li><span>'. esc_html( $post_title ) .'</span></li>';
  
  } elseif ( is_single() ) {
  
  //投稿ページ ( $wp_obj : WP_Post )
  $post_id = $wp_obj->ID;
  $post_type = $wp_obj->post_type;
  $post_title = apply_filters( 'the_title', $wp_obj->post_title );
  
  // カスタム投稿タイプかどうか
  if ( $post_type !== 'post' ) {
  
  $the_tax = ""; //そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定してもよい
  
  // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
  $tax_array = get_object_taxonomies( $post_type, 'names');
  foreach ($tax_array as $tax_name) {
  if ( $tax_name !== 'post_format' ) {
  $the_tax = $tax_name;
  break;
  }
  }
  
  $post_type_link = esc_url( get_post_type_archive_link( $post_type ) );
  $post_type_label = esc_html( get_post_type_object( $post_type )->label );
  
  //カスタム投稿タイプ名の表示
  echo '<li>'.
  '<a href="'. $post_type_link .'">'.
  '<span>'. $post_type_label .'</span>'.
  '</a>'.
  '</li>';
  
  //JSON-LDデータ
  $json_array[] = array(
  'id' => $post_type_link,
  'name' => $post_type_label
  );
  
  } else {
  $the_tax = 'category'; //通常の投稿の場合、カテゴリーを表示
  }
  
  // 投稿に紐づくタームを全て取得
  $terms = get_the_terms( $post_id, $the_tax );
  
  // タクソノミーが紐づいていれば表示
  if ( $terms !== false ) {
  
  $child_terms = array(); // 子を持たないタームだけを集める配列
  $parents_list = array(); // 子を持つタームだけを集める配列
  
  //全タームの親IDを取得
  foreach ( $terms as $term ) {
  if ( $term->parent !== 0 ) {
  $parents_list[] = $term->parent;
  }
  }
  
  //親リストに含まれないタームのみ取得
  foreach ( $terms as $term ) {
  if ( ! in_array( $term->term_id, $parents_list ) ) {
  $child_terms[] = $term;
  }
  }
  
  // 最下層のターム配列から一つだけ取得
  $term = $child_terms[0];
  
  if ( $term->parent !== 0 ) {
  
  // 親タームのIDリストを取得
  $parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );
  
  foreach ( $parent_array as $parent_id ) {
  $parent_term = get_term( $parent_id, $the_tax );
  $parent_link = esc_url( get_term_link( $parent_id, $the_tax ) );
  $parent_name = esc_html( $parent_term->name );
  echo '<li>'.
  ' <a href="'. $parent_link .'">'.
  '<span>'. $parent_name .'</span>'.
  '</a> <span class="arrow">></span> '.
  '</li>';
  //JSON-LDデータ
  $json_array[] = array(
  'id' => $parent_link,
  'name' => $parent_name
  );
  }
  }
  
  $term_link = esc_url( get_term_link( $term->term_id, $the_tax ) );
  $term_name = esc_html( $term->name );
  // 最下層のタームを表示
  echo '<li>'.
  ' <a href="'. $term_link .'">'.
  '<span>'. $term_name .'</span>'.
  '</a> <span class="arrow">></span> '.
  '</li>';
  //JSON-LDデータ
  $json_array[] = array(
  'id' => $term_link,
  'name' => $term_name
  );
  }
  
  // 投稿自身の表示
  echo '<li><span> '. esc_html( strip_tags( $post_title ) ) .'</span></li>';
  
  } elseif ( is_page() || is_home() ) {
  
  //固定ページ ( $wp_obj : WP_Post )
  $page_id = $wp_obj->ID;
  $page_title = apply_filters( 'the_title', $wp_obj->post_title );
  
  // 親ページがあれば順番に表示
  if ( $wp_obj->post_parent !== 0 ) {
  $parent_array = array_reverse( get_post_ancestors( $page_id ) );
  foreach( $parent_array as $parent_id ) {
  $parent_link = esc_url( get_permalink( $parent_id ) );
  $parent_name = esc_html( get_the_title( $parent_id ) );
  echo '<li>'.
  '<a href="'. $parent_link .'">'.
  '<span>'. $parent_name .'</span>'.
  '</a><span class="arrow">></span> '.
  '</li>';
  //JSON-LDデータ
  $json_array[] = array(
  'id' => $parent_link,
  'name' => $parent_name
  );
  }
  }
  // 投稿自身の表示
  echo '<li><span>'. esc_html( strip_tags( $page_title ) ) .'</span></li>';
  
  } elseif ( is_archive() ) {
  
  //タームアーカイブ ( $wp_obj : WP_Term )
  $term_id = $wp_obj->term_id;
  $term_name = $wp_obj->name;
  $tax_name = $wp_obj->taxonomy;
  
  // 親ページがあれば順番に表示
  if ( $wp_obj->parent !== 0 ) {
  
  $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
  foreach( $parent_array as $parent_id ) {
  $parent_term = get_term( $parent_id, $tax_name );
  $parent_link = esc_url( get_term_link( $parent_id, $tax_name ) );
  $parent_name = esc_html( $parent_term->name );
  echo '<li>'.
  ' <a href="'. $parent_link .'">'.
  '<span>'. $parent_name .'</span>'.
  '</a> > '.
  '</li>';
  //JSON-LDデータ
  $json_array[] = array(
  'id' => $parent_link,
  'name' => $parent_name
  );
  }
  }
  
  // ターム自身の表示
  echo '<li>'.
  ' <span>'. esc_html( $term_name ) .'</span>'.
  '</li>';
  
  } else {
  
  //その他のページ
  echo '<li><span>'. esc_html( get_the_title() ) .'</span></li>';
  
  }
  echo '</ul>';
  
  //JSON-LDの出力（２階層以上であれば）
  if ( !empty( $json_array ) ) :
  $pos = 1;
  $json = '';
  foreach ( $json_array as $data ) :
  $json .= '{
  "@type": "ListItem",
  "position": '. $pos++ .',
  "item": {
  "@id": "'. $data['id'] .'",
  "name": "'. $data['name'] .'"
  }
  },';
  endforeach;
  
  echo '<script type="application/ld+json">{
  "@context": "http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": ['. rtrim( $json, ',' ) .']
  }</script>';
  endif;
  
  echo '</div>'; // 冒頭に合わせた閉じタグ
  
  }
  }

/////////////////////////////////////
//custom fileds loop アイキャッチ
////////////////////////////////////

// 投稿ページのショートコードで指定された PHP ファイルを読み込む関数
function sc_php($atts = array()) {
    shortcode_atts(array(   /* shortcode_atts でショートコードの属性名を指定 */
      'file' => 'default'   /* 属性名とデフォルトの値 */
    ), $atts);   /* 属性を格納する変数 */
    ob_start();   /* バッファリング */
    include(STYLESHEETPATH . "/$atts[file].php");  /* CSSのあるパス = 子テーマのパスを指定 */
    return ob_get_clean();  /* バッファの内容取得、出力バッファを削除 */
  }
  
  // ショートコード作成（sc というショートコードは、sc_php()という関数を呼び出すという意味）
  add_shortcode('sc', 'sc_php');
  
?>