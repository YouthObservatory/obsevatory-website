<?php

/* ucp_prefs_post.html */
class __TwigTemplate_d4721aaec7984a3c586ec02c77dc4ddb312db55d78a233d636302f7d179dc2a3 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_prefs_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>
<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t";
        // line 10
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 11
        echo "\t";
        // line 12
        echo "\t<dl>
\t\t<dt><label for=\"bbcode1\">";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_BBCODE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"bbcode1\"><input type=\"radio\" name=\"bbcode\" id=\"bbcode1\" value=\"1\"";
        // line 15
        if ((isset($context["S_BBCODE"]) ? $context["S_BBCODE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"bbcode0\"><input type=\"radio\" name=\"bbcode\" id=\"bbcode0\" value=\"0\"";
        // line 16
        if ( !(isset($context["S_BBCODE"]) ? $context["S_BBCODE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"smilies1\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_SMILIES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"smilies1\"><input type=\"radio\" name=\"smilies\" id=\"smilies1\" value=\"1\"";
        // line 22
        if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"smilies0\"><input type=\"radio\" name=\"smilies\" id=\"smilies0\" value=\"0\"";
        // line 23
        if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sig1\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_ADD_SIG");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"sig1\"><input type=\"radio\" name=\"sig\" id=\"sig1\" value=\"1\"";
        // line 29
        if ((isset($context["S_SIG"]) ? $context["S_SIG"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"sig0\"><input type=\"radio\" name=\"sig\" id=\"sig0\" value=\"0\"";
        // line 30
        if ( !(isset($context["S_SIG"]) ? $context["S_SIG"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"notify1\">";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_NOTIFY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"notify1\"><input type=\"radio\" name=\"notify\" id=\"notify1\" value=\"1\"";
        // line 36
        if ((isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"notify0\"><input type=\"radio\" name=\"notify\" id=\"notify0\" value=\"0\"";
        // line 37
        if ( !(isset($context["S_NOTIFY"]) ? $context["S_NOTIFY"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 40
        // line 41
        echo "\t</fieldset>
\t
\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 47
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 49
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 53
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_post.html", 53)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 53,  178 => 49,  174 => 48,  168 => 47,  160 => 41,  159 => 40,  149 => 37,  141 => 36,  135 => 34,  124 => 30,  116 => 29,  110 => 27,  99 => 23,  91 => 22,  85 => 20,  74 => 16,  66 => 15,  60 => 13,  57 => 12,  55 => 11,  49 => 10,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<fieldset>*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* 	<!-- EVENT ucp_prefs_post_prepend -->*/
/* 	<dl>*/
/* 		<dt><label for="bbcode1">{L_DEFAULT_BBCODE}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="bbcode1"><input type="radio" name="bbcode" id="bbcode1" value="1"<!-- IF S_BBCODE --> checked="checked"<!-- ENDIF --> /> {L_YES}</label> */
/* 			<label for="bbcode0"><input type="radio" name="bbcode" id="bbcode0" value="0"<!-- IF not S_BBCODE --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="smilies1">{L_DEFAULT_SMILIES}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="smilies1"><input type="radio" name="smilies" id="smilies1" value="1"<!-- IF S_SMILIES --> checked="checked"<!-- ENDIF --> /> {L_YES}</label> */
/* 			<label for="smilies0"><input type="radio" name="smilies" id="smilies0" value="0"<!-- IF not S_SMILIES --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="sig1">{L_DEFAULT_ADD_SIG}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="sig1"><input type="radio" name="sig" id="sig1" value="1"<!-- IF S_SIG --> checked="checked"<!-- ENDIF --> /> {L_YES}</label> */
/* 			<label for="sig0"><input type="radio" name="sig" id="sig0" value="0"<!-- IF not S_SIG --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="notify1">{L_DEFAULT_NOTIFY}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="notify1"><input type="radio" name="notify" id="notify1" value="1"<!-- IF S_NOTIFY --> checked="checked"<!-- ENDIF --> /> {L_YES}</label> */
/* 			<label for="notify0"><input type="radio" name="notify" id="notify0" value="0"<!-- IF not S_NOTIFY --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- EVENT ucp_prefs_post_append -->*/
/* 	</fieldset>*/
/* 	*/
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp; */
/* 	<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
