<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp-portfolio');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '3X2JUmqXrMSaNl|u8Gs>-]fgRr{mxP?t-A1H(EB9*XCO^ezOy|R%+Y>NkT:nEJ |');
define('SECURE_AUTH_KEY',  ',~$E6:}[]W6Cs?-J/4si0EnXo^z18AliA8dnQt?a4sNHFdG+t^:;$gv(H}jVH~a7');
define('LOGGED_IN_KEY',    ';S3gRp{X^aE -V~3o?%Z|U[j~hMLww>gSO!)w#b6L?j:x:zy0OAqGs>NmEJinU3<');
define('NONCE_KEY',        '68TY klqyIw1%vyJ[SpQ^O|Id-SI=!9VU?6(qo3q3]4LjXgW;fX;X0X<0xNFBzf<');
define('AUTH_SALT',        '%2ib2,oLTdUxZe{ouPm~9mk|hDb}bm5%W;Yaw9e+Q{~:4QfjRGG/r.1|9|f,9UA?');
define('SECURE_AUTH_SALT', '(2WSgW5Bs-;)R3u@j<m /.PMZxn5{j)j-gw,+`2^]9FLA)KJ=QsBiedR{z}Q8Wt;');
define('LOGGED_IN_SALT',   '3L^hEQoYGaBCa,%!Dc%U98yg>1x=fRrWUA{G&i(*M#R+ZnD<4[[v,s|5f1+/InTv');
define('NONCE_SALT',       't!(fGr#(+& b#R:oU?YpXrTbE,R9z_K70[WO5nb(@K6~?~wPr7vi4e1UF83Nx ]R');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
