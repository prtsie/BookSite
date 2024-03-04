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
define( 'DB_NAME', '711-22_26534' );

/** Имя пользователя базы данных */
define( 'DB_USER', '711-22_26534' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'b4d995d17c5410b8719b' );

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
define( 'AUTH_KEY',         ' <d6:/@-JwI$qPBwc::l1h%|^Af:*4sjmTI_qzQlrEktSxU50JQe9P5^e7OZ,yh>' );
define( 'SECURE_AUTH_KEY',  'Al}2O?eS5Fh4lvU;dWP.ANYggLO,wTA+U,<3F!,P<6L6)p{-zQHT)n5~A^#%e<!*' );
define( 'LOGGED_IN_KEY',    'ObL/O/~2S}f*ou,jcK8;|68Gos0[-;Z!(N8SegO><4^+B/b6@wM5 &P9x#y VKWT' );
define( 'NONCE_KEY',        '?qmQ[<;7vwk@]AyZb0,w, }IN%myQfq}]`Lo5.y[-p^I_;ut3 Mv1I.}+Q-fuxKb' );
define( 'AUTH_SALT',        'qS-GU?kt:1b~^?${mO<:B@6fl;(bIUMq=qT1DOh-kk4*GrkGufRh#73P-8)h/_br' );
define( 'SECURE_AUTH_SALT', 'z$/}=!-%HX|vEsWwKi&K0kzr)(%nuLsNUxM$3]X/Lj+`+Q(3&lq%Ba-?|jxOLw0%' );
define( 'LOGGED_IN_SALT',   'Wj#Q(t)zt;e#R}R9J~V7,GX_wa)|sK%WEog/,xa0$(gJ|pMG2*uk{A1ZC@z+(4Iv' );
define( 'NONCE_SALT',       ';7(jbOG3<Sh3`oNj2F`,F^lAW=z(urpY}A[O|`b;1=X?^J5GWBPs@{&7gnH[0J.;' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'XWfa7_';


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