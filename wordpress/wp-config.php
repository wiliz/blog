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
define('DB_NAME', 'wp_blog');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'aaa');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#L 8TkR}Kz[oP?9;3X|t`j5Kb[.|V9d{nna5-Yt-k&%]kbYS$hp?Dj% zx}Zc+b%');
define('SECURE_AUTH_KEY',  '^p}-~ShI&aW!{;Tq~%Esh~s)+!MAl(-+K0^1[]vi@8!),I4/i;rkS{66ofVBG/ea');
define('LOGGED_IN_KEY',    'mFpRI2DQ^3<(*N;~fG+tG:M^&%rf|-+J#r!m%|^U-Rh-*5b6|ig+m #d9>R2K#42');
define('NONCE_KEY',        'YiKy+9*?Gf3NeRmwW:M!|qhzP-oV2B|Dk$E14sUs2mGJ1|MciW_+b+b2v@wdWh?!');
define('AUTH_SALT',        '|)9<eSv DYR>,b, +iyf~_NWFFellTB!GP%ouY11JxR|1oeKj)Ap|K^5:.+`Mzk?');
define('SECURE_AUTH_SALT', 'Xf8YhFzs%GYGvXr_Y(>s1L:bX?QQF!SFZckH27S0f$bjc&$_H=]k96`|[w>4WF,n');
define('LOGGED_IN_SALT',   'VB@u{_|4^5A>uD}9^:/E]U9Y0.j9m.CPduA[ILG-+MkD>v$6L}[{5RsqeeMHa;P6');
define('NONCE_SALT',       '9:1NnoE4||IVzd6norfOhyTOqt_xohv4UFIttOU*d|z 4hjjs|zlhkqPoTv6$C<N');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'nz_';

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

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

