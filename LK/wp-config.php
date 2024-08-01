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
define( 'DB_NAME', 'lk' );

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
define( 'AUTH_KEY',         'I_gv:gUa_GU4~?JV+^7P3A;;%-z` _Ul79b}r?lB1-@ a2Z4d[Z7qWYCm<}MOy)x' );
define( 'SECURE_AUTH_KEY',  'TSmB=HGAQ1*d`F2ssnU DGbk}9W8xH?^,npxkV2|,gsz,})mPm|g@Tw~{X.6)?{i' );
define( 'LOGGED_IN_KEY',    '8Ekkj:}zb5>KZ3^RRQ6aLqc2{3><#jG88@v^p>;IwU->5.7:<zxQ$V6C{KRJ~bMo' );
define( 'NONCE_KEY',        '7W!]RtBkp,l Nae[<@+Ta@`=8xINDy&)TGT6:(}<%k<55c;.dlo bi7dBdXFa]ga' );
define( 'AUTH_SALT',        'vA*[?p5^!``x/4XE:x6at-@h9J$Z^1NABfDr]ZM0cnJ#,=&6$mbE}CJF<}|CMc$`' );
define( 'SECURE_AUTH_SALT', '[n3dG>O6S?V~J?:Z[VzPE+=)5f3o>OZV(Lt@A^sS#[c#QN-XU[B292MT4;HPq]2U' );
define( 'LOGGED_IN_SALT',   ';{{;/9dF[+6FSV6(X+=8t3rR=WesOgg^01y^/MEf,+/3q2Z4;55LcS28s~EWv`$A' );
define( 'NONCE_SALT',       '*m,Niv 45[8-5JV=Fp[{qT&[S-nx1K3REt[BNFZ?_ol#/Y:8e]5*jb&:S`k1x@(l' );
define( 'AUTOMATIC_UPDATER_DISABLED', true );

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
