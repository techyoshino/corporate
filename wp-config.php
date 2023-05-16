<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'corporate' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pWr%l5?&*rT hJ|em04L{Mzl,ZTEFUyImsR8..Tyrep!+f1wi)X.mq1j@/c@,]|Z' );
define( 'SECURE_AUTH_KEY',  'vG`azu1+51*wbT)+-3]u[T~8Yb,Fpu0SZZC<$D$tSDh4#^Si,^)K<ZYBwm%UG{~7' );
define( 'LOGGED_IN_KEY',    'NQ?59r%I~%R7s@>82F(s2 {HgAB?S|nuhs,@)Vu.5t*JI7I-Fw< 52~`]A.DG[B!' );
define( 'NONCE_KEY',        'g)jeBwHD/s{2AWl!iR(GYV!n]G@m?0j]^BN5N=>XOfQ#C|FBu;{Apg 4[@ji-*_<' );
define( 'AUTH_SALT',        'B<%[juHNxRcPaSLqNY`kNyQ#h:RLBU^$I -dCHMiTlIexkir<X``fzW1 5@GpMF+' );
define( 'SECURE_AUTH_SALT', 'M>(~uC0Kj?vTuFBblBxnM9!>Gd1FhGre[QGWn[K,ib;G$7^d:bGw1m`I>|,te<Qi' );
define( 'LOGGED_IN_SALT',   '?N(^`lWV)&5Ic=]y4R^/$30&-(`,JAuR-.0$)WW:b3nQp/2OnM=CPxB=7F>cSXG%' );
define( 'NONCE_SALT',       'MA_YLlndx Uo2gdH!WeOeJA8)A}RF?jD]!)2<G8t?v=3)Gl8-IRuTRr{jZ)]7C,?' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/corporate');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/corporate');
