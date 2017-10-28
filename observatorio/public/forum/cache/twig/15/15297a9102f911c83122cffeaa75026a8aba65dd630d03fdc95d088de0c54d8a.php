<?php

/* posting_topic_review.html */
class __TwigTemplate_d3591a112222ae6b5690b33cb866df9ee2c8b73ae8101347710549fed5710a28 extends Twig_Template
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
        echo "
<h3 id=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'; } else if (rev_text.data == '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'};\">";
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "
</h3>

<div id=\"topicreview\">
<script type=\"text/javascript\">
// <![CDATA[
\tbbcodeEnabled = ";
        // line 10
        echo (isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null);
        echo ";
// ]]>
</script>
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 14
            echo "
\t";
            // line 15
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 16
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 18
                echo $this->getAttribute($context["topic_review_row"], "L_IGNORE_POST", array());
                echo "
\t";
            } else {
                // line 20
                echo "\t<div class=\"post ";
                if (($this->getAttribute($context["topic_review_row"], "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (($this->getAttribute($context["topic_review_row"], "POST_ID", array()) == (isset($context["REPORTED_POST_ID"]) ? $context["REPORTED_POST_ID"] : null))) {
                    echo " reported";
                }
                echo "\">
\t\t<div class=\"inner\">
\t";
            }
            // line 23
            echo "
\t\t<div class=\"postbody\" id=\"pr";
            // line 24
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">
\t\t\t<h3><a href=\"#pr";
            // line 25
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["topic_review_row"], "POST_SUBJECT", array());
            echo "</a></h3>

\t\t\t";
            // line 27
            if ((($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array())) || $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array()))) {
                // line 28
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t";
                // line 29
                if ($this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array())) {
                    // line 30
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 31
                    echo $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "\" class=\"button icon-button info-icon\">
\t\t\t\t\t\t<span>";
                    // line 32
                    echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t<li>
\t\t\t";
                }
                // line 36
                echo "\t\t\t";
                if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                    // line 37
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                    // line 38
                    echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                    echo ", '";
                    echo $this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array());
                    echo "', '";
                    echo addslashes($this->env->getExtension('phpbb')->lang("WROTE"));
                    echo "');\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                    echo "\" class=\"button icon-button quote-icon\">
\t\t\t\t\t\t<span>";
                    // line 39
                    echo $this->env->getExtension('phpbb')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 43
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 45
            echo "
\t\t\t<p class=\"author\">";
            // line 46
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST_IMG", array());
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["topic_review_row"], "U_MINI_POST", array());
                echo "\">";
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST_IMG", array());
                echo "</a>";
            }
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            echo $this->getAttribute($context["topic_review_row"], "POST_DATE", array());
            echo "  </p>
\t\t\t<div class=\"content\">";
            // line 47
            echo $this->getAttribute($context["topic_review_row"], "MESSAGE", array());
            echo "</div>

\t\t\t";
            // line 49
            if ($this->getAttribute($context["topic_review_row"], "S_HAS_ATTACHMENTS", array())) {
                // line 50
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topic_review_row"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 53
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 57
            echo "
\t\t\t";
            // line 58
            if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                // line 59
                echo "\t\t\t\t<div id=\"message_";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\" style=\"display: none;\">";
                echo $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array());
                echo "</div>
\t\t\t";
            }
            // line 61
            echo "\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>

<hr />

";
        // line 69
        if ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
            // line 70
            echo "\t<p><a href=\"#report\" class=\"top2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></p>
";
        } else {
            // line 72
            echo "\t<p><a href=\"#postingbox\" class=\"top2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 72,  235 => 70,  233 => 69,  227 => 65,  218 => 61,  210 => 59,  208 => 58,  205 => 57,  201 => 55,  192 => 53,  188 => 52,  184 => 51,  181 => 50,  179 => 49,  174 => 47,  156 => 46,  153 => 45,  149 => 43,  140 => 39,  128 => 38,  125 => 37,  122 => 36,  115 => 32,  109 => 31,  106 => 30,  104 => 29,  101 => 28,  99 => 27,  92 => 25,  88 => 24,  85 => 23,  71 => 20,  66 => 18,  62 => 16,  60 => 15,  57 => 14,  53 => 13,  47 => 10,  35 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* <h3 id="review">*/
/* 	<span class="right-box"><a href="#review" onclick="viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '{LA_EXPAND_VIEW}'){rev_text.data = '{LA_COLLAPSE_VIEW}'; } else if (rev_text.data == '{LA_COLLAPSE_VIEW}'){rev_text.data = '{LA_EXPAND_VIEW}'};">{L_EXPAND_VIEW}</a></span>*/
/* 	{L_TOPIC_REVIEW}{L_COLON} {TOPIC_TITLE}*/
/* </h3>*/
/* */
/* <div id="topicreview">*/
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	bbcodeEnabled = {S_BBCODE_ALLOWED};*/
/* // ]]>*/
/* </script>*/
/* 	<!-- BEGIN topic_review_row -->*/
/* */
/* 	<!-- IF topic_review_row.S_IGNORE_POST -->*/
/* 	<div class="post bg3 post-ignore">*/
/* 		<div class="inner">*/
/* 			{topic_review_row.L_IGNORE_POST}*/
/* 	<!-- ELSE -->*/
/* 	<div class="post <!-- IF topic_review_row.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF topic_review_row.POST_ID == REPORTED_POST_ID --> reported<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* 	<!-- ENDIF -->*/
/* */
/* 		<div class="postbody" id="pr{topic_review_row.POST_ID}">*/
/* 			<h3><a href="#pr{topic_review_row.POST_ID}">{topic_review_row.POST_SUBJECT}</a></h3>*/
/* */
/* 			<!-- IF (topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE) or topic_review_row.U_MCP_DETAILS -->*/
/* 			<ul class="post-buttons">*/
/* 			<!-- IF topic_review_row.U_MCP_DETAILS -->*/
/* 				<li>*/
/* 					<a href="{topic_review_row.U_MCP_DETAILS}" title="{L_POST_DETAILS}" class="button icon-button info-icon">*/
/* 						<span>{L_POST_DETAILS}</span>*/
/* 					</a>*/
/* 				<li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE -->*/
/* 				<li>*/
/* 					<a href="#postingbox" onclick="addquote({topic_review_row.POST_ID}, '{topic_review_row.POSTER_QUOTE}', '{LA_WROTE}');" title="{L_QUOTE} {topic_review_row.POST_AUTHOR}" class="button icon-button quote-icon">*/
/* 						<span>{L_QUOTE} {topic_review_row.POST_AUTHOR}</span>*/
/* 					</a>*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			</ul>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<p class="author"><!-- IF S_IS_BOT -->{topic_review_row.MINI_POST_IMG}<!-- ELSE --><a href="{topic_review_row.U_MINI_POST}">{topic_review_row.MINI_POST_IMG}</a><!-- ENDIF --> {L_POST_BY_AUTHOR} <strong>{topic_review_row.POST_AUTHOR_FULL}</strong> &raquo; {topic_review_row.POST_DATE}  </p>*/
/* 			<div class="content">{topic_review_row.MESSAGE}</div>*/
/* */
/* 			<!-- IF topic_review_row.S_HAS_ATTACHMENTS -->*/
/* 				<dl class="attachbox">*/
/* 					<dt>{L_ATTACHMENTS}</dt>*/
/* 					<!-- BEGIN attachment -->*/
/* 						<dd>{topic_review_row.attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 					<!-- END attachment -->*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE -->*/
/* 				<div id="message_{topic_review_row.POST_ID}" style="display: none;">{topic_review_row.DECODED_MESSAGE}</div>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- END topic_review_row -->*/
/* </div>*/
/* */
/* <hr />*/
/* */
/* <!-- IF S_MCP_REPORT -->*/
/* 	<p><a href="#report" class="top2">{L_BACK_TO_TOP}</a></p>*/
/* <!-- ELSE -->*/
/* 	<p><a href="#postingbox" class="top2">{L_BACK_TO_TOP}</a></p>*/
/* <!-- ENDIF -->*/
/* */
