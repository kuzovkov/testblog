<?php

/* admin/crud/list.html */
class __TwigTemplate_f9e3e40f9cf1cb42b194c4dc980f756a8f52f010f23c1b4c4ac72e6296767401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/crud/list.html", 1);
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


<h4><a href=\"/admin\">Home</a> -> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
        echo "</h4>
<h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "name", array()), "html", null, true);
        echo "</h3>

<p>
    <form method=\"get\" action=\"/admin/create/";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
        echo "\">
        <button>Create New</button>
    </form>
</p>
<table class=\"table\">
<tr>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 17
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "visible", array(), "array")) {
                // line 18
                echo "        <th><a href=\"/admin/showlist/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "order", array(), "any", true, true)) {
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "order", array()), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "name", array(), "array"), "html", null, true);
                echo "</a></th>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</tr>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "list", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "<tr>
\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 25
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "visible", array(), "array")) {
                    // line 26
                    echo "            ";
                    $context["method"] = ("get" . twig_capitalize_string_filter($this->env, $context["col"]));
                    // line 27
                    echo "            ";
                    if (((isset($context["method"]) ? $context["method"] : null) == "getId")) {
                        // line 28
                        echo "                <td><a title=\"Edit\" href=\"/admin/edit/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "getId", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "getId", array()), "html", null, true);
                        echo "</a></td>
            ";
                    } else {
                        // line 30
                        echo "                ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "string")) {
                            // line 31
                            echo "                    <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], (isset($context["method"]) ? $context["method"] : null)), "html", null, true);
                            echo "</td>
                ";
                        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 32
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "text")) {
                            // line 33
                            echo "                    <td>";
                            echo $this->getAttribute($context["object"], (isset($context["method"]) ? $context["method"] : null));
                            echo "</td>
                ";
                        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 34
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "datetime")) {
                            // line 35
                            echo "                    <td>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["object"], (isset($context["method"]) ? $context["method"] : null)), "Y/m/d H:i:s"), "html", null, true);
                            echo "</td>
                ";
                        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 36
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "date")) {
                            // line 37
                            echo "                    <td>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["object"], (isset($context["method"]) ? $context["method"] : null)), "Y/m/d"), "html", null, true);
                            echo "</td>
                ";
                        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 38
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "img")) {
                            // line 39
                            echo "                    <td><img width=\"50\" height=\"50\" src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upload_dir", array()), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], (isset($context["method"]) ? $context["method"] : null)), "html", null, true);
                            echo "\"/></td>
                ";
                        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 40
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "boolean")) {
                            // line 41
                            echo "                    <td>";
                            if ($this->getAttribute($context["object"], (isset($context["method"]) ? $context["method"] : null))) {
                                echo " busy ";
                            }
                            echo "</td>
                ";
                        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 42
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "object_array")) {
                            // line 43
                            echo "                    <td>
                        ";
                            // line 44
                            $context["objects"] = $this->getAttribute($context["object"], (isset($context["method"]) ? $context["method"] : null));
                            // line 45
                            echo "                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) ? $context["objects"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
                                // line 46
                                echo "                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["obj"], "getName", array()), "html", null, true);
                                echo "&nbsp;
                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 48
                            echo "                    </td>
                ";
                        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                        // line 49
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "array")) {
                            // line 50
                            echo "                    <td>";
                            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["object"], (isset($context["method"]) ? $context["method"] : null)), ","), "html", null, true);
                            echo "</td>
                ";
                        }
                        // line 52
                        echo "            ";
                    }
                    // line 53
                    echo "        ";
                }
                // line 54
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        <td>
            <form onsubmit=\"return confirmDelete(";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "getId", array()), "html", null, true);
            echo ");\" method=\"get\" action=\"/admin/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "getId", array()), "html", null, true);
            echo "\"><button>Delete</button></form>
        </td>
        <td>
            <form method=\"get\" action=\"/admin/edit/";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "getId", array()), "html", null, true);
            echo "\"><button>Edit</button></form>
        </td>
        
</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
</table>


";
    }

    // line 71
    public function block_bottom_js($context, array $blocks = array())
    {
        // line 72
        echo "   <script type=\"text/javascript\">
        App.switchMenu('home');
        
        function confirmDelete(id){
             return confirm('Would you like delete item ' + id);
        }
   </script>

";
    }

    public function getTemplateName()
    {
        return "admin/crud/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 72,  240 => 71,  232 => 65,  218 => 59,  208 => 56,  205 => 55,  199 => 54,  196 => 53,  193 => 52,  187 => 50,  185 => 49,  182 => 48,  173 => 46,  168 => 45,  166 => 44,  163 => 43,  161 => 42,  154 => 41,  152 => 40,  145 => 39,  143 => 38,  138 => 37,  136 => 36,  131 => 35,  129 => 34,  124 => 33,  122 => 32,  117 => 31,  114 => 30,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  91 => 24,  88 => 23,  84 => 22,  81 => 21,  63 => 18,  60 => 17,  56 => 16,  47 => 10,  41 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html' %}*/
/* {% block content %}*/
/* */
/* */
/* */
/* <h4><a href="/admin">Home</a> -> {{data.model.entity}}</h4>*/
/* <h3>{{data.model.name}}</h3>*/
/* */
/* <p>*/
/*     <form method="get" action="/admin/create/{{data.model.entity}}">*/
/*         <button>Create New</button>*/
/*     </form>*/
/* </p>*/
/* <table class="table">*/
/* <tr>*/
/* {% for col in data.model.schema_list|keys %}*/
/*     {% if data.model.schema_list[col]['visible'] %}*/
/*         <th><a href="/admin/showlist/{{data.model.entity}}/{{col}}{% if data.order is defined %}/{{data.order}}{% endif %}">{{data.model.schema_list[col]['name']}}</a></th>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* </tr>*/
/* {% for object in data.list %}*/
/* <tr>*/
/* 	{% for col in (data.model.schema_list|keys) %}*/
/*         {% if data.model.schema_list[col]['visible'] %}*/
/*             {% set method='get'~(col|capitalize) %}*/
/*             {% if method == 'getId' %}*/
/*                 <td><a title="Edit" href="/admin/edit/{{data.model.entity}}/{{object.getId}}">{{object.getId}}</a></td>*/
/*             {% else %}*/
/*                 {% if data.model.schema_list[col]['type'] == 'string' %}*/
/*                     <td>{{ attribute(object, method) }}</td>*/
/*                 {% elseif data.model.schema_list[col]['type'] == 'text' %}*/
/*                     <td>{{ attribute(object, method) | raw}}</td>*/
/*                 {% elseif data.model.schema_list[col]['type'] == 'datetime' %}*/
/*                     <td>{{ attribute(object, method) | date ('Y/m/d H:i:s')}}</td>*/
/*                 {% elseif data.model.schema_list[col]['type'] == 'date' %}*/
/*                     <td>{{ attribute(object, method) | date ('Y/m/d')}}</td>*/
/*                 {% elseif data.model.schema_list[col]['type'] == 'img' %}*/
/*                     <td><img width="50" height="50" src="/{{data.upload_dir}}/{{attribute(object, method)}}"/></td>*/
/*                 {% elseif data.model.schema_list[col]['type'] == 'boolean' %}*/
/*                     <td>{% if attribute(object, method) %} busy {% endif %}</td>*/
/*                 {% elseif data.model.schema_list[col]['type'] == 'object_array' %}*/
/*                     <td>*/
/*                         {% set objects = attribute(object, method) %}*/
/*                         {% for obj in objects %}*/
/*                             {{obj.getName}}&nbsp;*/
/*                         {% endfor %}*/
/*                     </td>*/
/*                 {% elseif data.model.schema_list[col]['type'] == 'array' %}*/
/*                     <td>{{attribute(object, method)|join(',') }}</td>*/
/*                 {% endif%}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*         <td>*/
/*             <form onsubmit="return confirmDelete({{object.getId}});" method="get" action="/admin/delete/{{data.model.entity}}/{{object.getId}}"><button>Delete</button></form>*/
/*         </td>*/
/*         <td>*/
/*             <form method="get" action="/admin/edit/{{data.model.entity}}/{{object.getId}}"><button>Edit</button></form>*/
/*         </td>*/
/*         */
/* </tr>*/
/* */
/* {% endfor %}*/
/* */
/* </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block bottom_js%}*/
/*    <script type="text/javascript">*/
/*         App.switchMenu('home');*/
/*         */
/*         function confirmDelete(id){*/
/*              return confirm('Would you like delete item ' + id);*/
/*         }*/
/*    </script>*/
/* */
/* {% endblock %}*/
/* */
