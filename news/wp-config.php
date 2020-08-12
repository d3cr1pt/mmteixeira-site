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
define( 'DB_NAME', 'idmmteixeira_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'idmmteixeira_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'mmteixeira' );

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
define( 'AUTH_KEY',         'tUJndHLP.gO)RGl#DHtv;lJgi6NulU,.9W6N3Ib=[FZtj9a5Dx_mUrtw3LiGHz29' );
define( 'SECURE_AUTH_KEY',  '~-!g)-RB#B{]BN;[>Bo76s!1xye<.?XUdR^70`nNQ1X_*m86O3]O>O?DuB9@j.2.' );
define( 'LOGGED_IN_KEY',    't@.#HqDx6qH#*f+)BN5R`PAwBT;y$`>fZMYRu>0D5[8TA>G^CB/V)@V7iPv:w^Vs' );
define( 'NONCE_KEY',        '7<baBLpcADE_+ @/{Fnj+65$? ]&)bOj=`pQ>EKI!70><Oa/~MOg_4%*h+;|Rr1q' );
define( 'AUTH_SALT',        'hzCLp,V:]*d[?8 k7:is8J`zqGF+beNQy4)(B0o=/U2B/i<h_^-uh-RouUM;OW^B' );
define( 'SECURE_AUTH_SALT', '*9429R<*g.pH~S[v:!z%.S k:y=z>vs+ >9Sq$knEuw-W<>Uiaj<6S#73v y3xJ$' );
define( 'LOGGED_IN_SALT',   ' `3{%)PC_Yc^PB n<Y=.{!rL Cq_hNz6@veX$4AKhM1VrhEz{ y%F67gkogE|4q[' );
define( 'NONCE_SALT',       '4:-!)Gvi&_N-*IG;U??3=|MhY=h(<E+[~YWDOL>BW6;NR1H+0%&N<4UYdkbp&9Tk' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
