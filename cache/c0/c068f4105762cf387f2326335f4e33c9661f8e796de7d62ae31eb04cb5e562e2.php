<?php

/* auth/login.html */
class __TwigTemplate_bd08228407aaf1ece5bdadd3f0dfa3a50c6bd96e5942ccb224088e1d89bd2171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("auth/layout.html", "auth/login.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "auth/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<style>
.novalid
{
   border: 1px solid red; 
}

.novalid-message
{
   color: red; 
}

.form-group input
{
    width: 400px;
    margin: 0 auto 0 auto;
}

.login-form
{
    text-align: center;
}

</style>
";
        // line 26
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errmsg", array())) {
            // line 27
            echo "<p class=\"novalid-message\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errmsg", array()), "html", null, true);
            echo "</p>
";
        }
        // line 36
        echo "<form method=\"post\" action=\"/login\">
    <div class=\"login-form\">
        <div class=\"form-group\">
            <input type=\"login\" class=\"form-control\" name=\"login\" placeholder=\"Имя\">
        </div>
        <div class=\"form-group\">
            <input type=\"password\" class=\"form-control\" name=\"pass\" placeholder=\"Пароль\">
        </div>
        <button type=\"submit\" id=\"login-btn\" class=\"btn btn-default\">Войти</button>
    </div>
</form>


";
    }

    public function getTemplateName()
    {
        return "auth/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 36,  58 => 27,  56 => 26,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'auth/layout.html' %}*/
/* {% block content %}*/
/* <style>*/
/* .novalid*/
/* {*/
/*    border: 1px solid red; */
/* }*/
/* */
/* .novalid-message*/
/* {*/
/*    color: red; */
/* }*/
/* */
/* .form-group input*/
/* {*/
/*     width: 400px;*/
/*     margin: 0 auto 0 auto;*/
/* }*/
/* */
/* .login-form*/
/* {*/
/*     text-align: center;*/
/* }*/
/* */
/* </style>*/
/* {% if data.errmsg %}*/
/* <p class="novalid-message">{{data.errmsg}}</p>*/
/* {% endif %}*/
/* {#*/
/* <form class="form" method="post" action="/login">*/
/*     <p><input class="input" type="text" name="login" placeholder="login"/></p>*/
/*     <p><input class="input" type="password" name="pass" placeholder="password"/></p>*/
/*     <p><button class="button">Login</button></p>*/
/* </form>*/
/* #}*/
/* <form method="post" action="/login">*/
/*     <div class="login-form">*/
/*         <div class="form-group">*/
/*             <input type="login" class="form-control" name="login" placeholder="Имя">*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <input type="password" class="form-control" name="pass" placeholder="Пароль">*/
/*         </div>*/
/*         <button type="submit" id="login-btn" class="btn btn-default">Войти</button>*/
/*     </div>*/
/* </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
