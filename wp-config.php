<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '2798-22_filik_shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', '2798-22_filik_shop' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'DjBvzRfgbnfkbpfwbb!123' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z{Ait(6a1au/Un&794Q}ye`=NMG)2=+:kkExY!KaK@:z@$fudet0bKU+9l{uY:i{' );
define( 'SECURE_AUTH_KEY',  ')*a`Y<:6sqZ3zAc76DQQ[UZR:B-`#+{$cqC(/PDVQ}Lz1/p/TaiJQ%+VD65-fX2$' );
define( 'LOGGED_IN_KEY',    'HT3FvoprDb7U!yL^Q97QER.LxzD1:P/XNiB06XtOe=go$i$A1]aL19VoWz5]L5IU' );
define( 'NONCE_KEY',        '-1-@u; ?=F6Bb=q>$sL0jS^7azZNS+;hx*AUCA{1ItDJx_~W8lf]=YnyJ|1bKbja' );
define( 'AUTH_SALT',        '.x;H=i!L++[l0jO`g$`EJ*[uagEP1#R=qX6$IEcY]9R( ]!JR6ib[?_}J-No1a?~' );
define( 'SECURE_AUTH_SALT', ':!FntK:eC[Te;Ff4qTt%n)BFb5Ix5D!Vt?YKB A|aA=S_mf_JqNM}DK2<u&}Rctz' );
define( 'LOGGED_IN_SALT',   '>8QOB4P{{==K$0c:ThSv;2i(W?%Y]Dm(agw4CWnxwt,`sh;sH rRN5d=/l ?<d3t' );
define( 'NONCE_SALT',       'L`LqXB=d*~JmQFb s,~15i$x]gT3r:}cL->Ga<f@rT|)KUr|$/W LZi`,e1#m!zt' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'MUHJl_';


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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';