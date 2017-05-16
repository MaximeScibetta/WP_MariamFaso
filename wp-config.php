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
define('DB_NAME', 'mariamfaso');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'homestead');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'secret');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'my4EY=5|kJQjn$9Lx-L(%m*$<Y[(!$aA(dS([t:,g_9JXM(Fs<=JOy7pVf]jU1(k');
define('SECURE_AUTH_KEY',  '0t~<US2yO`^Ueo/*.c`wI+0P|8y5Ye+nX5cgb0zQvrZG]F`AUBu4;`Lf.VyM2G54');
define('LOGGED_IN_KEY',    'TMZ~@u@voFUrc3kg5K/7cXRz(Y2.N#}4$jBjS1{F`9IohSbQ#k!jJu26(@ysWJI!');
define('NONCE_KEY',        'u7ASoH/X+Y|]/:Z/ ^DJP]-O$Fp{9%Lya ,+vVf!K738?`&h[kuol@rp%|<]1ZuN');
define('AUTH_SALT',        '[D[ysNZAu0{4ULZ%3#>9:(hmsAH(t5D30D&NX!v3tm`rXHn/IaKmJ Yi+!Dn51p;');
define('SECURE_AUTH_SALT', '(u{j%>:0pdvEvPF8#BpvasuW$z4(R~QpPgV/~tm,*OWrJ{O9Iwe7S6ypd:@sl8U/');
define('LOGGED_IN_SALT',   'ZI ~;t?QjAU7P,ZtISjw|+n:a%]T*Z<%)41}af&vO)kV6jgT2[nVk^(8#=[#jonk');
define('NONCE_SALT',       '/S.g!uCJW/f6_kKqf1!EC%i:&H6LDkb~#ypE_Mz_BCj4&sbrW7U9$ZO>Y/5`7dG*');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');