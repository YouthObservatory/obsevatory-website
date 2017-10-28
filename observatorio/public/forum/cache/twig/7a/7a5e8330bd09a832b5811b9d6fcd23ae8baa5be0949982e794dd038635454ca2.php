<?php

/* ucp_main_bookmarks.html */
class __TwigTemplate_7d4944eb4cb8115c5a27746c27276615a0b977fecf79fabc1dfc4fae5a983225 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_bookmarks.html", 1)->display($context);
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

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("BOOKMARKS_EXPLAIN");
        echo "</p>

";
        // line 12
        if ((isset($context["S_NO_DISPLAY_BOOKMARKS"]) ? $context["S_NO_DISPLAY_BOOKMARKS"] : null)) {
            // line 13
            echo "\t<p class=\"error\">";
            echo $this->env->getExtension('phpbb')->lang("BOOKMARKS_DISABLED");
            echo "</p>
";
        } else {
            // line 15
            echo "
";
            // line 16
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
                // line 17
                echo "\t<ul class=\"topiclist missing-column\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"icon\">
\t\t\t\t<dt><div class=\"list-inner\">";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("BOOKMARKS");
                echo "</div></dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t<dd class=\"mark\">";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist cplist missing-column\">

\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                    // line 29
                    echo "\t\t<li class=\"row";
                    if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                        echo " reported";
                    } elseif (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t";
                    // line 30
                    if ($this->getAttribute($context["topicrow"], "S_DELETED_TOPIC", array())) {
                        // line 31
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\"><strong>";
                        // line 32
                        echo $this->env->getExtension('phpbb')->lang("DELETED_TOPIC");
                        echo "</strong></div></dt>
\t\t\t\t\t<dd class=\"lastpost\"><span>&nbsp;</span></dd>
\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                        // line 34
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "]\" id=\"t";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t";
                    } else {
                        // line 37
                        echo "\t\t\t<dl class=\"icon ";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", array());
                        echo "\">
\t\t\t\t<dt";
                        // line 38
                        if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array())) {
                            echo " style=\"background-image: url(";
                            echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                            echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                            echo "); background-repeat: no-repeat;\"";
                        }
                        echo " title=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                        echo "\">
\t\t\t\t\t";
                        // line 39
                        if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                            echo "\" class=\"icon-link\"></a>";
                        }
                        // line 40
                        echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                        // line 41
                        if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                            echo "\">";
                            echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                            echo "</a> ";
                        }
                        echo "<a href=\"";
                        echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                        echo "</a>
\t\t\t\t\t\t";
                        // line 42
                        if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                            echo "\">";
                            echo $this->getAttribute($context["topicrow"], "UNAPPROVED_IMG", array());
                            echo "</a> ";
                        }
                        // line 43
                        echo "\t\t\t\t\t\t";
                        if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                            echo "\">";
                            echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                            echo "</a>";
                        }
                        echo "<br />
\t\t\t\t\t\t";
                        // line 44
                        if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                            // line 45
                            echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                            // line 47
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 48
                                echo "\t\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                    // line 49
                                    echo "\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                    echo "<li class=\"active\"><span>";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 50
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                    echo "<li class=\"ellipsis\"><span>";
                                    echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 51
$context["pagination"], "S_IS_NEXT", array())) {
                                    // line 52
                                    echo "\t\t\t\t\t\t\t\t";
                                } else {
                                    echo "<li><a href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                                }
                                // line 54
                                echo "\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 55
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        }
                        // line 58
                        echo "\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                        // line 59
                        if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                            echo $this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array());
                            echo " ";
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                        // line 63
                        if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                            echo $this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array());
                            echo " ";
                        }
                        // line 64
                        echo "\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                        echo " &laquo;
\t\t\t\t\t\t\t<a href=\"";
                        // line 65
                        echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                        // line 69
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo " </dfn>";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                        echo "
\t\t\t\t\t<a href=\"";
                        // line 70
                        echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                        echo "</a> <br />";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                        // line 72
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "]\" id=\"t";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
                    }
                    // line 75
                    echo "\t\t</li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "\t</ul>

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
                // line 81
                echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                echo "
\t\t\t";
                // line 82
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    echo " 
\t\t\t\t";
                    // line 83
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_main_bookmarks.html", 83)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 84
                    echo "\t\t\t";
                } else {
                    echo " 
\t\t\t\t &bull; ";
                    // line 85
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t\t";
                }
                // line 87
                echo "\t\t</div>
\t</div>

";
            } else {
                // line 91
                echo "\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_BOOKMARKS");
                echo "</strong></p>
";
            }
            // line 93
            echo "
";
        }
        // line 95
        echo "
\t</div>
</div>

";
        // line 99
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) &&  !(isset($context["S_NO_DISPLAY_BOOKMARKS"]) ? $context["S_NO_DISPLAY_BOOKMARKS"] : null))) {
            // line 100
            echo "\t<fieldset class=\"display-actions\">
\t\t<input type=\"submit\" name=\"unbookmark\" value=\"";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("REMOVE_BOOKMARK_MARKED");
            echo "\" class=\"button2\" />
\t\t<div><a href=\"#\" onclick=\"marklist('ucp', '', true); return false;\">";
            // line 102
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ucp', '', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 103
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
";
        }
        // line 106
        echo "</form>

";
        // line 108
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_bookmarks.html", 108)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_bookmarks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 108,  386 => 106,  380 => 103,  374 => 102,  370 => 101,  367 => 100,  365 => 99,  359 => 95,  355 => 93,  349 => 91,  343 => 87,  338 => 85,  333 => 84,  321 => 83,  317 => 82,  313 => 81,  307 => 77,  300 => 75,  292 => 72,  281 => 70,  273 => 69,  262 => 65,  253 => 64,  248 => 63,  237 => 60,  232 => 59,  229 => 58,  224 => 55,  218 => 54,  208 => 52,  206 => 51,  200 => 50,  193 => 49,  190 => 48,  186 => 47,  182 => 45,  180 => 44,  169 => 43,  161 => 42,  147 => 41,  144 => 40,  138 => 39,  127 => 38,  122 => 37,  114 => 34,  109 => 32,  106 => 31,  104 => 30,  93 => 29,  89 => 28,  80 => 22,  76 => 21,  72 => 20,  67 => 17,  65 => 16,  62 => 15,  56 => 13,  54 => 12,  49 => 10,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<p>{L_BOOKMARKS_EXPLAIN}</p>*/
/* */
/* <!-- IF S_NO_DISPLAY_BOOKMARKS -->*/
/* 	<p class="error">{L_BOOKMARKS_DISABLED}</p>*/
/* <!-- ELSE -->*/
/* */
/* <!-- IF .topicrow -->*/
/* 	<ul class="topiclist missing-column">*/
/* 		<li class="header">*/
/* 			<dl class="icon">*/
/* 				<dt><div class="list-inner">{L_BOOKMARKS}</div></dt>*/
/* 				<dd class="lastpost"><span>{L_LAST_POST}</span></dd>*/
/* 				<dd class="mark">{L_MARK}</dd>*/
/* 			</dl>*/
/* 		</li>*/
/* 	</ul>*/
/* 	<ul class="topiclist cplist missing-column">*/
/* */
/* 	<!-- BEGIN topicrow -->*/
/* 		<li class="row<!-- IF topicrow.S_TOPIC_REPORTED --> reported<!-- ELSEIF topicrow.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 			<!-- IF topicrow.S_DELETED_TOPIC -->*/
/* 				<dl>*/
/* 					<dt><div class="list-inner"><strong>{L_DELETED_TOPIC}</strong></div></dt>*/
/* 					<dd class="lastpost"><span>&nbsp;</span></dd>*/
/* 					<dd class="mark"><input type="checkbox" name="t[{topicrow.TOPIC_ID}]" id="t{topicrow.TOPIC_ID}" /></dd>*/
/* 				</dl>*/
/* 			<!-- ELSE -->*/
/* 			<dl class="icon {topicrow.TOPIC_IMG_STYLE}">*/
/* 				<dt<!-- IF topicrow.TOPIC_ICON_IMG --> style="background-image: url({T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}); background-repeat: no-repeat;"<!-- ENDIF --> title="{topicrow.TOPIC_FOLDER_IMG_ALT}">*/
/* 					<!-- IF topicrow.S_UNREAD_TOPIC --><a href="{topicrow.U_NEWEST_POST}" class="icon-link"></a><!-- ENDIF -->*/
/* 					<div class="list-inner">*/
/* 						<!-- IF topicrow.S_UNREAD_TOPIC --><a href="{topicrow.U_NEWEST_POST}">{NEWEST_POST_IMG}</a> <!-- ENDIF --><a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a>*/
/* 						<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED --><a href="{topicrow.U_MCP_QUEUE}">{topicrow.UNAPPROVED_IMG}</a> <!-- ENDIF -->*/
/* 						<!-- IF topicrow.S_TOPIC_REPORTED --><a href="{topicrow.U_MCP_REPORT}">{REPORTED_IMG}</a><!-- ENDIF --><br />*/
/* 						<!-- IF .topicrow.pagination -->*/
/* 						<div class="pagination">*/
/* 							<ul>*/
/* 							<!-- BEGIN pagination -->*/
/* 								<!-- IF topicrow.pagination.S_IS_PREV -->*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_CURRENT --><li class="active"><span>{topicrow.pagination.PAGE_NUMBER}</span></li>*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 								<!-- ELSEIF topicrow.pagination.S_IS_NEXT -->*/
/* 								<!-- ELSE --><li><a href="{topicrow.pagination.PAGE_URL}">{topicrow.pagination.PAGE_NUMBER}</a></li>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- END pagination -->*/
/* 							</ul>*/
/* 						</div>*/
/* 						<!-- ENDIF -->*/
/* 						<div class="responsive-hide">*/
/* 							<!-- IF topicrow.ATTACH_ICON_IMG -->{topicrow.ATTACH_ICON_IMG} <!-- ENDIF -->*/
/* 							{L_POST_BY_AUTHOR} {topicrow.TOPIC_AUTHOR_FULL} &raquo; {topicrow.FIRST_POST_TIME}*/
/* 						</div>*/
/* 						<div class="responsive-show" style="display: none;">*/
/* 							<!-- IF topicrow.ATTACH_ICON_IMG -->{topicrow.ATTACH_ICON_IMG} <!-- ENDIF -->*/
/* 							{L_LAST_POST} {L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL} &laquo;*/
/* 							<a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{topicrow.LAST_POST_TIME}</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</dt>*/
/* 				<dd class="lastpost"><span><dfn>{L_LAST_POST} </dfn>{L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL}*/
/* 					<a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{LAST_POST_IMG}</a> <br />{topicrow.LAST_POST_TIME}</span>*/
/* 				</dd>*/
/* 				<dd class="mark"><input type="checkbox" name="t[{topicrow.TOPIC_ID}]" id="t{topicrow.TOPIC_ID}" /></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 		</li>*/
/* 	<!-- END topicrow -->*/
/* 	</ul>*/
/* */
/* 	<div class="action-bar bottom">*/
/* 		<div class="pagination">*/
/* 			{TOTAL_TOPICS}*/
/* 			<!-- IF .pagination --> */
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE --> */
/* 				 &bull; {PAGE_NUMBER}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <!-- ELSE -->*/
/* 	<p><strong>{L_NO_BOOKMARKS}</strong></p>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF .topicrow and not S_NO_DISPLAY_BOOKMARKS -->*/
/* 	<fieldset class="display-actions">*/
/* 		<input type="submit" name="unbookmark" value="{L_REMOVE_BOOKMARK_MARKED}" class="button2" />*/
/* 		<div><a href="#" onclick="marklist('ucp', '', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('ucp', '', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
