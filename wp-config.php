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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'aris18912868moli');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Gw]YB ,n+ocqx_I-D%Y7@sVaEvg(ba6e2XWW2kQe0!Sa}+< W+<|>Bb=5y-w>B*-');
define('SECURE_AUTH_KEY', '.T(J8P#b {_Jgk!#V,*YO[2NX+c=(k*N7N/(l,rrPT1PO3sJ XSOc.nQ*5K[BZl|');
define('LOGGED_IN_KEY', 'mxO,F{S0j |lokLq=+JCqxqrDX{2]@X|FMAxV0 S|!1?/`z0Imi#=+o5!j0Ds*E,');
define('NONCE_KEY', 'FLDVf4AxqTJ~>-i`EIf)`71xeECdgS0gU}^H:=Z;wnU2ds./z)e>xyGUfQVg#Q[E');
define('AUTH_SALT', 'cozhR%|8wimd|!iRDh|yR#uaF>F8YoY}gKUK/0Wte5MVkA~}[Em~:L$OO3w|jU`a');
define('SECURE_AUTH_SALT', 'gvruC}>lLR:erA,5Ju(GdrzJ`<u[RWhsrMiycd$5)4s>?UcU9]nD49WRBith[xbT');
define('LOGGED_IN_SALT', 'OqPVBZ1l=D 4qxl*%F5BD2&0G,&AA*<IiGJEV?9VmV4ZT{,`^/M]$zE@@89l=]cP');
define('NONCE_SALT', 'Zp|mugEjF]0Q|X/4S~gfr_~lb,c2yg4>a+P-HHADOL@7Hjt)=X-]ED(@iy!}Z-_0');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

