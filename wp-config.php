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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Clorhexidinum' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '@B%zJB*l5c,b=mq@{[G?YVS_6BCQ1ug+fJzBQI8M5m|3RdwdVr:i>m08fWh1KMDi' );
define( 'SECURE_AUTH_KEY',  'wRM:v>-TtBS[iSo=8|#I]kl<*&ckQ4$b^&P0=t#~vIf)ksv,aeK0[qApnk0/Sk*|' );
define( 'LOGGED_IN_KEY',    'H<=&)rc8.@T0%hscXTRbgy=>#)fSeB gzlpkTgHOIWl&}V7:-38=F5*Mp}| aC-z' );
define( 'NONCE_KEY',        'mfQvC]ulh{:)Gxy99{yS~+nvJIx<b:U<*pFw`&mX8ETaSITTbjCK,=#W<I4@osK.' );
define( 'AUTH_SALT',        '36@1<,z}<,wj_vtD7pk9*~S6=P <%!u01:!q9_x1<>n^o2x(qFAW1wgt?kj[Ny%>' );
define( 'SECURE_AUTH_SALT', '*i$W]56UxaMj0P+?#^pL8!DMK9kfTP.%7pNnDLv+b%>)wR$7$1VR0UJw?8ynwwEV' );
define( 'LOGGED_IN_SALT',   ':oFe$2{&2m9#(v56o`dj&R:#;`#{G,$z4oI;]e*>g1?`zK`#L4i(vMUBmV]Ko.v*' );
define( 'NONCE_SALT',       'Ter1F>!b*I64i[MT$4!i6?fa?RG?M[_ee99]_(g=]:.O_T|*1y5K4!4op;SVqf.U' );

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
