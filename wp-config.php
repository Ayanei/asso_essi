<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'essivam_bdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vQ5&K9^NLdgd48IAkI@VB{c 7imZA?T*%=de3dY_aUzwE2!r]!6+K~/bJ{+WjiaD');
define('SECURE_AUTH_KEY',  'wk|T!C4M$m-4=vK-dAT`}:X$ii2<gtk/@jVPu!ejJi:]L3ee&AMsI<rI{SE*8>V{');
define('LOGGED_IN_KEY',    '#TRKaC Y!T*r{;Vq_sP|NS&=Ua!Vdx&CzX{gb3d=i/Jza9;*NuZPx.}Jk65Q+C<G');
define('NONCE_KEY',        'n?VI1}7*4_XP9Dc$78Em~aDVm(>D!|r{LT.,_U67>IGt<K[T&%5SK99+jgzC9f}!');
define('AUTH_SALT',        'OQYn@pD<(d&/P-RW8RVB<&*?0(jN<(,C./6&fc[{SqQzpEl_BeaEO|j^[lM<90<S');
define('SECURE_AUTH_SALT', 't=vqQGT<JFX)<g1Y< 3Z#tSo)&Q{V8&*6ZcmdS66i`uJH8U9uQ*#PKNpAi=6PkRe');
define('LOGGED_IN_SALT',   ']$-|sa~?T9)Z/XU|dO@b.c]IS}iFt,9vv!iUn5J6t9(!_iN7%!a-:G8/:1Rl,I I');
define('NONCE_SALT',       'd[H:o`Za,z*B4>0Kh#@^GFygFfVpu/gH{i&-]mIH$?UtUCYI(c3 `^<zcU(ST-jL');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');