<?php

/* admin/upload.html */
class __TwigTemplate_f33901b08076e1405b0483fcb493956087c1b777b1ff8da57b2c0e7da5f6e418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/upload.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'bottom_js' => array($this, 'block_bottom_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<h4><a href=\"/admin\">Home</a> -> Upload</h4>
<h3>Изображения</h3>

";
        // line 7
        $this->loadTemplate("admin/crud/upload_form_multi.html", "admin/upload.html", 7)->display($context);
        // line 8
        echo "
";
    }

    // line 10
    public function block_bottom_js($context, array $blocks = array())
    {
        // line 11
        echo "   <script type=\"text/javascript\">
        App.switchMenu('upload');
   </script>
";
    }

    public function getTemplateName()
    {
        return "admin/upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  45 => 10,  40 => 8,  38 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html' %}*/
/* {% block content %}*/
/* */
/* <h4><a href="/admin">Home</a> -> Upload</h4>*/
/* <h3>Изображения</h3>*/
/* */
/* {% include 'admin/crud/upload_form_multi.html' %}*/
/* */
/* {% endblock %}*/
/* {% block bottom_js%}*/
/*    <script type="text/javascript">*/
/*         App.switchMenu('upload');*/
/*    </script>*/
/* {% endblock %}*/
