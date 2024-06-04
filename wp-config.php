<?php
/**
 * A configuração de base do WordPress
 *
 * O script de criação wp-config.php utiliza este ficheiro durante a instalação.
 * Não é necessário utilizar o site, pode copiar este ficheiro para "wp-config.php"
 * e preencher os valores.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Definições da base de dados - obtenha estes dados do seu serviço de alojamento ** //

/**
 *
 * O nome da base de dados do WordPress
 */
define( 'DB_NAME', 'dialaburguer' );

/**
 *
 * O nome do utilizador da base de dados
 */
define( 'DB_USER', 'root' );

/**
 *
 * A senha do utilizador da base de dados
 */
define( 'DB_PASSWORD', '' );

/**
 *
 * O nome do servidor da base de dados
 */
define( 'DB_HOST', 'localhost' );

/**
 *
 * O "Database Charset" a usar na criação das tabelas.
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 *
 * O "Database Collate type". Se tem dúvidas não mude.
 */
define( 'DB_COLLATE', '' );

/**
 *
 * #@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automaticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 *
 * Pode mudar estes valores em qualquer momento para invalidar todos os cookies existentes.
 * Isto forçará todos os utilizadores a terem de iniciar sessão novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'N;0R-5I+i$HYv0|v)QK%;kAH~x0{[zH;X&39]/Wk&-Fm`I:OhPvX=ft`W3O)zqcR' );
define( 'SECURE_AUTH_KEY', '|dl?{~m=(TQ<$$5umua oU8rDZgp{FFBs_B_2#<xtV?Qztnm$#$);%-L}Tt6CJD+' );
define( 'LOGGED_IN_KEY', 'GN%ws+9ihQ&TCN^*+)wgb9W.gbK<(9O(1Rwfd2R3qTfX}u3v=F3{~+Rpk($-x*b>' );
define( 'NONCE_KEY', 'Ci)wp(^tpahaeM4IUXUK~/#yq!M[N81}L0v#5c:f7A/*gf6KzYVZPL@fX({NIg[5' );
define( 'AUTH_SALT', 'ksr[*f tC#eJ>O QO5n_F=<i3F osI`^z)m1x!MKc4IF+*B6M!qGme)]{D&`33(4' );
define( 'SECURE_AUTH_SALT', 'RS|3k.d:&R(%;?R7Nenm^De|RYsGiL_z%9<3i8QMF[Ka@dh Qe3Smx|cD<2Ya&#u' );
define( 'LOGGED_IN_SALT', 'gdh ^d8P(_IKa>@hJlG_XB9u5iAJN{bi`:Pa5fl^3)Otd,FgL:aRvQRpuP+L5=n/' );
define( 'NONCE_SALT', 'jQbsC:X$I#A4v-sSuFoHBxf]<UsG}>Ox|+v3DgXj,,Y}(5fa)1ImLBRz@nmoEx3$' );

/**
 *
 * #@-
 */

/**
 * Prefixo das tabelas do WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para programadores: WordPress em modo de depuração.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para depuração,
 * consulte a documentação.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione quaisquer valores personalizados entre esta linha e a linha "pare de editar". */



/* E é tudo, pare de editar! */

/**
 *
 * Caminho absoluto para o directório do WordPress.
 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/**
 *
 * Define as variáveis do WordPress e ficheiros a incluir.
 */
require_once ABSPATH . 'wp-settings.php';
