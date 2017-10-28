<?php

/* mcp_ban.html */
class __TwigTemplate_c791f9f42c2ec001c807fa598e9c9ae6b78f0b80589cdde2a4f2c6ed8d4b41ba extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_ban.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script type=\"text/javascript\">
// <![CDATA[

\tvar ban_length = new Array();
\t\tban_length[-1] = '';
\tvar ban_reason = new Array();
\t\tban_reason[-1] = '';
\tvar ban_give_reason = new Array();
\t\tban_give_reason[-1] = '';

\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bans", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["bans"]) {
            // line 14
            echo "\t\tban_length['";
            echo $this->getAttribute($context["bans"], "BAN_ID", array());
            echo "'] = '";
            echo $this->getAttribute($context["bans"], "A_LENGTH", array());
            echo "';
\t\t";
            // line 15
            if ($this->getAttribute($context["bans"], "A_REASON", array())) {
                // line 16
                echo "\t\t\tban_reason['";
                echo $this->getAttribute($context["bans"], "BAN_ID", array());
                echo "'] = '";
                echo $this->getAttribute($context["bans"], "A_REASON", array());
                echo "';
\t\t";
            }
            // line 18
            echo "\t\t";
            if ($this->getAttribute($context["bans"], "A_GIVE_REASON", array())) {
                // line 19
                echo "\t\t\tban_give_reason['";
                echo $this->getAttribute($context["bans"], "BAN_ID", array());
                echo "'] = '";
                echo $this->getAttribute($context["bans"], "A_GIVE_REASON", array());
                echo "';
\t\t";
            }
            // line 21
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
\tfunction display_details(option)
\t{
\t\tdocument.getElementById('unbanlength').innerHTML = ban_length[option];
\t\tif (option in ban_reason) {
\t\t\tdocument.getElementById('unbanreason').innerHTML = ban_reason[option];
\t\t} else {
\t\t\tdocument.getElementById('unbanreason').innerHTML = '';
\t\t}
\t\tif (option in ban_give_reason) {
\t\t\tdocument.getElementById('unbangivereason').innerHTML = ban_give_reason[option];
\t\t} else {
\t\t\tdocument.getElementById('unbangivereason').innerHTML = '';
\t\t}
\t}

// ]]>
</script>

<form id=\"mcp_ban\" method=\"post\" action=\"";
        // line 41
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<h2>";
        // line 43
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3>
\t<p>";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
        echo "</p>

\t<fieldset>
\t";
        // line 52
        // line 53
        echo "\t<dl>
\t\t<dt><label for=\"ban\">";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("BAN_CELL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><label for=\"ban\"><textarea name=\"ban\" id=\"ban\" class=\"inputbox\" cols=\"40\" rows=\"3\">";
        // line 55
        echo (isset($context["BAN_QUANTIFIER"]) ? $context["BAN_QUANTIFIER"] : null);
        echo "</textarea></label></dd>
\t\t";
        // line 56
        if ((isset($context["S_USERNAME_BAN"]) ? $context["S_USERNAME_BAN"] : null)) {
            echo "<dd><strong><a href=\"";
            echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
            echo "</a></strong></dd>";
        }
        // line 57
        echo "\t</dl>
\t<dl>
\t\t<dt><label for=\"banlength\">";
        // line 59
        echo $this->env->getExtension('phpbb')->lang("BAN_LENGTH");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><label for=\"banlength\"><select name=\"banlength\" id=\"banlength\" onchange=\"if(this.value==-1){document.getElementById('banlengthother').style.display = 'block';}else{document.getElementById('banlengthother').style.display='none';}\">";
        // line 60
        echo (isset($context["S_BAN_END_OPTIONS"]) ? $context["S_BAN_END_OPTIONS"] : null);
        echo "</select></label></dd>
\t\t<dd id=\"banlengthother\" style=\"display: none;\"><label><input type=\"text\" name=\"banlengthother\" class=\"inputbox\" /><br /><span>";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("YEAR_MONTH_DAY");
        echo "</span></label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"banreason\">";
        // line 64
        echo $this->env->getExtension('phpbb')->lang("BAN_REASON");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input name=\"banreason\" id=\"banreason\" type=\"text\" class=\"inputbox\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bangivereason\">";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("BAN_GIVE_REASON");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input name=\"bangivereason\" id=\"bangivereason\" type=\"text\" class=\"inputbox\" maxlength=\"255\" /></dd>
\t</dl>

\t<hr />

\t<dl>
\t\t<dt><label for=\"banexclude0\">";
        // line 75
        echo $this->env->getExtension('phpbb')->lang("BAN_EXCLUDE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("BAN_EXCLUDE_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"banexclude1\"><input type=\"radio\" name=\"banexclude\" id=\"banexclude1\" value=\"1\" /> ";
        // line 77
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"banexclude0\"><input type=\"radio\" name=\"banexclude\" id=\"banexclude0\" value=\"0\" checked=\"checked\" /> ";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 81
        // line 82
        echo "\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 88
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"bansubmit\" value=\"";
        // line 89
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 90
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 96
        echo $this->env->getExtension('phpbb')->lang("UNBAN_TITLE");
        echo "</h3>
\t<p>";
        // line 97
        echo $this->env->getExtension('phpbb')->lang("UNBAN_EXPLAIN");
        echo "</p>

\t";
        // line 99
        if ((isset($context["S_BANNED_OPTIONS"]) ? $context["S_BANNED_OPTIONS"] : null)) {
            // line 100
            echo "\t\t<fieldset>
\t\t";
            // line 101
            // line 102
            echo "\t\t<dl>
\t\t\t<dt><label for=\"unban\">";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("BAN_CELL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"unban[]\" id=\"unban\" multiple=\"multiple\" size=\"5\" onchange=\"if (this.selectedIndex != -1) {display_details(this.options[this.selectedIndex].value);}\">";
            // line 104
            echo (isset($context["BANNED_OPTIONS"]) ? $context["BANNED_OPTIONS"] : null);
            echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("BAN_LENGTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt>
\t\t\t<dd><strong id=\"unbanlength\"></strong></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("BAN_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt>
\t\t\t<dd><strong id=\"unbanreason\"></strong></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("BAN_GIVE_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt>
\t\t\t<dd><strong id=\"unbangivereason\"></strong></dd>
\t\t</dl>
\t\t";
            // line 118
            // line 119
            echo "\t\t</fieldset>

\t\t</div>
\t</div>

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 125
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"reset\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t\t<input type=\"submit\" name=\"unbansubmit\" value=\"";
            // line 126
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t</fieldset>

\t";
        } else {
            // line 130
            echo "
\t\t<p><strong>";
            // line 131
            echo $this->env->getExtension('phpbb')->lang("NO_BAN_CELL");
            echo "</strong></p>

\t\t</div>
\t</div>

\t";
        }
        // line 137
        echo "</form>

";
        // line 139
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_ban.html", 139)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_ban.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 139,  317 => 137,  308 => 131,  305 => 130,  298 => 126,  292 => 125,  284 => 119,  283 => 118,  276 => 115,  268 => 111,  260 => 107,  254 => 104,  249 => 103,  246 => 102,  245 => 101,  242 => 100,  240 => 99,  235 => 97,  231 => 96,  222 => 90,  218 => 89,  212 => 88,  204 => 82,  203 => 81,  197 => 78,  193 => 77,  185 => 75,  174 => 68,  166 => 64,  160 => 61,  156 => 60,  151 => 59,  147 => 57,  139 => 56,  135 => 55,  130 => 54,  127 => 53,  126 => 52,  120 => 49,  116 => 48,  108 => 43,  103 => 41,  82 => 22,  76 => 21,  68 => 19,  65 => 18,  57 => 16,  55 => 15,  48 => 14,  44 => 13,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE mcp_header.html -->*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* */
/* 	var ban_length = new Array();*/
/* 		ban_length[-1] = '';*/
/* 	var ban_reason = new Array();*/
/* 		ban_reason[-1] = '';*/
/* 	var ban_give_reason = new Array();*/
/* 		ban_give_reason[-1] = '';*/
/* */
/* 	<!-- BEGIN bans -->*/
/* 		ban_length['{bans.BAN_ID}'] = '{bans.A_LENGTH}';*/
/* 		<!-- IF bans.A_REASON -->*/
/* 			ban_reason['{bans.BAN_ID}'] = '{bans.A_REASON}';*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF bans.A_GIVE_REASON -->*/
/* 			ban_give_reason['{bans.BAN_ID}'] = '{bans.A_GIVE_REASON}';*/
/* 		<!-- ENDIF -->*/
/* 	<!-- END bans -->*/
/* */
/* 	function display_details(option)*/
/* 	{*/
/* 		document.getElementById('unbanlength').innerHTML = ban_length[option];*/
/* 		if (option in ban_reason) {*/
/* 			document.getElementById('unbanreason').innerHTML = ban_reason[option];*/
/* 		} else {*/
/* 			document.getElementById('unbanreason').innerHTML = '';*/
/* 		}*/
/* 		if (option in ban_give_reason) {*/
/* 			document.getElementById('unbangivereason').innerHTML = ban_give_reason[option];*/
/* 		} else {*/
/* 			document.getElementById('unbangivereason').innerHTML = '';*/
/* 		}*/
/* 	}*/
/* */
/* // ]]>*/
/* </script>*/
/* */
/* <form id="mcp_ban" method="post" action="{U_ACTION}">*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h3>{L_TITLE}</h3>*/
/* 	<p>{L_EXPLAIN}</p>*/
/* */
/* 	<fieldset>*/
/* 	<!-- EVENT mcp_ban_fields_before -->*/
/* 	<dl>*/
/* 		<dt><label for="ban">{L_BAN_CELL}{L_COLON}</label></dt>*/
/* 		<dd><label for="ban"><textarea name="ban" id="ban" class="inputbox" cols="40" rows="3">{BAN_QUANTIFIER}</textarea></label></dd>*/
/* 		<!-- IF S_USERNAME_BAN --><dd><strong><a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a></strong></dd><!-- ENDIF -->*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="banlength">{L_BAN_LENGTH}{L_COLON}</label></dt>*/
/* 		<dd><label for="banlength"><select name="banlength" id="banlength" onchange="if(this.value==-1){document.getElementById('banlengthother').style.display = 'block';}else{document.getElementById('banlengthother').style.display='none';}">{S_BAN_END_OPTIONS}</select></label></dd>*/
/* 		<dd id="banlengthother" style="display: none;"><label><input type="text" name="banlengthother" class="inputbox" /><br /><span>{L_YEAR_MONTH_DAY}</span></label></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="banreason">{L_BAN_REASON}{L_COLON}</label></dt>*/
/* 		<dd><input name="banreason" id="banreason" type="text" class="inputbox" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="bangivereason">{L_BAN_GIVE_REASON}{L_COLON}</label></dt>*/
/* 		<dd><input name="bangivereason" id="bangivereason" type="text" class="inputbox" maxlength="255" /></dd>*/
/* 	</dl>*/
/* */
/* 	<hr />*/
/* */
/* 	<dl>*/
/* 		<dt><label for="banexclude0">{L_BAN_EXCLUDE}{L_COLON}</label><br /><span>{L_BAN_EXCLUDE_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<label for="banexclude1"><input type="radio" name="banexclude" id="banexclude1" value="1" /> {L_YES}</label> */
/* 			<label for="banexclude0"><input type="radio" name="banexclude" id="banexclude0" value="0" checked="checked" /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- EVENT mcp_ban_fields_after -->*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp; */
/* 	<input type="submit" name="bansubmit" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h3>{L_UNBAN_TITLE}</h3>*/
/* 	<p>{L_UNBAN_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_BANNED_OPTIONS -->*/
/* 		<fieldset>*/
/* 		<!-- EVENT mcp_ban_unban_before -->*/
/* 		<dl>*/
/* 			<dt><label for="unban">{L_BAN_CELL}{L_COLON}</label></dt>*/
/* 			<dd><select name="unban[]" id="unban" multiple="multiple" size="5" onchange="if (this.selectedIndex != -1) {display_details(this.options[this.selectedIndex].value);}">{BANNED_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt>{L_BAN_LENGTH}{L_COLON}</dt>*/
/* 			<dd><strong id="unbanlength"></strong></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt>{L_BAN_REASON}{L_COLON}</dt>*/
/* 			<dd><strong id="unbanreason"></strong></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt>{L_BAN_GIVE_REASON}{L_COLON}</dt>*/
/* 			<dd><strong id="unbangivereason"></strong></dd>*/
/* 		</dl>*/
/* 		<!-- EVENT mcp_ban_unban_after -->*/
/* 		</fieldset>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp; */
/* 		<input type="submit" name="unbansubmit" value="{L_SUBMIT}" class="button1" />*/
/* 	</fieldset>*/
/* */
/* 	<!-- ELSE -->*/
/* */
/* 		<p><strong>{L_NO_BAN_CELL}</strong></p>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- ENDIF -->*/
/* </form>*/
/* */
/* <!-- INCLUDE mcp_footer.html -->*/
/* */
