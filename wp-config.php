<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'project' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BU3X;E}&]zF+kHwTAOyu9%ZmsBR(3*MQbilFWWI1/R!t|p =1#ysDULDAvN_PQ}x' );
define( 'SECURE_AUTH_KEY',  'ZWS|zoT:kzWh~M3732.)5#pBQRhPfh?~S~OD*k=g-UCHpwcV);X7B!I72~yqZOkA' );
define( 'LOGGED_IN_KEY',    'IE3>_mcd{[?:Y|Oto&l2asYHJ K(A^?oddVw{:oyx(H)0;^M<rkdP;r)Bjq@6d5e' );
define( 'NONCE_KEY',        '2MuaD>T$c^&fjN>o9*HcGw0L0=sm~<dLp#gL5&wQ}Y1Z`f?$: @<Jt(jD8nViu?_' );
define( 'AUTH_SALT',        'mxSr>_(NSR6@|W_4x=f4C Y|_!aOt~GDG%14]j8c;EUEFgPxLavI`dodh25P<DOa' );
define( 'SECURE_AUTH_SALT', 'vr4Jo{8mb@,2iXw2+qzv[bduT=vZ~AsAkc<sZX+K2^L/YSm6+=IrD~;.T:Sm-#l ' );
define( 'LOGGED_IN_SALT',   '9`phGWw/)%Jw62eAg/p[QH,{khW3D?6R_ V`CT4=#di9NU0yTPG)nmS3Yy8N9-oX' );
define( 'NONCE_SALT',       'P$Gk?eID4m3#x`Xi4iq>_>NhP*u0 Jv>tMvWV.<F}H&{ET]u7/(c|C2^XrYj4?{:' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
