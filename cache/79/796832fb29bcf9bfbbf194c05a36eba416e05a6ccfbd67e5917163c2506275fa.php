<?php

/* admin/upload_dump.html */
class __TwigTemplate_cb30b9e1cd95482234e538dd4c4bb60e6f930a92cbff8e64a6d0dc1fe910de78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/upload_dump.html", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"left\">
        <h3>Заливка базы данных</h3>

        <p>Заливка дампа базы mysql в базу <b>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "db_name", array()), "html", null, true);
        echo "</b></p>
        <p>Все прежние данные в базе <b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "db_name", array()), "html", null, true);
        echo "</b> будут потеряны!</p>

        <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upload_url", array()), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
        <input type=\"file\" name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "field_name", array()), "html", null, true);
        echo "\" required=\"required\"/><br/>
        <button> Загрузить </button>
        </form>
    </div>


";
    }

    // line 19
    public function block_bottom_js($context, array $blocks = array())
    {
        // line 20
        echo "<script type=\"text/javascript\">
    App.switchMenu('recovery');
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/upload_dump.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  62 => 19,  51 => 12,  47 => 11,  42 => 9,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html' %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="left">*/
/*         <h3>Заливка базы данных</h3>*/
/* */
/*         <p>Заливка дампа базы mysql в базу <b>{{data.db_name}}</b></p>*/
/*         <p>Все прежние данные в базе <b>{{data.db_name}}</b> будут потеряны!</p>*/
/* */
/*         <form method="post" action="{{data.upload_url}}" enctype="multipart/form-data">*/
/*         <input type="file" name="{{data.field_name}}" required="required"/><br/>*/
/*         <button> Загрузить </button>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* {% block bottom_js%}*/
/* <script type="text/javascript">*/
/*     App.switchMenu('recovery');*/
/* </script>*/
/* {% endblock %}*/
