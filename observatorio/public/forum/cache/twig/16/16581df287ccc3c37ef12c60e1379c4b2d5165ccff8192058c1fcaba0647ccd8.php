<?php

/* ucp_profile_reg_details.html */
class __TwigTemplate_736e82571f6a5493ec62332e31eb6d13554444f7c0e785dca919035bff2bebf9 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_reg_details.html", 1)->display($context);
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

\t";
        // line 9
        if ((isset($context["S_FORCE_PASSWORD"]) ? $context["S_FORCE_PASSWORD"] : null)) {
            // line 10
            echo "\t\t<p class=\"error\">";
            echo $this->env->getExtension('phpbb')->lang("FORCE_PASSWORD_EXPLAIN");
            echo "</p>
\t";
        }
        // line 12
        echo "
\t<fieldset>
\t";
        // line 14
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 15
        echo "\t";
        // line 16
        echo "\t<dl>
\t\t<dt><label ";
        // line 17
        if ((isset($context["S_CHANGE_USERNAME"]) ? $context["S_CHANGE_USERNAME"] : null)) {
            echo "for=\"username\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd>";
        // line 18
        if ((isset($context["S_CHANGE_USERNAME"]) ? $context["S_CHANGE_USERNAME"] : null)) {
            echo "<input type=\"text\" name=\"username\" id=\"username\" value=\"";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" />";
        } else {
            echo "<strong>";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</strong>";
        }
        echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"email\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 22
        if ((isset($context["S_CHANGE_EMAIL"]) ? $context["S_CHANGE_EMAIL"] : null)) {
            echo "<input type=\"email\" name=\"email\" id=\"email\" maxlength=\"100\" value=\"";
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo "\" autocomplete=\"off\" />";
        } else {
            echo "<strong>";
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "</strong>";
        }
        echo "</dd>
\t</dl>
\t";
        // line 24
        if ((isset($context["S_CHANGE_PASSWORD"]) ? $context["S_CHANGE_PASSWORD"] : null)) {
            // line 25
            echo "\t\t<dl>
\t\t\t<dt><label for=\"new_password\">";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("NEW_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"password\" name=\"new_password\" id=\"new_password\" maxlength=\"255\" value=\"";
            // line 27
            echo (isset($context["NEW_PASSWORD"]) ? $context["NEW_PASSWORD"] : null);
            echo "\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD");
            echo "\" autocomplete=\"off\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"password_confirm\">";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" maxlength=\"255\" value=\"";
            // line 31
            echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
            echo "\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
            echo "\" autocomplete=\"off\" /></dd>
\t\t</dl>
\t";
        }
        // line 34
        echo "\t";
        echo "\t
\t</fieldset>
\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t<dl>
\t\t<dt><label for=\"cur_password\">";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        if ((isset($context["S_CHANGE_PASSWORD"]) ? $context["S_CHANGE_PASSWORD"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("CURRENT_CHANGE_PASSWORD_EXPLAIN");
        } else {
            echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD_EXPLAIN");
        }
        echo "</span></dt>
\t\t<dd><input type=\"password\" name=\"cur_password\" id=\"cur_password\" maxlength=\"255\" value=\"";
        // line 45
        echo (isset($context["CUR_PASSWORD"]) ? $context["CUR_PASSWORD"] : null);
        echo "\" class=\"inputbox\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD");
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 53
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 55
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 59
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_reg_details.html", 59)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_reg_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 59,  200 => 55,  196 => 54,  190 => 53,  177 => 45,  166 => 44,  153 => 34,  145 => 31,  138 => 30,  130 => 27,  123 => 26,  120 => 25,  118 => 24,  103 => 22,  98 => 21,  82 => 18,  71 => 17,  68 => 16,  66 => 15,  60 => 14,  56 => 12,  50 => 10,  48 => 9,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
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
/* 	<!-- IF S_FORCE_PASSWORD -->*/
/* 		<p class="error">{L_FORCE_PASSWORD_EXPLAIN}</p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset>*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* 	<!-- EVENT ucp_profile_register_details_before -->*/
/* 	<dl>*/
/* 		<dt><label <!-- IF S_CHANGE_USERNAME -->for="username"<!-- ENDIF -->>{L_USERNAME}{L_COLON}</label><br /><span>{L_USERNAME_EXPLAIN}</span></dt>*/
/* 		<dd><!-- IF S_CHANGE_USERNAME --><input type="text" name="username" id="username" value="{USERNAME}" class="inputbox" title="{L_USERNAME}" /><!-- ELSE --><strong>{USERNAME}</strong><!-- ENDIF --></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="email">{L_EMAIL_ADDRESS}{L_COLON}</label></dt>*/
/* 		<dd><!-- IF S_CHANGE_EMAIL --><input type="email" name="email" id="email" maxlength="100" value="{EMAIL}" class="inputbox" title="{L_EMAIL_ADDRESS}" autocomplete="off" /><!-- ELSE --><strong>{EMAIL}</strong><!-- ENDIF --></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_CHANGE_PASSWORD -->*/
/* 		<dl>*/
/* 			<dt><label for="new_password">{L_NEW_PASSWORD}{L_COLON}</label><br /><span>{L_CHANGE_PASSWORD_EXPLAIN}</span></dt>*/
/* 			<dd><input type="password" name="new_password" id="new_password" maxlength="255" value="{NEW_PASSWORD}" class="inputbox" title="{L_CHANGE_PASSWORD}" autocomplete="off" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="password_confirm">{L_CONFIRM_PASSWORD}{L_COLON}</label><br /><span>{L_CONFIRM_PASSWORD_EXPLAIN}</span></dt>*/
/* 			<dd><input type="password" name="password_confirm" id="password_confirm" maxlength="255" value="{PASSWORD_CONFIRM}" class="inputbox" title="{L_CONFIRM_PASSWORD}" autocomplete="off" /></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT ucp_profile_register_details_after -->	*/
/* 	</fieldset>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<fieldset>*/
/* 	<dl>*/
/* 		<dt><label for="cur_password">{L_CURRENT_PASSWORD}{L_COLON}</label><br /><span><!-- IF S_CHANGE_PASSWORD -->{L_CURRENT_CHANGE_PASSWORD_EXPLAIN}<!-- ELSE -->{L_CURRENT_PASSWORD_EXPLAIN}<!-- ENDIF --></span></dt>*/
/* 		<dd><input type="password" name="cur_password" id="cur_password" maxlength="255" value="{CUR_PASSWORD}" class="inputbox" title="{L_CURRENT_PASSWORD}" autocomplete="off" /></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;*/
/* 	<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
