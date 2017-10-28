<?php

/* @phpbbmodders_adduser/user_added_welcome.txt */
class __TwigTemplate_65fce3d380ddc33124f6ccf679ffdcaacc7ef3cd709d71d34270fb0b53ffb546 extends Twig_Template
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
        echo "Subject: You have been added to \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\"

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Please keep this e-mail for your records. Your account information is as follows:

----------------------------
Username: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Board URL: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "

Password: ";
        // line 12
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "
----------------------------

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

We strongly recommend that you change your password once you log into the forum.

";
        // line 19
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
    }

    public function getTemplateName()
    {
        return "@phpbbmodders_adduser/user_added_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  43 => 12,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
/* Subject: You have been added to "{SITENAME}"*/
/* */
/* {WELCOME_MSG}*/
/* */
/* Please keep this e-mail for your records. Your account information is as follows:*/
/* */
/* ----------------------------*/
/* Username: {USERNAME}*/
/* */
/* Board URL: {U_BOARD}*/
/* */
/* Password: {PASSWORD}*/
/* ----------------------------*/
/* */
/* Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.*/
/* */
/* We strongly recommend that you change your password once you log into the forum.*/
/* */
/* {EMAIL_SIG}*/
