<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '`/G>5wfxQT=[5&wZ&Gs3]:Wep{z>/f.cl6T7fbJrqg$Q32?ya5Vimcp#-bcGWx|m' );
define( 'SECURE_AUTH_KEY',  'wMTO`D!{WV$hr&{<WQ25,ZfV:r/&8g]+T|b|C=BA mhFE&4tygAgA@JTmt8BsG:}' );
define( 'LOGGED_IN_KEY',    '5-):9:|*cl[|g5hWACq5LY6k6vT2egy_LaX;1{TEQF[{`W4@YB_;S~X36w_`LvV6' );
define( 'NONCE_KEY',        'ae:k)${?@aHUwQ0=`D$z<>G|(L%g{mh^t9qY`}*wUG-M6hl]da?F  }n~Kf=`j!H' );
define( 'AUTH_SALT',        '+@asK*E+DbARub5/&A:YEj39zfbv$22q ~O[uh`lCwa8@kEK PI0sG!ZoMlZ@nT_' );
define( 'SECURE_AUTH_SALT', 'dPt8<93Azwc19=1v#vJs7BXg(1fU8/QH` _dc&9l~J9hl6`OW3-o%q7R/A}o!>[c' );
define( 'LOGGED_IN_SALT',   '%nRp+.m0f}$<gL/nV&A<zo/hy=/LSC>kDj@--zqt< |n+fGZ&W.MaM7|M3o0*=bR' );
define( 'NONCE_SALT',       '+Y{fwn#cSiR=m~=zx&QuP9C*nR50mG^:V* o{6#x@*F*)qNy|D5pBpq;n,L#P#:C' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
