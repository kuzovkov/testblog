<?php

/* admin/crud/object_array_edit.html */
class __TwigTemplate_2d8e3abfe2e223fd611d8f43a6f0bd463049f7bc296a8e89114b752ab265465e extends Twig_Template
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
    <div class=\"inner-object-wrap\">
    ";
        // line 6
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                // line 8
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
            // line 10
            echo "    ";
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

<script>
    function setHandlers(){
        \$('.inner-object').click(function(event){

            event.preventDefault();
            var id = this.id;
            \$.get('/admin/removetag/";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), "getId", array()), "html", null, true);
        echo "/'+id, function(data){
                console.log(data);
                updateObjectsWrap();
            });
        });

        \$('.all-object').click(function(event){
            event.preventDefault();
            var id = this.id;
            \$.get('/admin/addtag/";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), "getId", array()), "html", null, true);
        echo "/'+id, function(data){
                console.log(data);
                updateObjectsWrap();
            });
        });

    }

    function updateObjectsWrap(){
        \$('#objects-wrap').load('/admin/showtags/";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), "getId", array()), "html", null, true);
        echo "', function(){
            setHandlers();

        });
    }

    setHandlers();
</script>

";
    }

    public function getTemplateName()
    {
        return "admin/crud/object_array_edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 48,  97 => 39,  85 => 30,  73 => 20,  62 => 18,  58 => 17,  53 => 14,  51 => 13,  47 => 11,  44 => 10,  33 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen, projection" />*/
/* */
/* <div id="objects-wrap">*/
/*     <div class="inner-object-wrap">*/
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
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/*     function setHandlers(){*/
/*         $('.inner-object').click(function(event){*/
/* */
/*             event.preventDefault();*/
/*             var id = this.id;*/
/*             $.get('/admin/removetag/{{data.object.getId}}/'+id, function(data){*/
/*                 console.log(data);*/
/*                 updateObjectsWrap();*/
/*             });*/
/*         });*/
/* */
/*         $('.all-object').click(function(event){*/
/*             event.preventDefault();*/
/*             var id = this.id;*/
/*             $.get('/admin/addtag/{{data.object.getId}}/'+id, function(data){*/
/*                 console.log(data);*/
/*                 updateObjectsWrap();*/
/*             });*/
/*         });*/
/* */
/*     }*/
/* */
/*     function updateObjectsWrap(){*/
/*         $('#objects-wrap').load('/admin/showtags/{{data.object.getId}}', function(){*/
/*             setHandlers();*/
/* */
/*         });*/
/*     }*/
/* */
/*     setHandlers();*/
/* </script>*/
/* */
/* */
