<?php

/* ucp_profile_autologin_keys.html */
class __TwigTemplate_f6b0cd41f4b99c93aa9e5d590320bd40b6ff29af57dfb780ea240ecd72376017 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_autologin_keys.html", 1)->display($context);
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
\t\t<p>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("PROFILE_AUTOLOGIN_KEYS");
        echo "</p>
\t\t";
        // line 9
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 10
        echo "\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"name\">";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("LOGIN_KEY");
        echo "</th>
\t\t\t\t\t<th class=\"center\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("IP");
        echo "</th>
\t\t\t\t\t<th class=\"center\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("LOGIN_TIME");
        echo "</th>
\t\t\t\t\t<th class=\"center mark\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("MARK");
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "sessions", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sessions"]) {
            // line 21
            echo "\t\t\t\t";
            if (($this->getAttribute($context["sessions"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "<tr class=\"bg1\">";
            } else {
                echo "<tr class=\"bg2\">";
            }
            // line 22
            echo "\t\t\t\t\t<td><label for=\"";
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\">";
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "</label></td>
\t\t\t\t\t<td class=\"center\">";
            // line 23
            echo $this->getAttribute($context["sessions"], "IP", array());
            echo "</td>
\t\t\t\t\t<td class=\"center\">";
            // line 24
            echo $this->getAttribute($context["sessions"], "LOGIN_TIME", array());
            echo "</td>
\t\t\t\t\t<td class=\"center mark\"><input type=\"checkbox\" name=\"keys[]\" value=\"";
            // line 25
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\" id=\"";
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\" /></td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t\t\t\t<tr><td colspan=\"4\" class=\"bg1\" style=\"text-align: center\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE_NO_AUTOLOGIN_KEYS");
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sessions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

";
        // line 35
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "sessions", array()))) {
            // line 36
            echo "\t<fieldset class=\"display-actions\">
\t\t";
            // line 37
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\" class=\"button2\" />
\t\t<div><a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 39
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
";
        }
        // line 42
        echo "
</form>

";
        // line 45
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_autologin_keys.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_autologin_keys.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 45,  157 => 42,  151 => 39,  145 => 38,  139 => 37,  136 => 36,  134 => 35,  127 => 30,  118 => 28,  108 => 25,  104 => 24,  100 => 23,  93 => 22,  86 => 21,  81 => 20,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  57 => 10,  51 => 9,  47 => 8,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 		<p>{L_PROFILE_AUTOLOGIN_KEYS}</p>*/
/* 		<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* 		<table class="table1">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th class="name">{L_LOGIN_KEY}</th>*/
/* 					<th class="center">{L_IP}</th>*/
/* 					<th class="center">{L_LOGIN_TIME}</th>*/
/* 					<th class="center mark">{L_MARK}</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			<!-- BEGIN sessions -->*/
/* 				<!-- IF sessions.S_ROW_COUNT is even --><tr class="bg1"><!-- ELSE --><tr class="bg2"><!-- ENDIF -->*/
/* 					<td><label for="{sessions.KEY}">{sessions.KEY}</label></td>*/
/* 					<td class="center">{sessions.IP}</td>*/
/* 					<td class="center">{sessions.LOGIN_TIME}</td>*/
/* 					<td class="center mark"><input type="checkbox" name="keys[]" value="{sessions.KEY}" id="{sessions.KEY}" /></td>*/
/* 				</tr>*/
/* 			<!-- BEGINELSE -->*/
/* 				<tr><td colspan="4" class="bg1" style="text-align: center">{L_PROFILE_NO_AUTOLOGIN_KEYS}</td></tr>*/
/* 			<!-- END sessions -->*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF .sessions -->*/
/* 	<fieldset class="display-actions">*/
/* 		{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_DELETE_MARKED}" class="button2" />*/
/* 		<div><a href="#" onclick="$('#ucp input:checkbox').prop('checked', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="$('#ucp input:checkbox').prop('checked', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
