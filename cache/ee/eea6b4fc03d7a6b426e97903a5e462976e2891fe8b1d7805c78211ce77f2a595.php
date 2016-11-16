<?php

/* /auth/auth_bar.html */
class __TwigTemplate_c89eccc16e4fce873d07d99f516649cd9372f91c474669272864b3f4c14f8eb4 extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav navbar-right\">

    <li><a href=\"/logout\" id=\"login\" class=\"menu\">Logout (";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "login", array()), "html", null, true);
        echo ")</a></li>

</ul>";
    }

    public function getTemplateName()
    {
        return "/auth/auth_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <ul class="nav navbar-nav navbar-right">*/
/* */
/*     <li><a href="/logout" id="login" class="menu">Logout ({{data.login}})</a></li>*/
/* */
/* </ul>*/
