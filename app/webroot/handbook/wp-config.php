<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'tdc_vn_handbook');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'tdc_vn_handbook');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'vbCdWMPLQvhKzXSw');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ohCxT>k?1:<]*3e[bxH3Ep]1KUOZ:!8i%1%5w:r8n+v$Sotr >(+XWn7R3t$U-Y^');
define('SECURE_AUTH_KEY',  ' HErL.-aDh`A}RE-WKyenTna+14w:cfG_Y-n>}K8r>e$U*ZQoEI52l)eeUs8mK|n');
define('LOGGED_IN_KEY',    '[nao2Fk0u)+>.ZAg9Pw1d|P!*tn[@6;36+Ogk*e`e3d^Fig9WOYH.wy8F)drxBGK');
define('NONCE_KEY',        'G~,j7]XYG(*=]q-tEex3ND9,D79=9%hMfK2NwfPHidu+V-tt}<oJ2ppD3Q%Er&R)');
define('AUTH_SALT',        '^fZ%/zyvg(vYF&4^H2mba4A=n0LDnKrhurn]{J%|~!FZ-~l`4R^{~6i-94O-6a~r');
define('SECURE_AUTH_SALT', '7c*(yI&Ljx)*+NbnzS+rdj]7ebiAf7+R Es66z3fe/Q@;nmXriuxq>?380C)[-+O');
define('LOGGED_IN_SALT',   ')N|5*)XpgPv17j5@cZn4Xc:J ?q-JBSy1*^@QSD/^)*?|VkA-jU.g--~QCOdL6,=');
define('NONCE_SALT',       '^,~bbLAllMOP$6|p3^P|8nE|Q%H=8:N)MhDhcCAPIyykDxAR,rq/N.7}b8# i|]2');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
