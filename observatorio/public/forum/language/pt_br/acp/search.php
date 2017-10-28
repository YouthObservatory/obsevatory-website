<?php 
/**
*
* acp_search [Português Brasileiro]
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aqui você pode gerenciar todos os índices de pesquisa de seu fórum. Desde que você normalmente utilize apenas um modo de pesquisa, você deve excluir todos os outros os quais não utilizará. Depois de alterar algumas das configurações da pesquisa (ex. o número mínimo/máximo de caracteres), é preciso recriar o índice para que então tais configurações sejam refletidas.', 
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aqui você pode definir o modo de pesquisa que será utilizado para a execução deste sistema. Você pode determinar várias opções que podem influir em quantos processos estas ações serão solicitadas. Algumas destas configurações são as mesmas para todos os modos de pesquisa.', 

	'COMMON_WORD_THRESHOLD'					=> 'Limite de palavras comuns', 
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Palavras que estão contidas em uma grande porcentagem de mensagens serão consideradas comuns. Palavras comuns serão ignoradas nas pesquisas. Escreva zero para desativar. Apenas terá efeito se elas estiverem em mais de 100 mensagens. Se você deseja que palavras que estejam atualmente sendo consideradas comuns sejam reconsideradas, você deve recriar o índice.', 
	'CONFIRM_SEARCH_BACKEND'				=> 'Você deseja realmente alterar o modo de pesquisa para outro diferente? Depois de modificar o seu modo de pesquisa, você deverá criar um novo índice para o novo modo selecionado. Se você não planeja voltar ao seu modo de pesquisa antigo, poderá excluí-lo se achar necessário.', 
	'CONTINUE_DELETING_INDEX'				=> 'Continuar processo de exclusão de índice',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Um processo de exclusão de índice foi iniciado. Em ordem para acessar a página do índice da pesquisa novamente, você deve completar o processo ou cancelá-lo.',
	'CONTINUE_INDEXING'						=> 'Continuar processo de criação de índice', 
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Um processo de criação de índice foi iniciado. Em ordem para acessar a página do índice da pesquisa novamente, você deve completar o processo ou cancelá-lo.',
	'CREATE_INDEX'							=> 'Criar índice', 

	'DELETE_INDEX'							=> 'Excluir índice', 
	'DELETING_INDEX_IN_PROGRESS'			=> 'Excluindo o índice em progresso', 
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'O modo de pesquisa está atualmente limpando os seus índices. Isto pode levar alguns minutos.', 

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'O modo de pesquisa de textos completos do MySQL pode apenas ser utilizado com o MySQL4 ou superiores.', 
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'Índices de textos completos do MySQL podem apenas ser utilizados com tabelas do MyISAM.', 
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Número total de mensagens indexadas', 
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Suporte para caracteres non-latin UTF-8 utilizando mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Suporte para caracteres non-latin UTF-8 utilizando PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'Se o PCRE não tiver propriedades de caractere unicode, o sistema de pesquisas tentará utilizar o sistema de expressão regular mbstring.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'Esta pesquisa exige propriedades de caractere PCRE, que somente estão presentes nas versões superiores ao PHP 4.4, 5.1, se você quiser procurar por caracteres non-latin.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Palavras com pelo menos essa quantidade de caracteres serão indexadas na pesquisa. Você ou seu servidor só poderão alterar essa configuração se a configuração do mysql for alterada.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Palavras com no máximo esse número de caracteres serão indexadas na pesquisa. Você ou seu servidor só poderão alterar essa configuração se a configuração do mysql for alterada.',
	
	'GENERAL_SEARCH_SETTINGS'				=> 'Configurações gerais da pesquisa', 
	'GO_TO_SEARCH_INDEX'					=> 'Ir à página inicial da pesquisa', 

	'INDEX_STATS'							=> 'Índice de estatísticas', 
	'INDEXING_IN_PROGRESS'					=> 'Indexação em progresso', 
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'O modo de pesquisa está atualmente indexando todas as mensagens do fórum. Isto pode levar de alguns minutos a algumas horas, dependendo do tamanho de seu painel.', 

	'LIMIT_SEARCH_LOAD'						=> 'Limite de tempo para carregar as pesquisas', 
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se a carga do sistema de 1 minuto exceder este valor, a página de pesquisa irá ficar offline, sendo 1.0 equivalente 100% de utilização de um processador. Isto apenas funciona em servidores baseados em UNIX.', 

	'MAX_SEARCH_CHARS'						=> 'Número máximo de caracteres indexados por pesquisa', 
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Palavras que não possuam mais caracteres que este número serão indexadas pela pesquisa.', 
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Número máximo de palavras-chave permitido',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Número máximo de palavras que o usuário pode pesquisar. Um valor como 0 permite um número ilimitado de palavras.',	
	'MIN_SEARCH_CHARS'						=> 'Número mínimo de caracteres indexados por pesquisa', 
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Palavras que possuam menos caracteres que este número não serão indexadas pela pesquisa.', 
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Núm. mín. de caracteres do nome do autor', 
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os usuários terão de escrever ao menos este número de caracteres enquanto executando uma pesquisa por autor. Se o nome do autor for menor que este número, você ainda poderá pesquisar pelas mensagens do mesmo, escrevendo o nome do usuário completo.', 

	'PROGRESS_BAR'							=> 'Barra de progresso', 

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de pesquisas para visitantes', 
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Número em segundos que um visitante deverá aguardar entre uma pesquisa e outra. Se um visitante realizar uma pesquisa, todos os outros devem aguardar até que este intervalo seja concluído.', 
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'Todas as mensagens com id superior a %1$d serão indexadas agora, das quais %2$d mensagens foram geradas nesta etapa.<br />A taxa atual de indexação é de aproximadamente %3$ mensagens por segundo.<br />Indexação em progresso…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'Todas as mensagens com id superior a %1$d serão excluídas do sistema de pesquisas.<br />Exclusão em progresso…',	
	'SEARCH_INDEX_CREATED'					=> 'Todas as mensagens foram indexadas no banco de dados com sucesso.', 
	'SEARCH_INDEX_REMOVED'					=> 'O índice de pesquisa para este módulo foi excluído com sucesso.', 
	'SEARCH_INTERVAL'						=> 'Intervalo de pesquisas para usuários', 
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Número em segundos que os usuários devem aguardar entre uma pesquisa e outra. Este intervalo é realizado independentemente para cada usuário.', 
	'SEARCH_STORE_RESULTS'					=> 'Tamanho do cache de resultados da pesquisa', 
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'O cache dos resultados da pesquisa irá expirar após este tempo, em segundos. Escreva 0 se você deseja desativar esta opção.', 
	'SEARCH_TYPE'							=> 'Modo de pesquisa', 
	'SEARCH_TYPE_EXPLAIN'					=> 'O phpBB lhe permite selecionar o modo que será utilizado para as suas pesquisas no conteúdo das mensagens. Por padrão, será utilizado apenas o próprio sistema de pesquisas por textos completos.', 
	'SWITCHED_SEARCH_BACKEND'				=> 'O modo de pesquisa foi selecionado com sucesso. Agora, para utilizá-lo você terá de certificar-se da existência de um índice para o modo escolhido.', 

	'TOTAL_WORDS'							=> 'Número total de palavras indexadas', 
	'TOTAL_MATCHES'							=> 'Número total de palavras relacionadas à mensagens indexadas', 

	'YES_SEARCH'							=> 'Ativar ferramentas de pesquisa', 
	'YES_SEARCH_EXPLAIN'					=> 'Ativa a funcionalidade da pesquisa, incluindo a pesquisa de usuários.', 
	'YES_SEARCH_UPDATE'						=> 'Ativar a atualização de textos completos', 
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Os índices de texto completo são atualizados ao enviar uma mensagem, mesmo se a pesquisa estiver desativada.', 
)); 

?>