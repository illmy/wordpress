<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wordpress' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'wordpress' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'PF3Ncx3zhYWPTfTP' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{*zGGH.P^^fEQyMjO&N*tT)D&HrL$BeRhL1!0@!y3=N4I?,8z%w&Z?L4&<ogg1w&' );
define( 'SECURE_AUTH_KEY',  '{mz,)vnNGRyvDvMCc9wE.<b|$2_@aVL4Zrz3TI#tvN}RBe deL4#tC`j>nz&(_7l' );
define( 'LOGGED_IN_KEY',    'B*+^&lUNz.lWA1Z>548cs/MRl:@e5K^(hB>_eVQ?LDN=s;zg5@zGyqm UPEX,U3=' );
define( 'NONCE_KEY',        'Mwxk$kdW`?YV_Zf&&j;mz7J;^Qwg@]5LSAd>z(33:NC(Mu??3~;M/E`cPgE*z?Nm' );
define( 'AUTH_SALT',        ',(;n;|CHR&:BcXul_|/ViJ=vAEsrfS6]OYh$~JB;r CAy64ig~$nm<EI2)X(GyxW' );
define( 'SECURE_AUTH_SALT', '=_*W:t2R_+FmJi$$4ZPP0[YAC}X=.Aa$]+%[ws{D^)X#GiPe7I|p:x~qT>UXX{>N' );
define( 'LOGGED_IN_SALT',   '-f#H=I^[-4x2!}P:=QJX~;-}oyJ`-v;99|bSLr(CeNB}@ohj_I_DcDA~!:I0}oOH' );
define( 'NONCE_SALT',       'SKkj]9g[rV0r{t:?U6!- X1LwqWi115&.;=CP>.]MrO.i/eL:^CUBgWvMC-(%yk(' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
