<?php
/**
*
* memberlist [Português Brasileiro]
*
* @package language
* @version 1.0.4
* @author Suporte phpBB <contato@suportephpbb.com.br> http://www.suportephpbb.com.br/
* @copyright (c) 2005 phpBB Group, 2012 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Perfil',
	'ACTIVE_IN_FORUM'		=> 'Fórum mais ativo',
	'ACTIVE_IN_TOPIC'		=> 'Tópico mais ativo',
	'ADD_FOE'				=> 'Adicionar como inimigo',
	'ADD_FRIEND'			=> 'Adicionar como amigo',
	'AFTER'					=> 'Depois',	

	'ALL'					=> 'Todos',

	'BEFORE'				=> 'Antes',

	'CC_EMAIL'				=> 'Enviar-me uma cópia deste e-mail.',
	'CONTACT_USER'			=> 'Contato',

	'DEST_LANG'				=> 'Idioma',
	'DEST_LANG_EXPLAIN'		=> 'Selecione o idioma desejado (se ativo) para o destinatário dessa mensagem.',

	'EMAIL_BODY_EXPLAIN'	=> 'Esta Mensagem será enviada em texto. Por Favor, não adicione qualquer Código HTML ou BBCode. Para o endereço de resposta será anexado o seu endereço de e-mail.',
	'EMAIL_DISABLED'		=> 'Todas as funções relativas aos e-mails encontram-se desativadas.',
	'EMAIL_SENT'			=> 'O seu e-mail foi enviado com sucesso',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Esta mensagem será enviada em texto. Por favor, não adicione qualquer código HTML ou BBCode. Para o endereço de resposta será anexado o seu endereço de e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Você deve escrever um endereço de e-mail válido para o destinatário.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Você deve escrever uma mensagem para ser enviada.',
 	'EMPTY_MESSAGE_IM'		=> 'Você deve escrever uma mensagem para ser enviada.',
	'EMPTY_NAME_EMAIL'		=> 'Você deve escrever o nome do destinatário.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Você deve escrever um título para o e-mail.',
	'EQUAL_TO'				=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'	=> 'Aqui você pode pesquisar por usuários específicos. Você não precisa preencher todos os campos. Use * como complemento para palavras parciais. Se informar uma data, utilize o formato <kbd>YYYY-MM-DD</kbd>, ex. <samp>2007-03-14</samp>. Além disso, use as marcas de seleção para selecionar um ou mais nomes de usuários (podem ser aceitos vários usuários), e clique no botão selecionado para voltar à forma anterior.',
	'FLOOD_EMAIL_LIMIT'		=> 'Você não pode enviar um e-mail em seguida. Por favor, tente novamente mais tarde.',

	'GROUP_LEADER'			=> 'Líder do grupo',

	'HIDE_MEMBER_SEARCH'	=> 'Ocultar pesquisa de usuários',

	'IM_ADD_CONTACT'		=> 'Adicionar Contato',
	'IM_AIM'				=> 'Você precisa ter o AOL Instant Messenger instalado para utilizar esta opção.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Baixar aplicativo',
	'IM_ICQ'				=> 'Os usuários podem ter selecionado não receber mensagens instantâneas não solicitadas.',
	'IM_JABBER'				=> 'Os usuários podem ter selecionado não receber mensagens instantâneas não solicitadas.',
	'IM_JABBER_SUBJECT'		=> 'Esta é uma mensagem automática, por favor, não responda! A mensagem foi enviada pelo usuário %1$s em %2$s.',
	'IM_MESSAGE'			=> 'Sua mensagem',
	'IM_MSNM'				=> 'Você precisa ter o Windows Messenger instalado para utilizar esta opção.',
	'IM_MSNM_BROWSER'		=> 'O seu navegador não suporta esta ferramenta.',
	'IM_MSNM_CONNECT'		=> 'O MSNM não está conectado.\nVocê deve conectar-se ao MSNM para continuar.',		
	'IM_NAME'				=> 'Seu Nome',
    'IM_NO_DATA'			=> 'Não existe nenhuma informação de contato para este usuário.',
	'IM_NO_JABBER'			=> 'Desculpe, enviar mensagens instantâneas a outros usuários do jabber não é suportado por este servidor. Você precisa ter um cliente jabber instalado no seu sistema para contatar o destinatário acima.',
	'IM_RECIPIENT'			=> 'Destinatário',
	'IM_SEND'				=> 'Enviar mensagem',
	'IM_SEND_MESSAGE'		=> 'Enviar mensagem',
	'IM_SENT_JABBER'		=> 'A sua mensagem para %1$s foi enviada com sucesso.',
	'IM_USER'				=> 'Enviar uma mensagem instantânea',
	
	'LAST_ACTIVE'				=> 'Última visita',
	'LESS_THAN'					=> 'Menor que',
	'LIST_USER'					=> '1 usuário',
	'LIST_USERS'				=> '%d usuários',
	'LOGIN_EXPLAIN_LEADERS'		=> 'O administrador exige que você esteja registrado e autenticado para ver os membros da equipe do fórum.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'O administrador exige que você esteja registrado e autenticado para acessar à lista de membros.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'O administrador exige que você esteja registrado e autenticado para pesquisar por usuários.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'O administrador exige que você esteja registrado e autenticado para visualizar perfis.',

	'MORE_THAN'				=> 'Maior que',

	'NO_EMAIL'				=> 'Você não está autorizado a enviar e-mails para este usuário.',
	'NO_VIEW_USERS'			=> 'Você não está autorizado a ver a lista de membros ou perfis.',

	'ORDER'					=> 'Ordenar',
	'OTHER'					=> 'Outro',

	'POST_IP'				=> 'Enviado do IP/domínio',

	'RANK'					=> 'Rank',
	'REAL_NAME'				=> 'Nome do destinatário',
	'RECIPIENT'				=> 'Destinatário',
	'REMOVE_FOE'			=> 'Excluir dos inimigos',
	'REMOVE_FRIEND'			=> 'Excluir dos amigos',

	'SELECT_MARKED'			=> 'Selecionar marcados',
	'SELECT_SORT_METHOD'	=> 'Selecionar método de ordenação',
	'SEND_AIM_MESSAGE'		=> 'Enviar mensagem AIM',
	'SEND_ICQ_MESSAGE'		=> 'Enviar mensagem ICQ',	
	'SEND_IM'				=> 'Enviando mensagem instantânea',
	'SEND_JABBER_MESSAGE'	=> 'Enviar mensagem jabber',
	'SEND_MESSAGE'			=> 'Mensagem',
	'SEND_MSNM_MESSAGE'		=> 'Enviar mensagem MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Enviar mensagem YIM',		
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Último ativo',
	'SORT_POST_COUNT'		=> 'Número de mensagens',

	'USERNAME_BEGINS_WITH'	=> 'Nomes de usuários que iniciem com',
	'USER_ADMIN'			=> 'Administrar usuário',
	'USER_BAN'				=> 'Banir',
	'USER_FORUM'			=> 'Estatísticas do usuário',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Nenhum lembrete enviado atualmente',
		1		=> '%1$d lembretes enviados<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Online',
	'USER_PRESENCE'			=> 'Frequência no fórum',

	'VIEWING_PROFILE'		=> 'Visualizando perfil - %s',
	'VISITED'				=> 'Última visita',

	'WWW'					=> 'Website',
));

?>