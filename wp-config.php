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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'organizer-db' );

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
define( 'AUTH_KEY',         ']PP_qdQ(#+OyNNd]8.JN@LQ_,.%K&Y;%wYf<SI}|])ZLB?Uo/P-lT-SRq_:@J1-)' );
define( 'SECURE_AUTH_KEY',  '$T^XI_.#Cr@M$/Bym&t1x|vg<lX[olB~69ncgr3{aXpG@Ait@OaZ DL1xSOJw P0' );
define( 'LOGGED_IN_KEY',    'UCll8TE};8a78:=gsRIbXLsX-WWJ5!>EwX+[GTD9:9uN|,9vVttdI7,IXAJ2l>Pr' );
define( 'NONCE_KEY',        '9DNhfAfD?rpdz_|(r**`,gDKYKkBUjMXAnTp BpZhMvi=aLieAb6Qg0&i CZx3)u' );
define( 'AUTH_SALT',        'oG&OD/OdNwwLOSZ6I^XW1? Hpz7rCa fMOb=h#u/K:svevbvPu/%M>A8)m7#q~=w' );
define( 'SECURE_AUTH_SALT', '`?WNi_K[bs+-^4dUf|lzFg>H7+_xP(!zH/}o~4gr={v]nD`-y8pRSF^V{9^go@sY' );
define( 'LOGGED_IN_SALT',   '(NQ]W#Rl2H#0q?+KLnL;@l{kWTOMxpKk6K4rcu)Rpf0:URSj*1*6ZZ,5V -^Qj$i' );
define( 'NONCE_SALT',       '6gs&Q~ld4mu=(E~F:63vRSI4/,c,$v*31iggXt=Zr_hF^XE^=MXcJ)ChA}HNb[0Q' );

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
define( 'WP_DEBUG', true );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

