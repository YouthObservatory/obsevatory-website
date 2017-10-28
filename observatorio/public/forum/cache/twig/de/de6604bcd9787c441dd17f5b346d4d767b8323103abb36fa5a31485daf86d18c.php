<?php

/* confirm_delete_body.html */
class __TwigTemplate_6530865891001328de73b090675ede5bfba632f62a5e57cc737b51d3dd85f325 extends Twig_Template
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
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "\t<form action=\"";
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
\t\t<p>";
            // line 3
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t\t";
            // line 5
            if ( !(isset($context["S_SHADOW_TOPICS"]) ? $context["S_SHADOW_TOPICS"] : null)) {
                // line 6
                echo "\t\t";
                if ((( !(isset($context["S_SOFTDELETED"]) ? $context["S_SOFTDELETED"] : null) && (isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null)) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))) {
                    // line 7
                    echo "\t\t\t<label>
\t\t\t\t<strong>";
                    // line 8
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 9
                    echo (isset($context["S_CHECKED_PERMANENT"]) ? $context["S_CHECKED_PERMANENT"] : null);
                    echo " />
\t\t\t\t";
                    // line 10
                    if ((isset($context["S_TOPIC_MODE"]) ? $context["S_TOPIC_MODE"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    // line 11
                    echo "\t\t\t</label>
\t\t";
                }
                // line 13
                echo "
\t\t<label for=\"delete_reason\">
\t\t\t<strong>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                echo "</span><br />
\t\t\t<input type=\"text\" name=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" />
\t\t</label>
\t\t";
            }
            // line 19
            echo "
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 21
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

";
        } else {
            // line 27
            echo "
";
            // line 28
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "confirm_delete_body.html", 28)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 29
            echo "
<form id=\"confirm\" action=\"";
            // line 30
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<h2 class=\"message-title\">";
            // line 34
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h2>

\t<p>";
            // line 36
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>

\t";
            // line 38
            if ( !(isset($context["S_SHADOW_TOPICS"]) ? $context["S_SHADOW_TOPICS"] : null)) {
                // line 39
                echo "\t<fieldset class=\"fields1\">
\t\t";
                // line 40
                if ((( !(isset($context["S_SOFTDELETED"]) ? $context["S_SOFTDELETED"] : null) && (isset($context["S_ALLOWED_DELETE"]) ? $context["S_ALLOWED_DELETE"] : null)) && (isset($context["S_ALLOWED_SOFTDELETE"]) ? $context["S_ALLOWED_SOFTDELETE"] : null))) {
                    // line 41
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"delete_permanent\">";
                    // line 42
                    echo $this->env->getExtension('phpbb')->lang("DELETE_PERMANENTLY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"delete_permanent\">
\t\t\t\t\t\t<input id=\"delete_permanent\" name=\"delete_permanent\" type=\"checkbox\" value=\"1\" ";
                    // line 45
                    echo (isset($context["S_CHECKED_PERMANENT"]) ? $context["S_CHECKED_PERMANENT"] : null);
                    echo " />
\t\t\t\t\t\t";
                    // line 46
                    if ((isset($context["S_TOPIC_MODE"]) ? $context["S_TOPIC_MODE"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_TOPIC_PERMANENTLY");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                    }
                    // line 47
                    echo "\t\t\t\t\t</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
                }
                // line 51
                echo "
\t\t<dl>
\t\t\t<dt><label for=\"delete_reason\">";
                // line 53
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_REASON_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"delete_reason\" id=\"delete_reason\" value=\"\" class=\"inputbox autowidth\" maxlength=\"120\" size=\"45\" /></dd>
\t\t</dl>
\t</fieldset>
\t";
            }
            // line 58
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 60
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button1\" />&nbsp; 
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

\t</div>
</div>
</form>

";
            // line 69
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_delete_body.html", 69)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "confirm_delete_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 69,  183 => 62,  179 => 61,  175 => 60,  171 => 58,  160 => 53,  156 => 51,  150 => 47,  144 => 46,  140 => 45,  133 => 42,  130 => 41,  128 => 40,  125 => 39,  123 => 38,  118 => 36,  113 => 34,  106 => 30,  103 => 29,  91 => 28,  88 => 27,  80 => 22,  76 => 21,  72 => 19,  62 => 15,  58 => 13,  54 => 11,  48 => 10,  44 => 9,  39 => 8,  36 => 7,  33 => 6,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_REQUEST -->*/
/* 	<form action="{S_CONFIRM_ACTION}" method="post">*/
/* 		<p>{MESSAGE_TEXT}</p>*/
/* */
/* 		<!-- IF not S_SHADOW_TOPICS -->*/
/* 		<!-- IF not S_SOFTDELETED and S_ALLOWED_DELETE and S_ALLOWED_SOFTDELETE -->*/
/* 			<label>*/
/* 				<strong>{L_DELETE_PERMANENTLY}{L_COLON}</strong>*/
/* 				<input id="delete_permanent" name="delete_permanent" type="checkbox" value="1" {S_CHECKED_PERMANENT} />*/
/* 				<!-- IF S_TOPIC_MODE -->{L_DELETE_TOPIC_PERMANENTLY}<!-- ELSE -->{L_DELETE_POST_PERMANENTLY}<!-- ENDIF -->*/
/* 			</label>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<label for="delete_reason">*/
/* 			<strong>{L_DELETE_REASON}{L_COLON}</strong><br /><span>{L_DELETE_REASON_EXPLAIN}</span><br />*/
/* 			<input type="text" name="delete_reason" value="" class="inputbox autowidth" maxlength="120" size="45" />*/
/* 		</label>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<fieldset class="submit-buttons">*/
/* 			<input type="button" name="confirm" value="{L_YES}" class="button1" />&nbsp;*/
/* 			<input type="button" name="cancel" value="{L_NO}" class="button2" />*/
/* 		</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <form id="confirm" action="{S_CONFIRM_ACTION}" method="post">*/
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h2 class="message-title">{MESSAGE_TITLE}</h2>*/
/* */
/* 	<p>{MESSAGE_TEXT}</p>*/
/* */
/* 	<!-- IF not S_SHADOW_TOPICS -->*/
/* 	<fieldset class="fields1">*/
/* 		<!-- IF not S_SOFTDELETED and S_ALLOWED_DELETE and S_ALLOWED_SOFTDELETE -->*/
/* 			<dl>*/
/* 				<dt><label for="delete_permanent">{L_DELETE_PERMANENTLY}{L_COLON}</label></dt>*/
/* 				<dd>*/
/* 					<label for="delete_permanent">*/
/* 						<input id="delete_permanent" name="delete_permanent" type="checkbox" value="1" {S_CHECKED_PERMANENT} />*/
/* 						<!-- IF S_TOPIC_MODE -->{L_DELETE_TOPIC_PERMANENTLY}<!-- ELSE -->{L_DELETE_POST_PERMANENTLY}<!-- ENDIF -->*/
/* 					</label>*/
/* 				</dd>*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<dl>*/
/* 			<dt><label for="delete_reason">{L_DELETE_REASON}{L_COLON}</label><br /><span>{L_DELETE_REASON_EXPLAIN}</span></dt>*/
/* 			<dd><input type="text" name="delete_reason" id="delete_reason" value="" class="inputbox autowidth" maxlength="120" size="45" /></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		{S_HIDDEN_FIELDS}*/
/* 		<input type="submit" name="confirm" value="{L_YES}" class="button1" />&nbsp; */
/* 		<input type="submit" name="cancel" value="{L_NO}" class="button2" />*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
