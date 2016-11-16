<?php

/* admin/crud/objects.html */
class __TwigTemplate_f9be7ef9be475bc67f7f2b953db40e57d5eee5a8c8665b8ccd1c739d814b379f extends Twig_Template
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
        echo "<div class=\"inner-object-wrap\">
    ";
        // line 2
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 4
                echo "            <a href=\"#\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "getId", array()), "html", null, true);
                echo "\" class=\"inner-object\" title=\"Удалить\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "getName", array()), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    ";
        }
        // line 7
        echo "    </div>

    ";
        // line 9
        $context["array_object"] = $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "getObjects", array());
        // line 10
        echo "    <hr/>
    Выберите из существующих:
    <div class=\"all-object-wrap\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array_object"]) ? $context["array_object"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 14
            echo "        <a href=\"#\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "getId", array()), "html", null, true);
            echo "\" class=\"all-object\" title=\"Добавить\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "getName", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "admin/crud/objects.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  58 => 14,  54 => 13,  49 => 10,  47 => 9,  43 => 7,  40 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="inner-object-wrap">*/
/*     {% if value %}*/
/*         {% for obj in value %}*/
/*             <a href="#" id="{{obj.getId}}" class="inner-object" title="Удалить">{{obj.getName}}</a>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     </div>*/
/* */
/*     {% set array_object = data.model.getObjects %}*/
/*     <hr/>*/
/*     Выберите из существующих:*/
/*     <div class="all-object-wrap">*/
/*     {% for obj in array_object %}*/
/*         <a href="#" id="{{obj.getId}}" class="all-object" title="Добавить">{{obj.getName}}</a>*/
/*     {% endfor %}*/
/* */
/* </div>*/
