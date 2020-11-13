<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'abcdynamics');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'foulytic_cpdbcio');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '(czRn;vI~?yx');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'mariadb');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

define( 'WP_HOME', 'http://docker.udea.local:8080' );
define( 'WP_SITEURL', 'http://docker.udea.local:8080' );

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'DI!rR)?XZ0D_V98jU``0V0nJEPW$7l45~;XyqI*?HGF3)bpy7Cb-R;WXex!#]r.O');
define('SECURE_AUTH_KEY', '`bOKE_`!$n_[{DhfWMEV%Y=qnj) [+uC?`zP#gb%y4|EzJvIY~?j^NR{P5:@|5,l');
define('LOGGED_IN_KEY', '7N{IC/.WNtHYkpW}(D}t+v(~#>(62G89[pp 8L#V?b?pWK9,=v_H]<Wyf|9<cCN/');
define('NONCE_KEY', 'HuE1dwdQHtb1$ !Kj^_-C6%#N]|V&<o30kJ:3oT@K8(v9py{MH(-!:4.q$OPsv%G');
define('AUTH_SALT', 'y>~*)KDsXY$hMhBA1j8qvQ1&P3;NF(4OO+662JIKbV|D5,GOIXu8lewk?m(V/CPT');
define('SECURE_AUTH_SALT', 'V-}u__:A;`Qn4f--Vy3mNxsbX`JRXC}N-D5vb5pHREzi+dds#{1(IC4%aIz~,zkQ');
define('LOGGED_IN_SALT', 'P>%p=LVlYa=Zq?vWgIY},FCr7%l_lk@c(]j(BY<~IJ#(msQ(!hXPS4pP?[~T9v2_');
define('NONCE_SALT', '$+9eP}io%1PIMh7;v|;e`4`MQSW/#wr) $ku1IX5rO^1{;)1Vn.x}=G6{N~_XUcq');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'abd_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

