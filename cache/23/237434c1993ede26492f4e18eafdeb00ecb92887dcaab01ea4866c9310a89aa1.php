<?php

/* admin/crud/img_list_select.html */
class __TwigTemplate_2957d5f4ec3ea6ebcd7024329d7fa255fbb6e177dcf5e2fe58a30f0dfbe0e21b extends Twig_Template
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
                <img id=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array(), "array"), "html", null, true);
                echo "\" class=\"image-for-select\" src=\"/";
                echo twig_escape_filter($this->env, (isset($context["upload_dir"]) ? $context["upload_dir"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "name", array(), "array"), "html", null, true);
                echo "\" width=\"20%\", height=\"20%\" title=\"Выбрать\"/>
                <p>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "origin_name", array(), "array"), "html", null, true);
                echo "&nbsp;</p>
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



<script type=\"text/javascript\">

    \$('.image-for-select').click(function(){
        var image = this.id;
        document.getElementById('img-preview').src = '/";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["upload_dir"]) ? $context["upload_dir"] : null), "html", null, true);
        echo "/' + image;
        document.getElementById('img-value').value = image;
        //alert(image);
    });

</script>";
    }

    public function getTemplateName()
    {
        return "admin/crud/img_list_select.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  60 => 16,  56 => 14,  52 => 12,  43 => 9,  35 => 8,  32 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* */
/* <hr/>*/
/* */
/*     <div id="image-list">*/
/*     {% if images %}*/
/*         {% for image in images %}*/
/*             <div class="image-conteiner">*/
/*                 <img id="{{image['name']}}" class="image-for-select" src="/{{upload_dir}}/{{image['name']}}" width="20%", height="20%" title="Выбрать"/>*/
/*                 <p>{{image['origin_name']}}&nbsp;</p>*/
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
/* */
/* <script type="text/javascript">*/
/* */
/*     $('.image-for-select').click(function(){*/
/*         var image = this.id;*/
/*         document.getElementById('img-preview').src = '/{{upload_dir}}/' + image;*/
/*         document.getElementById('img-value').value = image;*/
/*         //alert(image);*/
/*     });*/
/* */
/* </script>*/
