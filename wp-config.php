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
define( 'DB_NAME', 'hotel' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'l>^$=~X!xbo)frQ [X9L<mc~?=drssybJ kb~Fff]OJCUwX8Iz*(7+GJjAYum:7!' );
define( 'SECURE_AUTH_KEY',  'Fc~$UVC3!_GnDUsX_/%@tmpc;]Qt8s,{IXpX(R2_WG>E[[CMFBpXPeMZ)5qeAPHi' );
define( 'LOGGED_IN_KEY',    '5I[e<uXw!z-LA^;+t6!pf^blGR]Xi%;X!e])UI)mmYo7C,DW+doeWyR(PE5a;5.|' );
define( 'NONCE_KEY',        '11r5#K[9Ig%|@.p2fy#7:Ftn*`6y#Qh9R|JOc$Q&t@9obu$!N-[2R(fu0IpSjFkU' );
define( 'AUTH_SALT',        'Q}}5h^k hx]ygK5PlzRbQ}Y-V<V$W+G]P/:gr+RrJ*aRYe-esCt#2g V{eq-riKA' );
define( 'SECURE_AUTH_SALT', 'nET uaeH<6eIw7q2%XU#zWmx $/)5:HTJh9[)_4c(+a+^UWq`J`9K}O=cuQZWNc2' );
define( 'LOGGED_IN_SALT',   'QXi&;L$weaN7.Ak]8vvqw9iD}B<I-qSuTlAtr,TB59Nz)HemU2 Q8$2,qJy{| ?h' );
define( 'NONCE_SALT',       'Fp3u=shX| FB8NEp8gp>)+kU%UhL7e:0m<Nk/V/jR$@ZG9g;#TM{=sDXu{~JktjS' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
