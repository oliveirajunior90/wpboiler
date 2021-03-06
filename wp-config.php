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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpboiler');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('WP_DEBUG', true);

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
define('AUTH_KEY',         'fK2speWox4AillY]g^bKfj/giq~& !S*Vmq--LEy3lyo5c7LX=x9#@@<Z`HPnE%k');
define('SECURE_AUTH_KEY',  'pD%6A&dyb=Jb=d6z?6~Y%$yGLYL(%JO|,yI|R~>l2i)k&4[DCC?XdxM#H8U=r-qB');
define('LOGGED_IN_KEY',    'xpZ&$>A~eQc!FO|WECJ;hmdX! hy0Y:h/`/Ju)Kwj{Bgg!Q*H|K)Z;>~b8vN|5zu');
define('NONCE_KEY',        'xzCE*pFvcRR,P/*E[W_q)`Wm!K&HV6A+%~v(-Bn+;~a9%{LpZRDwFlsIJz=zh)GP');
define('AUTH_SALT',        'mI5 6`G$5fU.7OP#kbUS`dEWT2 Uut$7Q7`yR5Hx]m~EFBP.c9)D62/5j-Jr_/x!');
define('SECURE_AUTH_SALT', '<xQm]~rz!$^!:Nj@RP[O<e=Gm &m3xD6[[/#JymrPp2J]-*bRg5.IF#Mq-Zwqx0F');
define('LOGGED_IN_SALT',   '6DbGlT#CLy-IL**l,GV4S[9QEn4pQ?Hqm$Hr+UKeB^QDD/5{-(CBK/zJe)}2(+b4');
define('NONCE_SALT',       's2z]? Al,w!/Pk/k~`_TE@i+,&F<[=5~GbPB[$uv-a7<iZ%s|.!~)o#d%GK_cPEU');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'lpws_boiler';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
