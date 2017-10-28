<?php 
/**
*
* acp_permissions_phpbb (phpBB Permission Set) [Português Brasileiro]
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

/** 
*	MODDERS PLEASE NOTE 
*	 
*	You are able to put your permission sets into a separate file too by 
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder. 
* 
*	An example of how the file could look like: 
* 
*	<code> 
* 
*	if (empty($lang) || !is_array($lang)) 
*	{ 
*		$lang = array(); 
*	} 
* 
*	// Adding new category 
*	$lang['permission_cat']['bugs'] = 'Bugs'; 
* 
*	// Adding new permission set 
*	$lang['permission_type']['bug_'] = 'Bug Permissions'; 
* 
*	// Adding the permissions 
*	$lang = array_merge($lang, array( 
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'), 
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here 
*	)); 
* 
*	</code> 
*/ 

// Define categories and permission types 
$lang = array_merge($lang, array( 
	'permission_cat'	=> array( 
		'actions'		=> 'Ações', 
		'content'		=> 'Conteúdo', 
		'forums'		=> 'Fóruns', 
		'misc'			=> 'Diversos', 
		'permissions'	=> 'Permissões', 
		'pm'			=> 'Mensagens particulares', 
		'polls'			=> 'Enquetes', 
		'post'			=> 'Mensagem', 
		'post_actions'	=> 'Ações da mensagem', 
		'posting'		=> 'Enviando mensagens', 
		'profile'		=> 'Perfil', 
		'settings'		=> 'Configurações', 
		'topic_actions'	=> 'Ações do tópico', 
		'user_group'	=> 'Usuários &amp; Grupos',
	    'articles'      => 'Artigos',		
	), 

	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array( 
		'u_'			=> 'Permissões de usuários', 
		'a_'			=> 'Permissões de administrador', 
		'm_'			=> 'Permissões de moderador', 
		'f_'			=> 'Permissões de fóruns', 
		'global'		=> array(
			'm_'			=> 'Permissões de moderador global',
		),
	), 
)); 

// User Permissions 
$lang = array_merge($lang, array( 
	'acl_u_viewprofile'	=> array('lang' => 'Pode ver perfil, lista de membros e usuários online', 'cat' => 'profile'), 
	'acl_u_chgname'		=> array('lang' => 'Pode editar nome de usuário', 'cat' => 'profile'), 
	'acl_u_chgpasswd'	=> array('lang' => 'Pode editar senha', 'cat' => 'profile'), 
	'acl_u_chgemail'	=> array('lang' => 'Pode editar endereço de e-mail', 'cat' => 'profile'), 
	'acl_u_chgavatar'	=> array('lang' => 'Pode editar avatar', 'cat' => 'profile'), 
	'acl_u_chggrp'		=> array('lang' => 'Pode editar grupo padrão', 'cat' => 'profile'), 

	'acl_u_attach'		=> array('lang' => 'Pode anexar arquivos', 'cat' => 'post'), 
	'acl_u_download'	=> array('lang' => 'Pode baixar arquivos', 'cat' => 'post'), 
	'acl_u_savedrafts'	=> array('lang' => 'Pode salvar rascunhos', 'cat' => 'post'), 
	'acl_u_chgcensors'	=> array('lang' => 'Pode desativar censura de palavras', 'cat' => 'post'), 
	'acl_u_sig'			=> array('lang' => 'Pode usar assinaturas', 'cat' => 'post'), 

	'acl_u_sendpm'		=> array('lang' => 'Pode enviar mensagens particulares', 'cat' => 'pm'), 
	'acl_u_masspm'		=> array('lang' => 'Pode enviar mensagens para múltiplos usuários', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => 'Pode enviar mensagens para grupos', 'cat' => 'pm'), 
	'acl_u_readpm'		=> array('lang' => 'Pode ler mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_edit'		=> array('lang' => 'Pode editar as próprias mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_delete'	=> array('lang' => 'Pode excluir mensagens particulares de sua pasta', 'cat' => 'pm'), 
	'acl_u_pm_forward'	=> array('lang' => 'Pode encaminhar mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_emailpm'	=> array('lang' => 'Pode enviar mensagens particulares por e-mail', 'cat' => 'pm'), 
	'acl_u_pm_printpm'	=> array('lang' => 'Pode imprimir mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_attach'	=> array('lang' => 'Pode anexar arquivos em mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_download'	=> array('lang' => 'Pode baixar arquivos em mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_bbcode'	=> array('lang' => 'Pode usar BBCode em mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_smilies'	=> array('lang' => 'Pode usar smilies em mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_img'		=> array('lang' => 'Pode usar a tag [img] em mensagens particulares', 'cat' => 'pm'), 
	'acl_u_pm_flash'	=> array('lang' => 'Pode usar a tag [flash] em mensagens particulares', 'cat' => 'pm'), 

	'acl_u_sendemail'	=> array('lang' => 'Pode enviar e-mails', 'cat' => 'misc'), 
	'acl_u_sendim'		=> array('lang' => 'Pode enviar mensagens instantâneas', 'cat' => 'misc'), 
	'acl_u_ignoreflood'	=> array('lang' => 'Pode ignorar limite de flood', 'cat' => 'misc'), 
	'acl_u_hideonline'	=> array('lang' => 'Pode ocultar os status online', 'cat' => 'misc'), 
	'acl_u_viewonline'	=> array('lang' => 'Pode ver todos os usuários online', 'cat' => 'misc'), 
	'acl_u_search'		=> array('lang' => 'Pode pesquisar no painel', 'cat' => 'misc'), 
)); 

// Forum Permissions 
$lang = array_merge($lang, array( 
	'acl_f_list'		=> array('lang' => 'Pode ver o fórum', 'cat' => 'post'), 
	'acl_f_read'		=> array('lang' => 'Pode ler o fórum', 'cat' => 'post'), 
	'acl_f_post'		=> array('lang' => 'Pode enviar mensagens novas', 'cat' => 'post'), 
	'acl_f_reply'		=> array('lang' => 'Pode responder mensagens', 'cat' => 'post'), 
	'acl_f_icons'		=> array('lang' => 'Pode utilizar ícones de tópicos/mensagem', 'cat' => 'post'), 
	'acl_f_announce'	=> array('lang' => 'Pode enviar anúncios', 'cat' => 'post'), 
	'acl_f_sticky'		=> array('lang' => 'Pode enviar tópicos fixos', 'cat' => 'post'), 

	'acl_f_poll'		=> array('lang' => 'Pode criar enquetes', 'cat' => 'polls'), 
	'acl_f_vote'		=> array('lang' => 'Pode votar em enquetes', 'cat' => 'polls'), 
	'acl_f_votechg'		=> array('lang' => 'Pode editar enquetes em curso', 'cat' => 'polls'), 

	'acl_f_attach'		=> array('lang' => 'Pode anexar arquivos', 'cat' => 'content'), 
	'acl_f_download'	=> array('lang' => 'Pode baixar arquivos', 'cat' => 'content'), 
	'acl_f_sigs'		=> array('lang' => 'Pode usar assinaturas', 'cat' => 'content'), 
	'acl_f_bbcode'		=> array('lang' => 'Pode usar BBCode', 'cat' => 'content'), 
	'acl_f_smilies'		=> array('lang' => 'Pode usar smilies', 'cat' => 'content'), 
	'acl_f_img'			=> array('lang' => 'Pode usar a tag [img]', 'cat' => 'content'), 
	'acl_f_flash'		=> array('lang' => 'Pode usar a tag [flash]', 'cat' => 'content'), 

	'acl_f_edit'		=> array('lang' => 'Pode editar as próprias mensagens', 'cat' => 'actions'), 
	'acl_f_delete'		=> array('lang' => 'Pode excluir as próprias mensagens', 'cat' => 'actions'), 
	'acl_f_user_lock'	=> array('lang' => 'Pode trancar os próprios tópicos', 'cat' => 'actions'), 
	'acl_f_bump'		=> array('lang' => 'Pode ressuscitar tópicos', 'cat' => 'actions'), 
	'acl_f_report'		=> array('lang' => 'Pode denunciar mensagens', 'cat' => 'actions'), 
	'acl_f_subscribe'	=> array('lang' => 'Pode subscrever fóruns', 'cat' => 'actions'), 
	'acl_f_print'		=> array('lang' => 'Pode imprimir tópicos', 'cat' => 'actions'), 
	'acl_f_email'		=> array('lang' => 'Pode enviar tópicos por e-mail', 'cat' => 'actions'), 

	'acl_f_search'		=> array('lang' => 'Pode pesquisar no painel', 'cat' => 'misc'), 
	'acl_f_ignoreflood' => array('lang' => 'Pode ignorar o limite de flood', 'cat' => 'misc'), 
	'acl_f_postcount'	=> array('lang' => 'Aumentar o contador de mensagens<br /><em>Por favor, note que esta configuração apenas afeta mensagens novas.</em>', 'cat' => 'misc'), 
	'acl_f_noapprove'	=> array('lang' => 'Pode enviar mensagens sem aprovação', 'cat' => 'misc'), 
)); 

// Moderator Permissions 
$lang = array_merge($lang, array( 
	'acl_m_edit'		=> array('lang' => 'Pode editar mensagens', 'cat' => 'post_actions'), 
	'acl_m_delete'		=> array('lang' => 'Pode excluir mensagens', 'cat' => 'post_actions'), 
	'acl_m_approve'		=> array('lang' => 'Pode aprovar mensagens', 'cat' => 'post_actions'), 
	'acl_m_report'		=> array('lang' => 'Pode fechar e excluir denúncias', 'cat' => 'post_actions'), 
	'acl_m_chgposter'	=> array('lang' => 'Pode alterar autor da mensagem', 'cat' => 'post_actions'), 

	'acl_m_move'	=> array('lang' => 'Pode mover tópicos', 'cat' => 'topic_actions'), 
	'acl_m_lock'	=> array('lang' => 'Pode trancar tópicos', 'cat' => 'topic_actions'), 
	'acl_m_split'	=> array('lang' => 'Pode subdividir tópicos', 'cat' => 'topic_actions'), 
	'acl_m_merge'	=> array('lang' => 'Pode fundir tópicos', 'cat' => 'topic_actions'), 

	'acl_m_info'	=> array('lang' => 'Pode ver informações da mensagem', 'cat' => 'misc'), 
	'acl_m_warn'	=> array('lang' => 'Pode enviar advertências<br /><em>Esta configuração é apenas definida globalmente. Não é básica deste painel.</em>', 'cat' => 'misc'), 
	'acl_m_ban'		=> array('lang' => 'Pode gerenciar banimentos<br /><em>Esta configuração é apenas definida globalmente. Não é básica deste painel.</em>', 'cat' => 'misc'), // This moderator setting is only global (and not local) 
)); 

// Admin Permissions 
$lang = array_merge($lang, array( 
	'acl_a_board'		=> array('lang' => 'Pode alterar configurações/verificar para atualizações', 'cat' => 'settings'), 
	'acl_a_server'		=> array('lang' => 'Pode alterar servidor/configurações de comunicação', 'cat' => 'settings'), 
	'acl_a_jabber'		=> array('lang' => 'Pode alterar configurações de Jabber', 'cat' => 'settings'), 
	'acl_a_phpinfo'		=> array('lang' => 'Pode ver as configurações do PHP', 'cat' => 'settings'), 

	'acl_a_forum'		=> array('lang' => 'Pode gerenciar fóruns', 'cat' => 'forums'), 
	'acl_a_forumadd'	=> array('lang' => 'Pode adicionar fóruns', 'cat' => 'forums'), 
	'acl_a_forumdel'	=> array('lang' => 'Pode excluir fóruns', 'cat' => 'forums'), 
	'acl_a_prune'		=> array('lang' => 'Pode executar a limpeza de fóruns', 'cat' => 'forums'), 

	'acl_a_icons'		=> array('lang' => 'Pode alterar ícones de tópico/mensagem e smilies', 'cat' => 'posting'), 
	'acl_a_words'		=> array('lang' => 'Pode alterar censura de palavras', 'cat' => 'posting'), 
	'acl_a_bbcode'		=> array('lang' => 'Pode definir tags de BBCode', 'cat' => 'posting'), 
	'acl_a_attach'		=> array('lang' => 'Pode alterar configurações de anexos', 'cat' => 'posting'), 

	'acl_a_user'		=> array('lang' => 'Pode gerenciar usuários<br /><em>Isto também inclui a visualização do navegador dos usuários na lista de usuários online.</em>', 'cat' => 'user_group'), 
	'acl_a_userdel'		=> array('lang' => 'Pode excluir/limpar usuários', 'cat' => 'user_group'), 
	'acl_a_group'		=> array('lang' => 'Pode gerenciar grupos', 'cat' => 'user_group'), 
	'acl_a_groupadd'	=> array('lang' => 'Pode adicionar grupos', 'cat' => 'user_group'), 
	'acl_a_groupdel'	=> array('lang' => 'Pode excluir grupos', 'cat' => 'user_group'), 
	'acl_a_ranks'		=> array('lang' => 'Pode gerenciar ranks', 'cat' => 'user_group'), 
	'acl_a_profile'		=> array('lang' => 'Pode gerenciar campos de perfil', 'cat' => 'user_group'), 
	'acl_a_names'		=> array('lang' => 'Pode gerenciar nomes proibidos', 'cat' => 'user_group'), 
	'acl_a_ban'			=> array('lang' => 'Pode gerenciar banimentos', 'cat' => 'user_group'), 

	'acl_a_viewauth'	=> array('lang' => 'Pode ver máscaras de permissão', 'cat' => 'permissions'), 
	'acl_a_authgroups'	=> array('lang' => 'Pode alterar permissões para grupos individuais', 'cat' => 'permissions'), 
	'acl_a_authusers'	=> array('lang' => 'Pode alterar permissões para usuários individuais', 'cat' => 'permissions'), 
	'acl_a_fauth'		=> array('lang' => 'Pode alterar categorias de permissões de fóruns', 'cat' => 'permissions'), 
	'acl_a_mauth'		=> array('lang' => 'Pode alterar categorias de permissões de moderadores', 'cat' => 'permissions'), 
	'acl_a_aauth'		=> array('lang' => 'Pode alterar categorias de permissões de administradores', 'cat' => 'permissions'), 
	'acl_a_uauth'		=> array('lang' => 'Pode alterar categorias de permissões de usuários', 'cat' => 'permissions'), 
	'acl_a_roles'		=> array('lang' => 'Pode gerenciar as tarefas', 'cat' => 'permissions'), 
	'acl_a_switchperm'	=> array('lang' => 'Pode utilizar outras permissões', 'cat' => 'permissions'), 

	'acl_a_styles'		=> array('lang' => 'Pode gerenciar estilos', 'cat' => 'misc'), 
	'acl_a_viewlogs'	=> array('lang' => 'Pode ver logs', 'cat' => 'misc'), 
	'acl_a_clearlogs'	=> array('lang' => 'Pode limpar logs', 'cat' => 'misc'), 
	'acl_a_modules'		=> array('lang' => 'Pode gerenciar módulos', 'cat' => 'misc'), 
	'acl_a_language'	=> array('lang' => 'Pode gerenciar pacotes de idiomas', 'cat' => 'misc'), 
	'acl_a_email'		=> array('lang' => 'Pode enviar e-mail em massa', 'cat' => 'misc'), 
	'acl_a_bots'		=> array('lang' => 'Pode gerenciar bots', 'cat' => 'misc'), 
	'acl_a_reasons'		=> array('lang' => 'Pode gerenciar razões para as denúncias/reprovações', 'cat' => 'misc'), 
	'acl_a_backup'		=> array('lang' => 'Pode copiar/restaurar banco de dados', 'cat' => 'misc'), 
	'acl_a_search'		=> array('lang' => 'Pode gerenciar os modos e a configuração da pesquisa', 'cat' => 'misc'), 
)); 

?>