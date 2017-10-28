<?php
/**
*
* search [Português Brasileiro]
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
	'ALL_AVAILABLE'			=> 'Todos possíveis', 
	'ALL_RESULTS'			=> 'Todos os resultados', 

	'DISPLAY_RESULTS'		=> 'Exibir resultados como', 

	'FOUND_SEARCH_MATCH'		=> 'Pesquisa resultou em %d ocorrência', 
	'FOUND_SEARCH_MATCHES'		=> 'Pesquisa resultou em %d ocorrências', 
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Pesquisa resultou em mais de %d ocorrências', 

	'GLOBAL'				=> 'Anúncio global', 

	'IGNORED_TERMS'			=> 'ignorados', 
	'IGNORED_TERMS_EXPLAIN'	=> 'As seguintes palavras foram ignoradas em sua pesquisa porque são termos muito comuns: <strong>%s</strong>',
	
	'JUMP_TO_POST'			=> 'Ir à mensagem',	

 	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Este painel exige que você esteja registrado e autenticado para ver as suas mensagens.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Este painel exige que você esteja registrado e autenticado para ver as suas mensagens não lidas.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Este painel exige que você esteja registrado e autenticado para ver as novas mensagens desde a sua última visita.',
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Você especificou muitas palavras em sua pesquisa. Por favor, não insira mais que %1$d palavras.',
	
	'NO_KEYWORDS'			=> 'Você deve especificar pelo menos uma palavra para efetuar a pesquisa. Cada palavra deve ter no mínimo %d caracteres e não deve ultrapassar o limite de %d caracteres.', 
	'NO_RECENT_SEARCHES'	=> 'Nenhuma pesquisa tem sido realizada recentemente.',
	'NO_SEARCH'				=> 'Você não pode utilizar o sistema de pesquisas do fórum.', 
	'NO_SEARCH_RESULTS'		=> 'Nenhuma mensagem foi encontrada utilizando estes critérios', 
	'NO_SEARCH_TIME'		=> 'Você não pode utilizar o sistema de pesquisas agora. Por favor, tente novamente em alguns minutos.',
	'NO_SEARCH_UNREADS'		=> 'Desculpe, mas as pesquisas pelas mensagens não lidas está desativada neste fórum.',
	'WORD_IN_NO_POST'		=> 'Nenhuma mensagem foi encontrada, pois a palavra %s não foi localizada em nenhuma ocorrência.', 
	'WORDS_IN_NO_POST'		=> 'Nenhuma mensagem foi encontrada, pois as palavras %s não foram localizadas em nenhuma ocorrência.', 

	'POST_CHARACTERS'		=> 'caracteres das mensagens', 

	'RECENT_SEARCHES'		=> 'Pesquisas recentes', 
	'RESULT_DAYS'			=> 'Limitar resultados anteriores', 
	'RESULT_SORT'			=> 'Classificar resultados por', 
	'RETURN_FIRST'			=> 'Voltar aos primeiros', 
	'RETURN_TO_SEARCH_ADV'	=> 'Voltar à pesquisa avançada',
	
	'SEARCHED_FOR'				=> 'Pesquisar por termo utilizado', 
	'SEARCHED_TOPIC'			=> 'Tópico pesquisado', 
	'SEARCH_ALL_TERMS'			=> 'Pesquisar por todos os termos escritos', 
	'SEARCH_ANY_TERMS'			=> 'Pesquisar por qualquer termo', 
	'SEARCH_AUTHOR'				=> 'Pesquisar por autor', 
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Use * como complemento para palavras parciais.', 
	'SEARCH_FIRST_POST'			=> 'Apenas a primeira mensagem dos tópicos', 
	'SEARCH_FORUMS'				=> 'Pesquisar nos fóruns', 
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selecione o fórum, ou os fóruns, no qual você deseja realizar a pesquisa. Todos os sub fóruns serão incluídos na pesquisa se você não desmarcar a opção "Pesquisar nos sub fóruns" abaixo.', 
	'SEARCH_IN_RESULTS'			=> 'Pesquisar por estes resultados', 
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Você pode inserir <strong>+</strong> na frente de uma palavra que deve ser localizada na pesquisa e <strong>-</strong> na frente de uma palavra que não deve ser localizada. Escreva uma lista de palavras separadas por <strong>|</strong> se somente uma das palavras inseridas deva ser encontrada. Use * como complemento para resultados parciais.', 
	'SEARCH_MSG_ONLY'			=> 'Somente texto da mensagem', 
	'SEARCH_OPTIONS'			=> 'Opções da pesquisa', 
	'SEARCH_QUERY'				=> 'Termos da pesquisa', 
	'SEARCH_SUBFORUMS'			=> 'Pesquisar nos sub fóruns', 
	'SEARCH_TITLE_MSG'			=> 'Pesquisar nos títulos e mensagens', 
	'SEARCH_TITLE_ONLY'			=> 'Pesquisar apenas nos títulos', 
	'SEARCH_WITHIN'				=> 'Pesquisar com', 
	'SORT_ASCENDING'			=> 'Crescente', 
	'SORT_AUTHOR'				=> 'Autor', 
	'SORT_DESCENDING'			=> 'Decrescente', 
	'SORT_FORUM'				=> 'Fórum', 
	'SORT_POST_SUBJECT'			=> 'Título da mensagem', 
	'SORT_TIME'					=> 'Enviado em', 

	'TOO_FEW_AUTHOR_CHARS'	=> 'Você deve especificar pelo menos %d caracteres no nome do autor.', 
)); 

?>