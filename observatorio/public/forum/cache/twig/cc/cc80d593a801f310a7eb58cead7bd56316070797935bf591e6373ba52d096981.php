<?php

/* mcp_logs.html */
class __TwigTemplate_1e4849deb2f94b310ad741f9dac689c777761cbcdbeb503b2728362f7d0e59bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_logs.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<form method=\"post\" id=\"mcp\" action=\"";
        // line 5
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar top\">
\t\t";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <input type=\"search\" class=\"inputbox autowidth\" name=\"keywords\" value=\"";
        echo (isset($context["S_KEYWORDS"]) ? $context["S_KEYWORDS"] : null);
        echo "\" />&nbsp;<input type=\"submit\" class=\"button2\" name=\"filter\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" />
\t\t<div class=\"pagination\">
\t\t\t";
        // line 13
        echo (isset($context["TOTAL"]) ? $context["TOTAL"] : null);
        echo "
\t\t\t";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            echo " 
\t\t\t\t";
            // line 15
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_logs.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 16
            echo "\t\t\t";
        } else {
            echo " 
\t\t\t\t &bull; ";
            // line 17
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t\t";
        }
        // line 19
        echo "\t\t</div>
\t</div>

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th class=\"name\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "</th>
\t\t<th class=\"center\">";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("IP");
        echo "</th>
\t\t<th class=\"center\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("TIME");
        echo "</th>
\t\t<th class=\"name\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("ACTION");
        echo "</th>
\t\t";
        // line 29
        if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
            echo "<th>";
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>";
        }
        // line 30
        echo "\t</tr>
\t</thead>
\t\t<tbody>
\t";
        // line 33
        if ((isset($context["S_LOGS"]) ? $context["S_LOGS"] : null)) {
            // line 34
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 35
                echo "\t\t";
                if (($this->getAttribute($context["log"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "<tr class=\"bg1\">";
                } else {
                    echo "<tr class=\"bg2\">";
                }
                // line 36
                echo "\t\t\t<td>";
                echo $this->getAttribute($context["log"], "USERNAME", array());
                echo "</td>
\t\t\t<td class=\"center\">";
                // line 37
                echo $this->getAttribute($context["log"], "IP", array());
                echo "</td>
\t\t\t<td class=\"center\">";
                // line 38
                echo $this->getAttribute($context["log"], "DATE", array());
                echo "</td>
\t\t\t<td>";
                // line 39
                echo $this->getAttribute($context["log"], "ACTION", array());
                echo "<br />
\t\t\t";
                // line 40
                echo $this->getAttribute($context["log"], "DATA", array());
                echo "
\t\t</td>
\t\t\t";
                // line 42
                if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                    echo "<td style=\"width: 5%\" align=\"center\"><input type=\"checkbox\" name=\"mark[]\" value=\"";
                    echo $this->getAttribute($context["log"], "ID", array());
                    echo "\" /></td>";
                }
                // line 43
                echo "\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t";
        } else {
            // line 46
            echo "\t\t<tr>
\t\t\t<td class=\"bg1\" colspan=\"";
            // line 47
            if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\" align=\"center\"><span class=\"gen\">";
            echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
            echo "</span></td>
\t\t</tr>
\t";
        }
        // line 50
        echo "\t</tbody>
\t</table>

\t";
        // line 53
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log", array()))) {
            // line 54
            echo "\t\t<fieldset class=\"display-options\">
\t\t\t<label>";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t\t<label>";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " ";
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "</label>
\t\t\t<label>";
            // line 57
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t</fieldset>

\t\t<hr />

\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 65
            echo (isset($context["TOTAL"]) ? $context["TOTAL"] : null);
            echo "
\t\t\t\t";
            // line 66
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 67
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_logs.html", 67)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 68
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 69
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t";
            }
            // line 71
            echo "\t\t\t</div>
\t\t</div>

\t\t";
            // line 74
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</div>
\t</div>

\t\t";
            // line 78
            if ((isset($context["S_CLEAR_ALLOWED"]) ? $context["S_CLEAR_ALLOWED"] : null)) {
                // line 79
                echo "\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                // line 80
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                echo "\" />
\t\t\t\t&nbsp;<input class=\"button1\" type=\"submit\" value=\"";
                // line 81
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\" name=\"action[del_marked]\" />

\t\t\t\t<div><a href=\"#\" onclick=\"marklist('mcp', 'mark', true); return false;\">";
                // line 83
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'mark', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t\t</fieldset>
\t\t";
            }
            // line 86
            echo "\t";
        } else {
            // line 87
            echo "\t\t\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 91
        echo "</form>

<br />

";
        // line 95
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_logs.html", 95)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_logs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 95,  302 => 91,  294 => 87,  291 => 86,  283 => 83,  278 => 81,  274 => 80,  271 => 79,  269 => 78,  262 => 74,  257 => 71,  252 => 69,  247 => 68,  235 => 67,  231 => 66,  227 => 65,  217 => 58,  213 => 57,  207 => 56,  200 => 55,  197 => 54,  195 => 53,  190 => 50,  178 => 47,  175 => 46,  172 => 45,  165 => 43,  159 => 42,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  137 => 36,  130 => 35,  125 => 34,  123 => 33,  118 => 30,  112 => 29,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  88 => 19,  83 => 17,  78 => 16,  66 => 15,  62 => 14,  58 => 13,  48 => 11,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <form method="post" id="mcp" action="{U_POST_ACTION}">*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<div class="action-bar top">*/
/* 		{L_SEARCH_KEYWORDS}{L_COLON} <input type="search" class="inputbox autowidth" name="keywords" value="{S_KEYWORDS}" />&nbsp;<input type="submit" class="button2" name="filter" value="{L_SEARCH}" />*/
/* 		<div class="pagination">*/
/* 			{TOTAL}*/
/* 			<!-- IF .pagination --> */
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE --> */
/* 				 &bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<table class="table1">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th class="name">{L_USERNAME}</th>*/
/* 		<th class="center">{L_IP}</th>*/
/* 		<th class="center">{L_TIME}</th>*/
/* 		<th class="name">{L_ACTION}</th>*/
/* 		<!-- IF S_CLEAR_ALLOWED --><th>{L_MARK}</th><!-- ENDIF -->*/
/* 	</tr>*/
/* 	</thead>*/
/* 		<tbody>*/
/* 	<!-- IF S_LOGS -->*/
/* 		<!-- BEGIN log -->*/
/* 		<!-- IF log.S_ROW_COUNT is even --><tr class="bg1"><!-- ELSE --><tr class="bg2"><!-- ENDIF -->*/
/* 			<td>{log.USERNAME}</td>*/
/* 			<td class="center">{log.IP}</td>*/
/* 			<td class="center">{log.DATE}</td>*/
/* 			<td>{log.ACTION}<br />*/
/* 			{log.DATA}*/
/* 		</td>*/
/* 			<!-- IF S_CLEAR_ALLOWED --><td style="width: 5%" align="center"><input type="checkbox" name="mark[]" value="{log.ID}" /></td><!-- ENDIF -->*/
/* 		</tr>*/
/* 		<!-- END log -->*/
/* 	<!-- ELSE -->*/
/* 		<tr>*/
/* 			<td class="bg1" colspan="<!-- IF S_CLEAR_ALLOWED -->5<!-- ELSE -->4<!-- ENDIF -->" align="center"><span class="gen">{L_NO_ENTRIES}</span></td>*/
/* 		</tr>*/
/* 	<!-- ENDIF -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<!-- IF .log -->*/
/* 		<fieldset class="display-options">*/
/* 			<label>{L_DISPLAY_POSTS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 			<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label>*/
/* 			<label>{S_SELECT_SORT_DIR}</label>*/
/* 			<input type="submit" name="sort" value="{L_GO}" class="button2" />*/
/* 		</fieldset>*/
/* */
/* 		<hr />*/
/* */
/* 		<div class="action-bar bottom">*/
/* 			<div class="pagination">*/
/* 				{TOTAL}*/
/* 				<!-- IF .pagination --> */
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE --> */
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{S_FORM_TOKEN}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 		<!-- IF S_CLEAR_ALLOWED -->*/
/* 			<fieldset class="display-actions">*/
/* 				<input class="button2" type="submit" name="action[del_all]" value="{L_DELETE_ALL}" />*/
/* 				&nbsp;<input class="button1" type="submit" value="{L_DELETE_MARKED}" name="action[del_marked]" />*/
/* */
/* 				<div><a href="#" onclick="marklist('mcp', 'mark', true); return false;">{L_MARK_ALL}</a> :: <a href="#" onclick="marklist('mcp', 'mark', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* 			</fieldset>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ELSE -->*/
/* 			{S_FORM_TOKEN}*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* </form>*/
/* */
/* <br />*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
