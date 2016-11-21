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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'kvsemeno90');

/** Имя пользователя MySQL */
define('DB_USER', 'kvsemeno90');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'a123456a');

/** Имя сервера MySQL */
define('DB_HOST', 'VH246.spaceweb.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>j+G,m25}kF*7?JDnh0^h:oi,g{|=f@Pr=`S9CPPqB-`3!p@72PI6)6 QhVyulsh');
define('SECURE_AUTH_KEY',  'gIOdebh[)e4T#%4?/(b.Q^m(@^U-Fy6N5@r)3SGLDuK3+8w[^)+`+i1FQ>B,w>.{');
define('LOGGED_IN_KEY',    'l{ wDUY3V4;T@|9Q|mN$=)&xETlR~qF3Z5KrZXbaFzGv[-/mxJ#:{}<b!_+|,-RQ');
define('NONCE_KEY',        '(2&X[]BsfsTOVphq~q81@U^E`-x5k]]<mH1d,pJ2=;dc0|]Gz[#FC5@a)F)@b8KB');
define('AUTH_SALT',        '_@&+<`d^g^+FI|UI@K}#yBy4LN$2cV!KAL^0C+y@ Ela0DsSUmIVyfa+MGla-2Ad');
define('SECURE_AUTH_SALT', 'L;#Zhgz{Oy7ya2)<!ex}L-)xJ~|0?0WLEQWVn-Q]GD qbx#T&;+PZWkuZ0.1N|Z-');
define('LOGGED_IN_SALT',   'U+$6e*!I;@Ve/+ejAKvsyv|<w-BT7PTj&ICuE+rM)=X}p@!9(}Aov-Yl@OSZ.w;k');
define('NONCE_SALT',       'ci+D&~2IX~ap!j!v;FQG`1;)qXmw~Of|NJ(:.Cc:I.O3O3o3sEo?*D=_3(T6p&^Q');


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
