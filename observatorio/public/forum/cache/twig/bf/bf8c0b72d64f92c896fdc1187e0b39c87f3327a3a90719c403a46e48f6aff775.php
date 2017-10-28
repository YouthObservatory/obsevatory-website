<?php

/* ucp_avatar_options.html */
class __TwigTemplate_a40c170eb94f59431df0b798e1939a249d43f36ba6909ba40ed22e76fbdf05c6 extends Twig_Template
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
        echo "<div class=\"panel\">
\t<div class=\"inner\">
\t";
        // line 3
        if ( !(isset($context["S_AVATARS_ENABLED"]) ? $context["S_AVATARS_ENABLED"] : null)) {
            // line 4
            echo "\t\t<p>";
            echo $this->env->getExtension('phpbb')->lang("AVATAR_FEATURES_DISABLED");
            echo "</p>
\t";
        }
        // line 6
        echo "
\t<fieldset>
\t";
        // line 8
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 9
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("CURRENT_IMAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("AVATAR_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>";
        // line 11
        if ((isset($context["AVATAR"]) ? $context["AVATAR"] : null)) {
            echo (isset($context["AVATAR"]) ? $context["AVATAR"] : null);
        } else {
            echo "<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/no_avatar.png\" alt=\"\" />";
        }
        echo "</dd>
\t\t\t<dd><label for=\"avatar_delete\"><input type=\"checkbox\" name=\"avatar_delete\" id=\"avatar_delete\" /> ";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("DELETE_AVATAR");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>
\t<h3>";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("AVATAR_SELECT");
        echo "</h3>
\t<fieldset>
\t\t<dl>
\t\t\t<dt><label>";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("AVATAR_TYPE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\">
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 21
            echo "\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\"";
            if ($this->getAttribute($context["avatar_drivers"], "SELECTED", array())) {
                echo " selected=\"selected\"";
            }
            echo " data-toggle-setting=\"#avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\">";
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", array());
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</select></dd>
\t\t</dl>
\t</fieldset>
\t<div id=\"avatar_options\">
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 28
            echo "\t<div id=\"avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\">
\t<noscript>
\t<h3 class=\"avatar_section_header\">";
            // line 30
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", array());
            echo "</h3>
\t</noscript>
\t<p>";
            // line 32
            echo $this->getAttribute($context["avatar_drivers"], "L_EXPLAIN", array());
            echo "</p>

\t<fieldset>
\t";
            // line 35
            echo $this->getAttribute($context["avatar_drivers"], "OUTPUT", array());
            echo "
\t</fieldset>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</div>
";
        // line 40
        if ( !(isset($context["S_GROUP_MANAGE"]) ? $context["S_GROUP_MANAGE"] : null)) {
            // line 41
            echo "\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"reset\" value=\"";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" /> &nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t</fieldset>
";
        }
        // line 46
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  149 => 43,  145 => 42,  142 => 41,  140 => 40,  137 => 39,  127 => 35,  121 => 32,  116 => 30,  110 => 28,  106 => 27,  100 => 23,  83 => 21,  79 => 20,  73 => 18,  67 => 15,  61 => 12,  51 => 11,  44 => 10,  41 => 9,  35 => 8,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<!-- IF not S_AVATARS_ENABLED -->*/
/* 		<p>{L_AVATAR_FEATURES_DISABLED}</p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset>*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label>{L_CURRENT_IMAGE}{L_COLON}</label><br /><span>{L_AVATAR_EXPLAIN}</span></dt>*/
/* 			<dd><!-- IF AVATAR -->{AVATAR}<!-- ELSE --><img src="{T_THEME_PATH}/images/no_avatar.png" alt="" /><!-- ENDIF --></dd>*/
/* 			<dd><label for="avatar_delete"><input type="checkbox" name="avatar_delete" id="avatar_delete" /> {L_DELETE_AVATAR}</label></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* 	<h3>{L_AVATAR_SELECT}</h3>*/
/* 	<fieldset>*/
/* 		<dl>*/
/* 			<dt><label>{L_AVATAR_TYPE}{L_COLON}</label></dt>*/
/* 			<dd><select name="avatar_driver" id="avatar_driver" data-togglable-settings="true">*/
/* 				<!-- BEGIN avatar_drivers -->*/
/* 				<option value="{avatar_drivers.DRIVER}"<!-- IF avatar_drivers.SELECTED --> selected="selected"<!-- ENDIF --> data-toggle-setting="#avatar_option_{avatar_drivers.DRIVER}">{avatar_drivers.L_TITLE}</option>*/
/* 				<!-- END avatar_drivers -->*/
/* 			</select></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* 	<div id="avatar_options">*/
/* <!-- BEGIN avatar_drivers -->*/
/* 	<div id="avatar_option_{avatar_drivers.DRIVER}">*/
/* 	<noscript>*/
/* 	<h3 class="avatar_section_header">{avatar_drivers.L_TITLE}</h3>*/
/* 	</noscript>*/
/* 	<p>{avatar_drivers.L_EXPLAIN}</p>*/
/* */
/* 	<fieldset>*/
/* 	{avatar_drivers.OUTPUT}*/
/* 	</fieldset>*/
/* 	</div>*/
/* <!-- END avatar_drivers -->*/
/* 	</div>*/
/* <!-- IF not S_GROUP_MANAGE -->*/
/* 	<fieldset class="submit-buttons">*/
/* 		<input type="reset" value="{L_RESET}" name="reset" class="button2" /> &nbsp;*/
/* 		<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
