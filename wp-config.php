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
define( 'DB_NAME', 'art_design' );

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
define( 'AUTH_KEY',         'L`Y:F]er4-FW/.Utc-#b,[v3D@$#WVX`N*lNaW(]:@y-{dqO0l{U[=3C{mIQPYoh' );
define( 'SECURE_AUTH_KEY',  'SXb/;^S,.T%SaUbi5-jX+lD/XZ4r2Kc]_^oBA^E=m]=SA35{t^%J.dk Xh*s^TYA' );
define( 'LOGGED_IN_KEY',    'F?,.V.0V|ZmUgCkNLPa/k+^9Jw5ygd[Qcsh6R0zl%eJs1] Aq[fg*Bute ]n^A>(' );
define( 'NONCE_KEY',        'I}fc>F 9v.p2L8b!4B~pjvJn<&QW1Vw#k{@xLa~-LK,-=DT4&F]7m%eUHW(I2yGw' );
define( 'AUTH_SALT',        'G@xvqxO>Z)6}7qW:-]29Qd=`{DvIDMNJbb<-]VxQ;A{D2G}3!WN|mh}c(q=.^oNv' );
define( 'SECURE_AUTH_SALT', '[+ywC%}jdeq_/+Pbau.;WK&yjNB]&8=O }%a/D;wPKSu@4wmu$-]5+iV^``W:Y#T' );
define( 'LOGGED_IN_SALT',   '`[$W.m_;&(@b,KT/Cb{6yw:D{s 1$ToSMBE##q)G1Uh$-x7PgJOd^LM% OG3x0XS' );
define( 'NONCE_SALT',       '&RTz.b#@~r$. ,n>_)WF#k16|sj{AHvL]B2a-j]u_0,HdP?&M:l3ScGxd]bVMu`O' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cp_';

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
