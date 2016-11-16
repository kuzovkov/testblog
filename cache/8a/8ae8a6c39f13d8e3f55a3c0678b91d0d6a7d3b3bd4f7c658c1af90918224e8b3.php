<?php

/* admin/index.html */
class __TwigTemplate_d865995767b03a8fc7015a37713d985a84abb7bead249bed268bae5fefb2fab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/index.html", 1);
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
        echo "<div class=\"myinfo\">
<table class=\"table\">
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "models", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 6
            echo "    <tr>
        <td>
            <p><a href=\"/admin/showlist/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "entity", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "name", array()), "html", null, true);
            echo "</a></p>
        </td>
        <td>
            <p><form method=\"get\" action=\"/admin/create/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "entity", array()), "html", null, true);
            echo "\"><button>Create New</button></form></p>
        </td>

        <td>
            <p><form method=\"get\" action=\"/admin/showlist/";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "entity", array()), "html", null, true);
            echo "\"><button>List</button></form></p>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>

</div>

";
    }

    // line 25
    public function block_bottom_js($context, array $blocks = array())
    {
        // line 26
        echo "   <script type=\"text/javascript\">
        App.switchMenu('home');
   </script>
";
    }

    public function getTemplateName()
    {
        return "admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  77 => 25,  69 => 19,  59 => 15,  52 => 11,  44 => 8,  40 => 6,  36 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html' %}*/
/* {% block content %}*/
/* <div class="myinfo">*/
/* <table class="table">*/
/* {% for model in data.models %}*/
/*     <tr>*/
/*         <td>*/
/*             <p><a href="/admin/showlist/{{model.entity}}">{{model.name}}</a></p>*/
/*         </td>*/
/*         <td>*/
/*             <p><form method="get" action="/admin/create/{{model.entity}}"><button>Create New</button></form></p>*/
/*         </td>*/
/* */
/*         <td>*/
/*             <p><form method="get" action="/admin/showlist/{{model.entity}}"><button>List</button></form></p>*/
/*         </td>*/
/*     </tr>*/
/* {% endfor %}*/
/* </table>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block bottom_js%}*/
/*    <script type="text/javascript">*/
/*         App.switchMenu('home');*/
/*    </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
