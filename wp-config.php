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
define('DB_NAME', 'wordpresstest');

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
define('AUTH_KEY',         '0t9>ixEPic;)k{M*6jU]>;<CwC*!iuaBF)r5y3*Cfk{$(KbqB&+34*B}z#{]^ETm');
define('SECURE_AUTH_KEY',  '0zC$OE5}7jAWq,v$A}#pH9.0V;qQm&I]6+5BV?|~Qb84yYbL{pV]=n=qo6;XM[ZY');
define('LOGGED_IN_KEY',    '*K4BMvA_tTe+51wIq}bA1kC,U<m>K),R,3OLoPQ-)k]Y_f_Po`rNgbPy+P6%soe)');
define('NONCE_KEY',        '[GhW08WiP?nT-9xtm5IuJq`V,_Zfcib/qXW.@xW5:Di6%r1^b*:*T ;rf9+SJIad');
define('AUTH_SALT',        'vqcC;A39^.WsE(@WymOS^fY*F3EI@Vbm(!t-j],-OBe]~9K}`:VX M|b^evt}v;b');
define('SECURE_AUTH_SALT', 'eIT4s)_.F3Y63wW&]0ByRM=lb=+rVU)l,Kpx~QoV.X.5{6V_Ypki650|u_p~-w(D');
define('LOGGED_IN_SALT',   '3O}!z1,.F|*-3u+g)X[EMk&9n53ijb+qXe6;{jZHk^,>*aP@%3*ix!KZ.e ]Yq`b');
define('NONCE_SALT',       'rWmEOp)9!jQAf(I$wD,4RDduqne-* `;ZF%@$%B/&_I%bbxkYi%d~B9}?>l5L1{q');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
