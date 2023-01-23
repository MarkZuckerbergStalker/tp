<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilis� par le script de cr�ation de wp-config.php pendant
 * le processus d�installation. Vous n�avez pas � utiliser le site web, vous
 * pouvez simplement renommer ce fichier en ��wp-config.php�� et remplir les
 * valeurs.
 *
 * Ce fichier contient les r�glages de configuration suivants�:
 *
 * R�glages MySQL
 * Pr�fixe de table
 * Cl�s secr�tes
 * Langue utilis�e
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** R�glages MySQL - Votre h�bergeur doit vous fournir ces informations. ** //
/** Nom de la base de donn�es de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de donn�es MySQL. */
define( 'DB_USER', 'wordpress_user' );

/** Mot de passe de la base de donn�es MySQL. */
define( 'DB_PASSWORD', '@Zerty1234567' );

/** Adresse de l�h�bergement MySQL. */
define( 'DB_HOST', '192.168.1.15' );

/** Jeu de caract�res � utiliser par la base de donn�es lors de la cr�ation des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de donn�es.
 * N�y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Cl�s uniques d�authentification et salage.
 *
 * Remplacez les valeurs par d�faut par des phrases uniques !
 * Vous pouvez g�n�rer des phrases al�atoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de cl�s secr�tes de WordPress.org}.
 * Vous pouvez modifier ces phrases � n�importe quel moment, afin d�invalider tous les cookies existants.
 * Cela forcera �galement tous les utilisateurs � se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_?*->}dzgj}q2/K;t6O9hBO/%wnQ~b4_A+&h[2 r&T2f<wIL,oz8K-Wow8Uokq6L' );
define( 'SECURE_AUTH_KEY',  '7y<?u, qiUk w;E[4]PA2#]$PC8*oN?!;yN5Sm?01gKsFT,6e=8Cdj5>DCG3i6h8' );
define( 'LOGGED_IN_KEY',    'PC@WfL,8_1-Lh:IKI]r|Dty< tfv}LWtPxbL12RHzDt?&jNhe+8}]p-*f3xKWJNm' );
define( 'NONCE_KEY',        'I-kO L:(+#rW9u=3pZoaEYF96m^}7b:Z{-WXYiY~ECIltI9y8 >*q{Xd!)!KUW1m' );
define( 'AUTH_SALT',        'Jc*mLSq+Cw1k6A6G,}7(B-3OJ*B9xB3$EXKEU-a,DOr-ex]Z[Ia*^.%nfdkvyO*Y' );
define( 'SECURE_AUTH_SALT', 'g={P^XYQnFO~Zg>D6v}I&-7GtT|<x@N7)U5ehZ|S)a,n:}!M{x}$;z#`~F.d>X( ' );
define( 'LOGGED_IN_SALT',   'mRTdRmdE3 cx~%U:[*;9VnjRDX#l+4wV-BT$RD^790Y[qUJnD~,xV&OdjFu*|eS+' );
define( 'NONCE_SALT',       '([so?R/,J)&-a8$lY^=C-;8`szm+>NIZ)i:iRul/#760$-lTf?Q)-pI5@%f%l7[S' );
/**#@-*/

/**
 * Pr�fixe de base de donn�es pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de donn�es
 * si vous leur donnez chacune un pr�fixe unique.
 * N�utilisez que des chiffres, des lettres non-accentu�es, et des caract�res soulign�s�!
 */
$table_prefix = 'wp_';

/**
 * Pour les d�veloppeurs : le mode d�boguage de WordPress.
 *
 * En passant la valeur suivante � "true", vous activez l�affichage des
 * notifications d�erreurs pendant vos essais.
 * Il est fortement recommand� que les d�veloppeurs d�extensions et
 * de th�mes se servent de WP_DEBUG dans leur environnement de
 * d�veloppement.
 *
 * Pour plus d�information sur les autres constantes qui peuvent �tre utilis�es
 * pour le d�boguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C�est tout, ne touchez pas � ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** R�glage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
