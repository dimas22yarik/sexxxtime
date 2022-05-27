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
define( 'DB_NAME', 'sexxxtime_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         '*fZ(DcGVx_H`UAAqqz`sjtS _&}n?UIKwiRzlJmeBHk=C]~kp.2/][!<]=if8{hb' );
define( 'SECURE_AUTH_KEY',  '4DFB>GL5z];|y]Iw:j%Rd;J_kRz)Qyd+E[Ob{A{gSCA/.!?XL$[)>dq Dnd@`a88' );
define( 'LOGGED_IN_KEY',    '+~Vw AIX31zJI}ruTJzf7qVUPavT&;S{,MrX8gxkH.EHs#kQ2p0MJJK3@ ZYUC6T' );
define( 'NONCE_KEY',        'V?1j<]gQ3Sog3(jGr!fBkxl]U)</6>*N9$265d{9&hx2*gU9_a]N Hrqxrb]!6:I' );
define( 'AUTH_SALT',        '8){PrbLPI)-*JImC9qf_mID]&Gy  {j9BHF+__*{VsgY@5@ZP(K<7zRcMezzU#qT' );
define( 'SECURE_AUTH_SALT', 'zM(jW<W:fWo6V m)G?NDq/2DFAEzK>Fnp?5=_[P@a~5w@.|||8/$Q7XJqJ?E1.-,' );
define( 'LOGGED_IN_SALT',   ']SF-FCGu)k-=<>=$+VZ{(4|Wf]mTs adwh SZ~[ vXq)-59m}yl~>h>LQ7tfBg!n' );
define( 'NONCE_SALT',       'aP=!9}ELqd,xTMGo]<)Za|W,Kws6g(I=k{Kp+>hN95{bkE 93JAQ*E:3.@%%W;Ko' );

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
