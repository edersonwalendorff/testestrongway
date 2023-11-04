<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'strongway' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B&/)S4oUg>udITJVP-GH?9^b>DZoo#!ISh`(9kx>O^X/8q`w?-cx<T)V5<Rg{^%L' );
define( 'SECURE_AUTH_KEY',  '|YGNE5:e@yJcKtdK/_MW.v$Pd4+BK}9Rl0yWm,4vs D/yTPT{bIegZ1md^.Jw7uX' );
define( 'LOGGED_IN_KEY',    'N#kj^u:nP53b%8,Sz!=est6~3Dbef,W&n6Kw]@iO~B!k!C;botP$ 5fCuZm0/Rff' );
define( 'NONCE_KEY',        'n>a#Bv=XorZU{B-f#c8mEO:RN8ZJ[953nFT208ktga9!} dA/6/KP>L|1Z ,|`K<' );
define( 'AUTH_SALT',        '6B [vVyq]>XB,K:`]t UBIwwny0:A]f`JEL`]4pB4*a6J:6yXg M|Xg/)A&[Rs{>' );
define( 'SECURE_AUTH_SALT', '@jHX2vnV_Yt%8;k<gB/-b{!K3%@nl<A7Ib,6Pw1ss6tidXF(~XD=G1] gM[EfOQf' );
define( 'LOGGED_IN_SALT',   'r)z9@uH~3i!TQ;r8XG0-mS9n%fVt,7/(5Kgk+}IhDhcVBJS6NlE@]b,a({h<X[iJ' );
define( 'NONCE_SALT',       '`Z/|R9WtoJ|zYO%L^rP5sM:W{r>y{#%ZZ8SVmFcRk5u/9!iYNc<sKukvYk_0_sir' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
