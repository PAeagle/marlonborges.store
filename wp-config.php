<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dIgN95i(%E}85fiad+u(2Ut7ZbMVu6`mT+|DO38+6kI/] F0q]CA$5k}[:av<nh!' );
define( 'SECURE_AUTH_KEY',  'epyvCi.My7Eh]SjZ{GfeUuB^{%^NnU ,&T`c*O&Vna6**2mmc0yJAp^LRZzpZ%@C' );
define( 'LOGGED_IN_KEY',    ']gCiFyWkSE9|sb87yPA-W,jP1SRuJX]{qU;B7!~Zk-)T>HLw4$#}cRdReeLT[.#v' );
define( 'NONCE_KEY',        'ps,~RRCpcz;/pa^)kZvundvb?%}`S_w7x}o%Y3ynNf+{]`lARiPj^9$6srMQ F/^' );
define( 'AUTH_SALT',        '5by&1((Up?x0RJ2m-JK+H0j%Hq4+w#^3Yr5X[:r_C=9tFb|dt,[&wo(gpwNE1Z/~' );
define( 'SECURE_AUTH_SALT', '8G[m!}4z*`jf|jy)+7.Ta<yQ+T}!18iRCkXh7O:Z):[OvMC:OU0X9~[#~w0IVC4v' );
define( 'LOGGED_IN_SALT',   'R1_3Lh#OK|dAq@TAZ]47]_JsK#b*eXB+AXc7Y(]}bzwAkM:aAw^KX#}0rBxJm{7}' );
define( 'NONCE_SALT',       '4Hs;JgC%!0|+W$yPz^_=Uk Il..^~]c5VeP5pum01N!6bCq!cH/;F|KM51CfWjpX' );

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
