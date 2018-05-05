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
define('DB_NAME', 'tkani');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Ty r0bQWDya2Em;p;Y8dnXgaW$-|>~8P/Bl+q2VB6-V*v4{LAFH-,Sn=U|5eR<z)');
define('SECURE_AUTH_KEY',  'BtrnNtMB[{uX/)(8 <L~k_XT4upjTkj2@pL$oBkBmH$ZHNM9LN0_DPRfW!#31NbN');
define('LOGGED_IN_KEY',    ';Q--NA(~I^LYg!y#F8P|D{djGJYojHul?FvB-HSl+_)tk(k]PLqXNrRM)Pw({3!4');
define('NONCE_KEY',        'DipcgRDyDsk[J6Mzg<ip59*;=>=/Z^t_w#!X>|aFYMT$O7@?M]V%0Uu`oC`6>n+L');
define('AUTH_SALT',        'oag^f3WK:|s}mTJMmtOI(lJOVJ:zkF)W=tN&{s XyW,9bb+c#2+9w46yP5c^:)Zj');
define('SECURE_AUTH_SALT', 'klAuVFrV9jZ!W%u0(=8R}}!#s>]pA4T5]6YqCe}_YWXiuRV+~`}nR(9F9ZR%kbg5');
define('LOGGED_IN_SALT',   'r6sr*{JVN34%N^F4~+W(s%g-`9/!F#<* R,[T7I1}I|P,$9?{28A<@VK.E;xQ[A{');
define('NONCE_SALT',       ']M$2c-V.[WoH[5`q)]y_; ,wYInt.,n06GC7*#L|}4BbNd~|Oi4}5hd2FXEu6X&s');

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
