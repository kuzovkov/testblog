<?php

/* admin/crud/object_array_create.html */
class __TwigTemplate_fbc069c3f918dcc060fe96edb180cd13617d24959ba8837e5e90dc646f07d5a9 extends Twig_Template
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
<link rel=\"stylesheet\" href=\"/css/style.css\" type=\"text/css\" media=\"screen, projection\" />

<div id=\"objects-wrap\">
    <div class=\"inner-object-wrap\" id=\"inner-object-wrap\">
        ";
        // line 6
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 8
                echo "        <a href=\"#\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "getId", array()), "html", null, true);
                echo "\" class=\"inner-object\" title=\"Удалить\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "getName", array()), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        ";
        }
        // line 11
        echo "    </div>

    ";
        // line 13
        $context["array_object"] = $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "getObjects", array());
        // line 14
        echo "    <hr/>
    Выберите из существующих:
    <div class=\"all-object-wrap\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array_object"]) ? $context["array_object"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 18
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
        // line 20
        echo "
    </div>
</div>

<input id=\"object_array_input\" type=\"hidden\" name=\"tags\" value=\"\" />

<script>
    var objectId = [];

    function setHandlers(){

        \$('.all-object').click(function(event){
            event.preventDefault();
            var id = this.id;
            var name = this.text;

            if (objectId.indexOf(id) == -1){
                objectId.push(id);
                \$('#object_array_input').val(objectId.join(','));
                \$('#inner-object-wrap').append('<a href=\"#\" id=\"'+id+'\" class=\"inner-object\" title=\"Удалить\">'+name+'</a>');

                \$('.inner-object').click(function(event){

                    event.preventDefault();
                    var id = this.id;
                    \$(this).remove();
                    for (var i = 0; i < objectId.length; i++){
                        if ((objectId[i]) == id)
                            objectId.splice(i,1);
                    }
                    \$('#object_array_input').val(objectId.join(','));
                });
            }

        });

    }



    setHandlers();
</script>

";
    }

    public function getTemplateName()
    {
        return "admin/crud/object_array_create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  62 => 18,  58 => 17,  53 => 14,  51 => 13,  47 => 11,  44 => 10,  33 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen, projection" />*/
/* */
/* <div id="objects-wrap">*/
/*     <div class="inner-object-wrap" id="inner-object-wrap">*/
/*         {% if value %}*/
/*         {% for obj in value %}*/
/*         <a href="#" id="{{obj.getId}}" class="inner-object" title="Удалить">{{obj.getName}}</a>*/
/*         {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% set array_object = data.model.getObjects %}*/
/*     <hr/>*/
/*     Выберите из существующих:*/
/*     <div class="all-object-wrap">*/
/*         {% for obj in array_object %}*/
/*         <a href="#" id="{{obj.getId}}" class="all-object" title="Добавить">{{obj.getName}}</a>*/
/*         {% endfor %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <input id="object_array_input" type="hidden" name="tags" value="" />*/
/* */
/* <script>*/
/*     var objectId = [];*/
/* */
/*     function setHandlers(){*/
/* */
/*         $('.all-object').click(function(event){*/
/*             event.preventDefault();*/
/*             var id = this.id;*/
/*             var name = this.text;*/
/* */
/*             if (objectId.indexOf(id) == -1){*/
/*                 objectId.push(id);*/
/*                 $('#object_array_input').val(objectId.join(','));*/
/*                 $('#inner-object-wrap').append('<a href="#" id="'+id+'" class="inner-object" title="Удалить">'+name+'</a>');*/
/* */
/*                 $('.inner-object').click(function(event){*/
/* */
/*                     event.preventDefault();*/
/*                     var id = this.id;*/
/*                     $(this).remove();*/
/*                     for (var i = 0; i < objectId.length; i++){*/
/*                         if ((objectId[i]) == id)*/
/*                             objectId.splice(i,1);*/
/*                     }*/
/*                     $('#object_array_input').val(objectId.join(','));*/
/*                 });*/
/*             }*/
/* */
/*         });*/
/* */
/*     }*/
/* */
/* */
/* */
/*     setHandlers();*/
/* </script>*/
/* */
/* */
