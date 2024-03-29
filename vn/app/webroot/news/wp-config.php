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
define('DB_NAME', 'tdc_news');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'tdc_news');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'XL5fLYEJ636HwNLS');

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
define('AUTH_KEY',         'zp+$?Z $[F!dWLFP$+[~ddV+>Tu-9~znG|OIrXDSd,ubipO2k/X M,b<i/RJ;P)0');
define('SECURE_AUTH_KEY',  'xM!N[ljG<TTN~@PeR&=7D-qX-4As23nyKPZ=4bpmmQ0 Xr67(:1f f(X>oQ]]H+Q');
define('LOGGED_IN_KEY',    '$]_^j2)6CVxgb7n*sy<q2$WWl=y@-CVo4^?RGu|>0Y#[|id85-79-og[JY7?qsI6');
define('NONCE_KEY',        'n@n|U:v_cD,K@#0uPr`2{X|E;[Pp~=Prc?lbDWQ2EOkEO%evz60F{8k*>*7A%j%K');
define('AUTH_SALT',        'TE5+|=OE9S6(w{&wv<pj {j81%LJ:t+EA0Z4rZo(+,+r#?W8dZJZ[y{.`T>-jq~6');
define('SECURE_AUTH_SALT', 'nrH}*|lTof8+|3Qah+]#Z}d69JML0FA[zafn@O<Bql}+ecKM4<c<O8XayftFSv{y');
define('LOGGED_IN_SALT',   'V`s*))8c-0}/&/~N?g-d4p|y%^-*LXte63iG9J(yp8-kK},&Lj]-*>)|Ak<0{|? ');
define('NONCE_SALT',       '%5G|!ZyF1@E+([tnp:_q^+j^>1)5Av^{IbM=:Eb*!Ie&2um>-d oiQ>Ephi3+xq/');

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
