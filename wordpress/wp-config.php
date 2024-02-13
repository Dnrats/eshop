<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'artem' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '632bifhm0l' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']1~9mgheoj~*@^(p!M:u@m[[!#cc[0z;x~EO$>,X_}Fx# 3aY3B+3~~,y8p^F!0 ' );
define( 'SECURE_AUTH_KEY',  'ziV?#^5/?;;=jpo*R?Hhuo?#2=IB^;x;M9GhDB3pp*jVN%lfEEyxjhrwt8vS=),&' );
define( 'LOGGED_IN_KEY',    '[:,#&U>WGGW),9@yh/jNU)bB 7.7<RqT5a|8(QDUr^&RLrk+y-()`sRh~ml^14@f' );
define( 'NONCE_KEY',        '905Rj:U723?b1M]ovLHL=6iMn7nR&6B**ipk>+(Ff4xJI#+Pa!?D~GVT}+F_/8{r' );
define( 'AUTH_SALT',        'd}$QOXWH=mk06W{f7v[czT}Y3RX,J,r@+kU{%wK@,LjP DfS8;mER0 G96J&Bs~K' );
define( 'SECURE_AUTH_SALT', 'zY[Vk$Xnz8#N%LvyMduN?T!0/j}2^&II,-sJ>QpT9APJ#/^S#arVV/!*9emO5lOd' );
define( 'LOGGED_IN_SALT',   'nNm,Ki9ZrMk(*=Y}sh<6Y^4NaSrqduvWMf2:udJ%qNcFB2i-hdj}=wnK`_y/zL%{' );
define( 'NONCE_SALT',       '`Y_Y&#@sy/^>m9ibC[-wSEDs`G}` XQ~.P!h5lX^fiKK[Gxj}4EqKv0N1uk#|j,b' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
