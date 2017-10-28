<?php

/* acp_adduser.html */
class __TwigTemplate_52ae016defcd37b1877a67e11a938bb6034dc892fc69b1563e75b74f731896a7 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_adduser.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
\t<h1>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("ADD_USER");
        echo " - ";
        echo $this->env->getExtension('phpbb')->lang("MOD_VERSION");
        echo "</h1>
\t<p>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("ADD_USER_EXPLAIN");
        echo "</p>

\t<form id=\"register\" method=\"post\" autocomplete=\"off\" action=\"";
        // line 6
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

";
        // line 8
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 9
            echo "\t<div class=\"errorbox\"><h3>";
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 10
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>
\t</div>
";
        }
        // line 13
        echo "
<fieldset>
\t<legend>";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
        echo "</legend>
\t<p>";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("REG_COND");
        echo "</p>
\t<dl>
\t\t<dt><label for=\"username\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t<br /><span>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input class=\"medium\" type=\"text\" id=\"username\" name=\"username\" size=\"25\" maxlength=\"40\" value=\"";
        // line 20
        echo (isset($context["NEW_USERNAME"]) ? $context["NEW_USERNAME"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"email\">";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input class=\"medium\" type=\"text\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"255\" value=\"";
        // line 24
        echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"new_password\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 28
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("NEW_PASSWORD");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"password_confirm\">";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 32
        echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
        echo "\" class=\"inputbox autowidth\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"lang\">";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"lang\" id=\"lang\">";
        // line 36
        echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
        echo "</select></dd>
\t</dl>
\t";
        // line 38
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "acp_adduser.html", 38)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 39
        echo "\t<dl id=\"groups\">
\t\t<dt><label for=\"group\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("GROUPS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("GROUP_ADD");
        echo "</span></dt>
\t\t<dd>";
        // line 41
        echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
        echo "</dd>
\t</dl>
\t<dl class=\"default_group\">
\t\t<dt><label for=\"group_default\">";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input id=\"group_default\" class=\"radio\" type=\"checkbox\" value=\"1\" ";
        // line 45
        echo (isset($context["U_GROUP_DEFAULT"]) ? $context["U_GROUP_DEFAULT"] : null);
        echo " name=\"group_default\" /></dd>
\t</dl>
\t";
        // line 47
        if ((isset($context["S_NEW_USER_SET"]) ? $context["S_NEW_USER_SET"] : null)) {
            // line 48
            echo "\t<dl>
\t\t<dt><label for=\"new_user\">";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("ENABLE_NEWUSER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_NEWUSER_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"new_user\" value=\"1\"";
            // line 51
            if ((isset($context["S_NEW_USER_ENABLE"]) ? $context["S_NEW_USER_ENABLE"] : null)) {
                echo " id=\"new_user\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"new_user\" value=\"0\"";
            // line 52
            if ( !(isset($context["S_NEW_USER_ENABLE"]) ? $context["S_NEW_USER_ENABLE"] : null)) {
                echo " id=\"new_user\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t";
        }
        // line 56
        echo "\t";
        if ((isset($context["S_BIRTHDAYS_ENABLED"]) ? $context["S_BIRTHDAYS_ENABLED"] : null)) {
            // line 57
            echo "\t<dl>
\t\t<dt><label for=\"birthday\">";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAY_EXPLAIN");
            echo "</span></dt>
\t\t<dd>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select id=\"birthday\" name=\"bday_day\">";
            echo (isset($context["S_BIRTHDAY_DAY_OPTIONS"]) ? $context["S_BIRTHDAY_DAY_OPTIONS"] : null);
            echo "</select> ";
            echo $this->env->getExtension('phpbb')->lang("MONTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_month\">";
            echo (isset($context["S_BIRTHDAY_MONTH_OPTIONS"]) ? $context["S_BIRTHDAY_MONTH_OPTIONS"] : null);
            echo "</select> ";
            echo $this->env->getExtension('phpbb')->lang("YEAR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_year\">";
            echo (isset($context["S_BIRTHDAY_YEAR_OPTIONS"]) ? $context["S_BIRTHDAY_YEAR_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t";
        }
        // line 62
        echo "\t";
        if ((isset($context["S_ADMIN_ACTIVATE"]) ? $context["S_ADMIN_ACTIVATE"] : null)) {
            // line 63
            echo "\t<dl>
\t\t<dt><label for=\"admin_activate\">";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("ADMIN_ACTIVATE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input id=\"admin_activate\" class=\"radio\" type=\"checkbox\" value=\"1\" ";
            // line 65
            echo (isset($context["U_ADMIN_ACTIVATE"]) ? $context["U_ADMIN_ACTIVATE"] : null);
            echo " name=\"activate\" /></dd>
\t</dl>
\t";
        }
        // line 68
        echo "</fieldset>

\t";
        // line 70
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()))) {
            // line 71
            echo "\t<fieldset>
\t\t<dl><dd><strong>";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("ITEMS_REQUIRED");
            echo "</strong></dd></dl>

\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 75
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 76
                if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                    echo " for=\"";
                    echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                    echo " *";
                }
                echo "</label>
\t\t\t";
                // line 77
                if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                    echo "</span>";
                }
                // line 78
                echo "\t\t\t";
                if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                    echo "<br /><span class=\"error\">";
                    echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 79
                echo $this->getAttribute($context["profile_fields"], "FIELD", array());
                echo "</dd>
\t\t</dl>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t</fieldset>
\t";
        }
        // line 84
        echo "
\t<fieldset class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
        // line 86
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;&nbsp;<input class=\"button1\" type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" />
\t\t";
        // line 87
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>

</form>
";
        // line 91
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_adduser.html", 91)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_adduser.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 91,  334 => 87,  328 => 86,  324 => 84,  320 => 82,  311 => 79,  302 => 78,  296 => 77,  282 => 76,  279 => 75,  275 => 74,  270 => 72,  267 => 71,  265 => 70,  261 => 68,  255 => 65,  250 => 64,  247 => 63,  244 => 62,  225 => 59,  218 => 58,  215 => 57,  212 => 56,  201 => 52,  193 => 51,  185 => 49,  182 => 48,  180 => 47,  175 => 45,  168 => 44,  162 => 41,  155 => 40,  152 => 39,  140 => 38,  135 => 36,  130 => 35,  122 => 32,  117 => 31,  109 => 28,  102 => 27,  96 => 24,  91 => 23,  85 => 20,  81 => 19,  76 => 18,  71 => 16,  67 => 15,  63 => 13,  57 => 10,  52 => 9,  50 => 8,  45 => 6,  40 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* 	<h1>{L_ADD_USER} - {L_MOD_VERSION}</h1>*/
/* 	<p>{L_ADD_USER_EXPLAIN}</p>*/
/* */
/* 	<form id="register" method="post" autocomplete="off" action="{U_ACTION}">*/
/* */
/* <!-- IF ERROR -->*/
/* 	<div class="errorbox"><h3>{L_WARNING}</h3>*/
/* 		<p>{ERROR}</p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <fieldset>*/
/* 	<legend>{L_REGISTRATION}</legend>*/
/* 	<p>{L_REG_COND}</p>*/
/* 	<dl>*/
/* 		<dt><label for="username">{L_USERNAME}{L_COLON}</label>*/
/* 			<br /><span>{L_USERNAME_EXPLAIN}</span></dt>*/
/* 		<dd><input class="medium" type="text" id="username" name="username" size="25" maxlength="40" value="{NEW_USERNAME}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="email">{L_EMAIL_ADDRESS}{L_COLON}</label></dt>*/
/* 		<dd><input class="medium" type="text" name="email" id="email" size="25" maxlength="255" value="{EMAIL}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="new_password">{L_PASSWORD}{L_COLON}</label><br /><span>{L_PASSWORD_EXPLAIN}</span></dt>*/
/* 		<dd><input type="password" name="new_password" id="new_password" size="25" value="{PASSWORD}" class="inputbox autowidth" title="{L_NEW_PASSWORD}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="password_confirm">{L_CONFIRM_PASSWORD}{L_COLON}</label></dt>*/
/* 		<dd><input type="password" name="password_confirm" id="password_confirm" size="25" value="{PASSWORD_CONFIRM}" class="inputbox autowidth" title="{L_CONFIRM_PASSWORD}" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="lang">{L_LANGUAGE}{L_COLON}</label></dt>*/
/* 		<dd><select name="lang" id="lang">{S_LANG_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- INCLUDE timezone_option.html -->*/
/* 	<dl id="groups">*/
/* 		<dt><label for="group">{L_GROUPS}{L_COLON}</label><br /><span>{L_GROUP_ADD}</span></dt>*/
/* 		<dd>{S_GROUP_OPTIONS}</dd>*/
/* 	</dl>*/
/* 	<dl class="default_group">*/
/* 		<dt><label for="group_default">{L_GROUP_DEFAULT}{L_COLON}</label><br /><span>{L_GROUP_DEFAULT_EXPLAIN}</span></dt>*/
/* 		<dd><input id="group_default" class="radio" type="checkbox" value="1" {U_GROUP_DEFAULT} name="group_default" /></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_NEW_USER_SET -->*/
/* 	<dl>*/
/* 		<dt><label for="new_user">{L_ENABLE_NEWUSER}{L_COLON}</label><br><span>{L_ENABLE_NEWUSER_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<label><input type="radio" class="radio" name="new_user" value="1"<!-- IF S_NEW_USER_ENABLE --> id="new_user" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 			<label><input type="radio" class="radio" name="new_user" value="0"<!-- IF not S_NEW_USER_ENABLE --> id="new_user" checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_BIRTHDAYS_ENABLED -->*/
/* 	<dl>*/
/* 		<dt><label for="birthday">{L_BIRTHDAY}{L_COLON}</label><br /><span>{L_BIRTHDAY_EXPLAIN}</span></dt>*/
/* 		<dd>{L_DAY}{L_COLON} <select id="birthday" name="bday_day">{S_BIRTHDAY_DAY_OPTIONS}</select> {L_MONTH}{L_COLON} <select name="bday_month">{S_BIRTHDAY_MONTH_OPTIONS}</select> {L_YEAR}{L_COLON} <select name="bday_year">{S_BIRTHDAY_YEAR_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_ADMIN_ACTIVATE -->*/
/* 	<dl>*/
/* 		<dt><label for="admin_activate">{L_ADMIN_ACTIVATE}{L_COLON}</label></dt>*/
/* 		<dd><input id="admin_activate" class="radio" type="checkbox" value="1" {U_ADMIN_ACTIVATE} name="activate" /></dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* </fieldset>*/
/* */
/* 	<!-- IF .profile_fields -->*/
/* 	<fieldset>*/
/* 		<dl><dd><strong>{L_ITEMS_REQUIRED}</strong></dd></dl>*/
/* */
/* 	<!-- BEGIN profile_fields -->*/
/* 		<dl>*/
/* 			<dt><label<!-- IF profile_fields.FIELD_ID --> for="{profile_fields.FIELD_ID}"<!-- ENDIF -->>{profile_fields.LANG_NAME}{L_COLON}<!-- IF profile_fields.S_REQUIRED --> *<!-- ENDIF --></label>*/
/* 			<!-- IF profile_fields.LANG_EXPLAIN --><br /><span>{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF -->*/
/* 			<!-- IF profile_fields.ERROR --><br /><span class="error">{profile_fields.ERROR}</span><!-- ENDIF --></dt>*/
/* 			<dd>{profile_fields.FIELD}</dd>*/
/* 		</dl>*/
/* 	<!-- END profile_fields -->*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset class="quick">*/
/* 		<input class="button1" type="submit" name="submit" value="{L_SUBMIT}" />&nbsp;&nbsp;<input class="button1" type="reset" value="{L_RESET}" name="reset" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* */
/* </form>*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
