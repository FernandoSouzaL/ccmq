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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp-ccmq' );

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
define( 'AUTH_KEY',         'ieO3V^IJcp`WgtxhbW5E)VO7w,)$L9%bj2Zi1AzM-}YUdP!0RcW)Usjn=uQrEa;h' );
define( 'SECURE_AUTH_KEY',  'mnJy7,hvzW{*UlM1`DlwG#62l} TW(Chl!c.a:zW9.)eOzjx.fWn^LYX[v#<BlO&' );
define( 'LOGGED_IN_KEY',    '8.2CJLo}ydtY9Wqz_^-9tG3_C]+k1c$,R;r*y:iLMq!G#:I;yGk.I_jM*2igWZ9w' );
define( 'NONCE_KEY',        '/3>qp4O4s$?f?&&Cb/T?PzMz8DGv{$5{{B#RCG94O!Dz[+zo#7eIO-Zm[rN.OVxl' );
define( 'AUTH_SALT',        '=sm|<7Y0yi:hQQVt8]O#db`@63sQ5Exc)?4?uN!+gLen;7@H1|L.d^DJQfa_pf/U' );
define( 'SECURE_AUTH_SALT', '#$zMxuXB6}H7@E`rSd5v0{]ED!W>tB]A:ubbUIDQ;=zMA<[v=(,h2m{*`+r{+8a#' );
define( 'LOGGED_IN_SALT',   'vn#ah7sWUvSP[H]/&2O55w{(8)iy2^/66d}_=X;{ehQsx7$#_xM6d-3F4h*r>G_>' );
define( 'NONCE_SALT',       'oj: x]Ln:WTQq%$Gzekyi1v{QZZY{U~EfFW2Y*Gb%.L9pbE^d3UiW!rT04568v}a' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ccmq_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
