<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'monsiteweb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kH+oG 2T%/hf&7!>}H?b<<xX^OB7a=4ET0,Q9(l?C$0p7#8%5af9U#IWHm>;#o|u' );
define( 'SECURE_AUTH_KEY',  'WQ4T/Da]sj:2RU<|4=&zt_n367}7BZ J3?l&_%C%jl*LI5ybX2?{xs*:zg~wiMbB' );
define( 'LOGGED_IN_KEY',    '73#Wmf]}!Hc.f.Z]gfvk]jp!PzMAqU!UHK(^d[.OI]tcCWP{%8ZG:FZAo;)]k#bA' );
define( 'NONCE_KEY',        '||:!l)XTw9*h`j~{+Sjy{}MpM{|l$3+&Rr{S;Ry1c$ZZf^L@IAKjnLX!?U>TZB /' );
define( 'AUTH_SALT',        '_?>.JJwk2}}$ 3DzTK4.EBwfZGdO.O?^ISZlCGbx<p0,pY9<NW}t~JlXn[Sr&(tU' );
define( 'SECURE_AUTH_SALT', 'bpZ:ojdg^OXB:(.MAIcE4iuFi^Fn[bunA[Xgf7E/b+;@^@m^#muY<?a[sWLa1ufa' );
define( 'LOGGED_IN_SALT',   ':C*TS*1`6ez/RZk}[pYcDJ]XYM_6X0noNNH /VL%<_&r(<:O`,!v4~bN?x02<,S|' );
define( 'NONCE_SALT',       '$#k?XPE1dk}yVCJQ)zuo)SN$P]DDqDgLob$3R&@Ia[25OET~Gwb{IwJdBS <tA?D' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
