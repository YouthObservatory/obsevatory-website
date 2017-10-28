<?php 
/**
*
* acp_language [Português Brasileiro]
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
	'ACP_FILES'						=> 'Administração de Idiomas', 
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Aqui você pode instalar/desinstalar pacotes de idiomas para o seu painel. O pacote de idiomas padrão está marcado com um asterisco (*).', 

	'EMAIL_FILES'			=> 'Arquivos de e-mail',

	'FILE_CONTENTS'				=> 'Contentamentos do arquivo', 
	'FILE_FROM_STORAGE'			=> 'Arquivo da pasta de armazenamento', 

	'HELP_FILES'				=> 'Arquivos de ajuda', 

	'INSTALLED_LANGUAGE_PACKS'	=> 'Pacotes de idiomas instalados', 
	'INVALID_LANGUAGE_PACK'		=> 'O pacote selecionado não é válido. Por favor, verifique o pacote e o envie novamente se necessário.', 
	'INVALID_UPLOAD_METHOD'		=> 'O método selecionado para o envio não é válido. Por favor, escolha um método diferente.', 

	'LANGUAGE_DETAILS_UPDATED'			=> 'A configuração de idiomas foi atualizada com sucesso.', 
	'LANGUAGE_ENTRIES'					=> 'Entradas de linguagem', 
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Aqui você pode alterar pacotes de idiomas existentes ou ainda não traduzidos.<br /><strong>Nota:</strong> Ao alterar um arquivo de linguagem, as modificações serão armazenadas em uma pasta separada para que você faça o download. Estas alterações não serão visíveis aos usuários até que você substitua os arquivos existentes através de seu servidor (pelo envio dos mesmos).', 
	'LANGUAGE_FILES'					=> 'Arquivos de linguagem', 
	'LANGUAGE_KEY'						=> 'Chave de linguagem', 
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'O pacote de idiomas já se encontra instalado.', 
	'LANGUAGE_PACK_DELETED'				=> 'O pacote de idiomas <strong>%s</strong> foi excluído com sucesso. Todos os usuários que utilizavam este idioma foram atualizados para o idioma padrão do painel.', 
	'LANGUAGE_PACK_DETAILS'				=> 'Informações do pacote de idiomas', 
	'LANGUAGE_PACK_INSTALLED'			=> 'O pacote de idiomas <strong>%s</strong> foi instalado com sucesso.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'As sequências de idioma dos campos de perfil personalizados foram copiados do idioma padrão. Por favor, altere-os caso necessário.',
	'LANGUAGE_PACK_ISO'					=> 'ISO', 
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nome do local', 
	'LANGUAGE_PACK_NAME'				=> 'Nome', 
	'LANGUAGE_PACK_NOT_EXIST'			=> 'O pacote de idiomas selecionado não existe.', 
	'LANGUAGE_PACK_USED_BY'				=> 'Utilizado por (incluindo bots)', 
	'LANGUAGE_VARIABLE'					=> 'Variável de linguagem', 
	'LANG_AUTHOR'						=> 'Autor do pacote de idiomas', 
	'LANG_ENGLISH_NAME'					=> 'Nome em inglês', 
	'LANG_ISO_CODE'						=> 'Código ISO', 
	'LANG_LOCAL_NAME'					=> 'Nome local', 

	'MISSING_LANGUAGE_FILE'		=> 'Arquivo de linguagem ausente: <strong style="color:red">%s</strong>', 
	'MISSING_LANG_VARIABLES'	=> 'Variáveis de linguagem ausentes', 
	'MODS_FILES'				=> 'Arquivos de linguagem de MODs', 

	'NO_FILE_SELECTED'				=> 'Você não especificou o arquivo de linguagem.', 
	'NO_LANG_ID'					=> 'Você não especificou um pacote de idiomas.', 
	'NO_REMOVE_DEFAULT_LANG'		=> 'Você não pode excluir o pacote de idiomas padrão.<br />Se você deseja excluir este pacote, primeiro altere o idioma padrão do seu painel.', 
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Não há pacotes de idiomas desinstalados', 

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Excluir da pasta de armazenamento', 

	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecionar método para download', 
	'SUBMIT_AND_DOWNLOAD'		=> 'Enviar e baixar arquivo', 
	'SUBMIT_AND_UPLOAD'			=> 'Enviar e fazer upload do arquivo', 

	'THOSE_MISSING_LANG_FILES'			=> 'Os arquivos seguintes estão ausentes da pasta %s de idiomas', 
	'THOSE_MISSING_LANG_VARIABLES'		=> 'As variáveis seguintes estão ausentes do pacote de idiomas <strong>%s</strong>', 

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Pacotes de Idiomas Desinstalados', 

	'UNABLE_TO_WRITE_FILE'		=> 'O arquivo não pôde ser escrito para %s.', 
	'UPLOAD_COMPLETED'			=> 'O envio foi concluído com sucesso.', 
	'UPLOAD_FAILED'				=> 'O envio falhou por razões desconhecidas. Você deve substituir o arquivo relevante manualmente.', 
	'UPLOAD_METHOD'				=> 'Enviar método', 
	'UPLOAD_SETTINGS'			=> 'Enviar configurações', 

	'WRONG_LANGUAGE_FILE'		=> 'O arquivo de linguagem selecionado é inválido.', 
)); 

?>