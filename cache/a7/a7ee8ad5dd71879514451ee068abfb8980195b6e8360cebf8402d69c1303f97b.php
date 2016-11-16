<?php

/* admin/crud/img_list.html */
class __TwigTemplate_e217a0e630378c9f25a38ed9e0df3fb4d2cfdbcae2a27740907768d5de9918ec extends Twig_Template
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
<hr/>
<form method=\"post\" action=\"/admin/delimages\">
    <div id=\"image-list\">
    ";
        // line 5
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 7
                echo "            <div class=\"image-conteiner\">
                <img src=\"/";
                // line 8
                echo twig_escape_filter($this->env, (isset($context["upload_dir"]) ? $context["upload_dir"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array(), "array"), "html", null, true);
                echo "\" width=\"20%\", height=\"20%\" />
                <p>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "origin_name", array(), "array"), "html", null, true);
                echo "&nbsp; <input class=\"image-checkbox\" type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array(), "array"), "html", null, true);
                echo "\"/></p>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
    ";
        } else {
            // line 14
            echo "        <h3>Изображений не загружено</h3>
    ";
        }
        // line 16
        echo "
        <div class=\"clear\"></div>
    </div>


    <button class=\"img-del-btn\">Удалить отмеченные</button>
</form>
<a href=\"#\" id=\"select-all-img\">Отметить все</a>
<a href=\"#\" id=\"unselect-all-img\">Снять отметки со всех</a>

<script type=\"text/javascript\">
    \$('#select-all-img').click(function(ev){
        ev.preventDefault();
        \$('input:checkbox').prop('checked', true);
    });
    \$('#unselect-all-img').click(function(ev){
        ev.preventDefault();
        \$('input:checkbox').prop('checked', false);
    });
</script>";
    }

    public function getTemplateName()
    {
        return "admin/crud/img_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 14,  52 => 12,  41 => 9,  35 => 8,  32 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* */
/* <hr/>*/
/* <form method="post" action="/admin/delimages">*/
/*     <div id="image-list">*/
/*     {% if images %}*/
/*         {% for image in images %}*/
/*             <div class="image-conteiner">*/
/*                 <img src="/{{upload_dir}}/{{image['name']}}" width="20%", height="20%" />*/
/*                 <p>{{image['origin_name']}}&nbsp; <input class="image-checkbox" type="checkbox" name="{{image['name']}}"/></p>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*     {% else %}*/
/*         <h3>Изображений не загружено</h3>*/
/*     {% endif %}*/
/* */
/*         <div class="clear"></div>*/
/*     </div>*/
/* */
/* */
/*     <button class="img-del-btn">Удалить отмеченные</button>*/
/* </form>*/
/* <a href="#" id="select-all-img">Отметить все</a>*/
/* <a href="#" id="unselect-all-img">Снять отметки со всех</a>*/
/* */
/* <script type="text/javascript">*/
/*     $('#select-all-img').click(function(ev){*/
/*         ev.preventDefault();*/
/*         $('input:checkbox').prop('checked', true);*/
/*     });*/
/*     $('#unselect-all-img').click(function(ev){*/
/*         ev.preventDefault();*/
/*         $('input:checkbox').prop('checked', false);*/
/*     });*/
/* </script>*/
