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
define( 'DB_NAME', 'wpbanco' );

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
define( 'AUTH_KEY',         'xA.l{jiU0!bfTM0He.0JcVK}4=IMHZ#0UD~O`.nePNh-iQf@W/wr,YNv!3sIW#rT' );
define( 'SECURE_AUTH_KEY',  '}Ndq^[[H%!se3p2l^k]c*1VL),=3+=$iy+]bt[3x`JpVFE!N~*6Sm~f|yf]#tmwq' );
define( 'LOGGED_IN_KEY',    '!nTU~Zmt-h- ^cm3~L}x|<*<,]FN-3Y]`|r#?^0:>%Jt1?Ni+i@X[JhkKvm1LVay' );
define( 'NONCE_KEY',        '*yxN+9_hi{[~<&yd1y`w1,eZug&_:W~;LP1F zKsO`~:Z=uk](yDhH#I}rln(8{u' );
define( 'AUTH_SALT',        '7:|wtZ,?uo!KCY+NX Ft?D5O{4`E5%IeW3]ylpLaAWE/7Ik/bJ~b(Ys67iNM,UOZ' );
define( 'SECURE_AUTH_SALT', 'jJO$Wzs;C},!rufXzy!fzH*S]4WC4*WHSBccYAn&A=mNGNK<L%`BLY[]ElZ+^t33' );
define( 'LOGGED_IN_SALT',   'Zjh^ 5<6WNuC*^>^Gz>&s-y=EmYi&DT2(WPUrPa,8AFg<e?Az3u`k8$@.[s-[c%&' );
define( 'NONCE_SALT',       'e-=N-r/A7cFkORX}]s]2#XqGT^U%&5>.OG$Ae!:i*8;1`vKNt]kzG(*_KK8BNJ8`' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

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
