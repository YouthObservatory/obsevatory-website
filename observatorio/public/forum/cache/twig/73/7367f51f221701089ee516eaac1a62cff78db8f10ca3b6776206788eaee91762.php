<?php

/* ucp_main_drafts.html */
class __TwigTemplate_16d87014c8fce5f77d9ba59245dff816fde93fd5486af009db454b253e09a48c extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_drafts.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"postform\" method=\"post\" action=\"";
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

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("DRAFTS_EXPLAIN");
        echo "</p>

";
        // line 12
        if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
            // line 13
            echo "
\t\t";
            // line 14
            $location = "posting_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_editor.html", "ucp_main_drafts.html", 14)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 15
            echo "\t\t</div>
\t</div>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
            // line 19
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"reset\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("SAVE");
            echo "\" class=\"button1\" />
\t\t\t\t";
            // line 21
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t</fieldset>

";
        } else {
            // line 25
            echo "
\t";
            // line 26
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()))) {
                // line 27
                echo "\t\t<ul class=\"topiclist missing-column\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 30
                echo $this->env->getExtension('phpbb')->lang("DRAFT_TITLE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                // line 31
                echo $this->env->getExtension('phpbb')->lang("SAVE_DATE");
                echo "</span></dd>
\t\t\t\t\t<dd class=\"mark\">";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist missing-column\">

\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["draftrow"]) {
                    // line 39
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["draftrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a class=\"topictitle\" href=\"";
                    // line 43
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_SUBJECT", array());
                    echo "</a><br />
\t\t\t\t\t\t\t";
                    // line 44
                    if ($this->getAttribute($context["draftrow"], "S_LINK_TOPIC", array())) {
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_VIEW", array());
                        echo "\">";
                        echo $this->getAttribute($context["draftrow"], "TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 45
$context["draftrow"], "S_LINK_FORUM", array())) {
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_VIEW", array());
                        echo "\">";
                        echo $this->getAttribute($context["draftrow"], "TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t";
                    } elseif (                    // line 46
(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_FORUM");
                    }
                    // line 48
                    echo "\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t";
                    // line 49
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DATE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["draftrow"], "DATE", array());
                    echo "</strong><br />
\t\t\t\t\t\t\t\t";
                    // line 50
                    if ($this->getAttribute($context["draftrow"], "U_INSERT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_INSERT", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_EDIT");
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                    // line 54
                    echo $this->getAttribute($context["draftrow"], "DATE", array());
                    echo "<br />";
                    if ($this->getAttribute($context["draftrow"], "U_INSERT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_INSERT", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_EDIT");
                    echo "</a></span></dd>
\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"d[";
                    // line 55
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", array());
                    echo "]\" id=\"d";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", array());
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draftrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t</ul>
\t";
            } else {
                // line 61
                echo "\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_SAVED_DRAFTS");
                echo "</strong></p>
\t";
            }
            // line 63
            echo "
\t\t</div>
\t</div>

\t";
            // line 67
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()))) {
                // line 68
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"delete\" value=\"";
                // line 69
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\" />
\t\t\t<div><a href=\"#\" onclick=\"marklist('postform', '', true); return false;\">";
                // line 70
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('postform', '', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t\t";
                // line 71
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</fieldset>
\t";
            }
            // line 74
            echo "
";
        }
        // line 76
        echo "
</form>

";
        // line 79
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_drafts.html", 79)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_drafts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 79,  266 => 76,  262 => 74,  256 => 71,  250 => 70,  246 => 69,  243 => 68,  241 => 67,  235 => 63,  229 => 61,  225 => 59,  213 => 55,  197 => 54,  180 => 50,  173 => 49,  170 => 48,  165 => 47,  163 => 46,  153 => 45,  143 => 44,  137 => 43,  125 => 39,  121 => 38,  112 => 32,  108 => 31,  104 => 30,  99 => 27,  97 => 26,  94 => 25,  87 => 21,  83 => 20,  77 => 19,  71 => 15,  59 => 14,  56 => 13,  54 => 12,  49 => 10,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="postform" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<p>{L_DRAFTS_EXPLAIN}</p>*/
/* */
/* <!-- IF S_EDIT_DRAFT -->*/
/* */
/* 		<!-- INCLUDE posting_editor.html -->*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 			<fieldset class="submit-buttons">*/
/* 				{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;*/
/* 				<input type="submit" name="submit" value="{L_SAVE}" class="button1" />*/
/* 				{S_FORM_TOKEN}*/
/* 			</fieldset>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<!-- IF .draftrow -->*/
/* 		<ul class="topiclist missing-column">*/
/* 			<li class="header">*/
/* 				<dl>*/
/* 					<dt><div class="list-inner">{L_DRAFT_TITLE}</div></dt>*/
/* 					<dd class="info"><span>{L_SAVE_DATE}</span></dd>*/
/* 					<dd class="mark">{L_MARK}</dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 		</ul>*/
/* 		<ul class="topiclist cplist missing-column">*/
/* */
/* 		<!-- BEGIN draftrow -->*/
/* 			<li class="row<!-- IF draftrow.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 				<dl>*/
/* 					<dt>*/
/* 						<div class="list-inner">*/
/* 							<a class="topictitle" href="{draftrow.U_VIEW_EDIT}">{draftrow.DRAFT_SUBJECT}</a><br />*/
/* 							<!-- IF draftrow.S_LINK_TOPIC -->{L_TOPIC}{L_COLON} <a href="{draftrow.U_VIEW}">{draftrow.TITLE}</a>*/
/* 							<!-- ELSEIF draftrow.S_LINK_FORUM -->{L_FORUM}{L_COLON} <a href="{draftrow.U_VIEW}">{draftrow.TITLE}</a>*/
/* 							<!-- ELSEIF S_PRIVMSGS -->*/
/* 							<!-- ELSE -->{L_NO_TOPIC_FORUM}<!-- ENDIF -->*/
/* 							<div class="responsive-show" style="display: none;">*/
/* 								{L_SAVE_DATE}{L_COLON} <strong>{draftrow.DATE}</strong><br />*/
/* 								<!-- IF draftrow.U_INSERT --><a href="{draftrow.U_INSERT}">{L_LOAD_DRAFT}</a> &bull; <!-- ENDIF --><a href="{draftrow.U_VIEW_EDIT}">{L_VIEW_EDIT}</a>*/
/* 							</div>*/
/* 						</div>*/
/* 					</dt>*/
/* 					<dd class="info"><span>{draftrow.DATE}<br /><!-- IF draftrow.U_INSERT --><a href="{draftrow.U_INSERT}">{L_LOAD_DRAFT}</a> &bull; <!-- ENDIF --><a href="{draftrow.U_VIEW_EDIT}">{L_VIEW_EDIT}</a></span></dd>*/
/* 					<dd class="mark"><input type="checkbox" name="d[{draftrow.DRAFT_ID}]" id="d{draftrow.DRAFT_ID}" /></dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 		<!-- END draftrow -->*/
/* 		</ul>*/
/* 	<!-- ELSE -->*/
/* 		<p><strong>{L_NO_SAVED_DRAFTS}</strong></p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- IF .draftrow -->*/
/* 		<fieldset class="display-actions">*/
/* 			<input class="button2" type="submit" name="delete" value="{L_DELETE_MARKED}" />*/
/* 			<div><a href="#" onclick="marklist('postform', '', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('postform', '', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* 			{S_FORM_TOKEN}*/
/* 		</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
