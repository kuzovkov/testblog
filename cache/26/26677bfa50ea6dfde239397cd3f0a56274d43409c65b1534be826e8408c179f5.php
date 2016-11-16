<?php

/* admin/crud/edit.html */
class __TwigTemplate_7a79b2bd477ae7ae7141a55b423d839356e8708e1c13fb82a20ed850a65b59e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/crud/edit.html", 1);
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
        echo "<style>
.novalid
{
   border: 1px solid red; 
}

.novalid-message
{
   color: red; 
}
</style>

<h4><a href=\"/admin\">Home</a> -> <a href=\"/admin/showlist/";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
        echo "</a> -> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
        echo "</h4>
<h3>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "name", array()), "html", null, true);
        echo "</h3>
<form onsubmit=\"return validate();\" method=\"POST\" action=\"/admin/";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "action", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "entity", array()), "html", null, true);
        echo "/";
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), "getId", array()), "html", null, true);
        }
        echo "\" enctype=\"application/x-www-form-urlencoded\">
<table class=\"table\">
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 20
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "visible", array(), "array")) {
                // line 21
                echo "<tr>
\t<td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "name", array(), "array"), "html", null, true);
                echo "</td>
    <td>
        ";
                // line 24
                $context["method"] = ("get" . twig_capitalize_string_filter($this->env, $context["col"]));
                // line 25
                echo "        ";
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array(), "any", true, true)) {
                    // line 26
                    echo "            ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "text")) {
                        // line 27
                        echo "                ";
                        $context["value"] = $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null));
                        // line 28
                        echo "            ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "datetime")) {
                        // line 29
                        echo "                ";
                        $context["value"] = twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null)), "Y/m/d H:i:s");
                        // line 30
                        echo "            ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "date")) {
                        // line 31
                        echo "                ";
                        $context["value"] = twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null)), "Y/m/d");
                        // line 32
                        echo "            ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "array")) {
                        // line 33
                        echo "                ";
                        $context["value"] = twig_join_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null)), ",");
                        // line 34
                        echo "            ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "img")) {
                        // line 35
                        echo "                ";
                        $context["value"] = $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null));
                        // line 36
                        echo "            ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "integer")) {
                        // line 37
                        echo "                ";
                        $context["value"] = $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null));
                        // line 38
                        echo "            ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "object_array")) {
                        // line 39
                        echo "                ";
                        $context["value"] = $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null));
                        // line 40
                        echo "            ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_list", array()), $context["col"], array(), "array"), "type", array(), "array") == "string")) {
                        // line 41
                        echo "                ";
                        $context["value"] = $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null));
                        // line 42
                        echo "            ";
                    }
                    // line 43
                    echo "        
            ";
                    // line 44
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "checkbox")) {
                        // line 45
                        echo "                ";
                        if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null))) {
                            echo " 
                    ";
                            // line 46
                            $context["checked"] = "checked";
                            echo " 
                ";
                        } else {
                            // line 48
                            echo "                    ";
                            $context["checked"] = "";
                            // line 49
                            echo "                ";
                        }
                        // line 50
                        echo "            ";
                    }
                    // line 51
                    echo "        ";
                } else {
                    // line 52
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array(), "any", false, true), "schema_edit", array(), "any", false, true), $context["col"], array(), "array", false, true), "default", array(), "array", true, true)) {
                        // line 53
                        echo "                ";
                        $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "default", array(), "array");
                        // line 54
                        echo "            ";
                    }
                    // line 55
                    echo "
        ";
                }
                // line 57
                echo "        ";
                $context["disabled"] = "";
                // line 58
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array(), "any", false, true), "schema_edit", array(), "any", false, true), $context["col"], array(), "array", false, true), "enabled", array(), "array", true, true)) {
                    if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "enabled", array(), "array")) {
                        $context["disabled"] = "disabled";
                    }
                }
                // line 59
                echo "        ";
                $context["required"] = "";
                // line 60
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array(), "any", false, true), "schema_edit", array(), "any", false, true), $context["col"], array(), "array", false, true), "required", array(), "array", true, true)) {
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "required", array(), "array")) {
                        $context["required"] = "required";
                    }
                }
                // line 61
                echo "        
        
        ";
                // line 63
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "select")) {
                    // line 64
                    echo "            <p>
                <select name=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                    echo "\">
                    ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "options", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                        // line 67
                        echo "                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["opt"], "html", null, true);
                        echo "\" ";
                        if (twig_in_filter($context["opt"], $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null)))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["opt"], "html", null, true);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                </select>
            </p>
        ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                // line 71
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "multiselect")) {
                    // line 72
                    echo "            <p>
                <select multiple name=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                    echo "[]\">
                    ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "options", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                        // line 75
                        echo "                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["opt"], "html", null, true);
                        echo "\" ";
                        if (twig_in_filter($context["opt"], $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "object", array()), (isset($context["method"]) ? $context["method"] : null)))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, $context["opt"], "html", null, true);
                        echo "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                </select>
            </p>
        ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                // line 79
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "text")) {
                    // line 80
                    echo "            <textarea name=\"";
                    echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                    echo "\" type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array(), "any", false, true), "schema_edit", array(), "any", false, true), $context["col"], array(), "array", false, true), "class", array(), "array", true, true)) {
                        echo " class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "class", array(), "array"), "html", null, true);
                        echo "\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "</textarea>


        ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                // line 83
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "img")) {
                    // line 84
                    echo "

            <img id=\"img-preview\" width=\"100\" height=\"75\"  src=\"";
                    // line 86
                    if (((isset($context["value"]) ? $context["value"] : null) == "")) {
                        echo "/upload/default.png";
                    } else {
                        echo twig_escape_filter($this->env, ((("/" . $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upload_dir", array())) . "/") . (isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                    }
                    echo "\" ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array(), "any", false, true), "schema_edit", array(), "any", false, true), $context["col"], array(), "array", false, true), "class", array(), "array", true, true)) {
                        echo " class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "class", array(), "array"), "html", null, true);
                        echo "\" ";
                    }
                    echo "/>
            <input type=\"hidden\" name=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\" id=\"img-value\"/>
            <a href=\"#\" id=\"open-images\">Изображения</a>

        ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                // line 90
(isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array") == "object_array")) {
                    // line 91
                    echo "            ";
                    if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "action", array()) == "edit")) {
                        // line 92
                        echo "                ";
                        $this->loadTemplate("admin/crud/object_array_edit.html", "admin/crud/edit.html", 92)->display($context);
                        // line 93
                        echo "            ";
                    } else {
                        // line 94
                        echo "                ";
                        $this->loadTemplate("admin/crud/object_array_create.html", "admin/crud/edit.html", 94)->display($context);
                        // line 95
                        echo "            ";
                    }
                    // line 96
                    echo "        ";
                } else {
                    // line 97
                    echo "            <p><input name=\"";
                    echo twig_escape_filter($this->env, $context["col"], "html", null, true);
                    echo "\" type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "type", array(), "array"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\" ";
                    echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["disabled"]) ? $context["disabled"] : null), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["required"]) ? $context["required"] : null), "html", null, true);
                    echo " ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array(), "any", false, true), "schema_edit", array(), "any", false, true), $context["col"], array(), "array", false, true), "class", array(), "array", true, true)) {
                        echo " class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "class", array(), "array"), "html", null, true);
                        echo "\" ";
                    }
                    echo " ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array(), "any", false, true), "schema_edit", array(), "any", false, true), $context["col"], array(), "array", false, true), "placeholder", array(), "array", true, true)) {
                        echo " placeholder=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "model", array()), "schema_edit", array()), $context["col"], array(), "array"), "placeholder", array(), "array"), "html", null, true);
                        echo "\" ";
                    }
                    echo "/></p>
        ";
                }
                // line 99
                echo "    </td>
</tr>
";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
</table>
<button>";
        // line 105
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "action", array()) == "edit")) {
            echo " Save ";
        } else {
            echo " Create ";
        }
        echo "</button>

</form>

";
        // line 109
        $this->loadTemplate("admin/crud/tinymce.html", "admin/crud/edit.html", 109)->display($context);
        // line 110
        $this->loadTemplate("admin/crud/select_image.html", "admin/crud/edit.html", 110)->display($context);
    }

    // line 113
    public function block_bottom_js($context, array $blocks = array())
    {
        // line 114
        echo "   <script type=\"text/javascript\">
        App.switchMenu('home');
   </script>
   <script type=\"text/javascript\" src=\"/js/validate.js\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$( \"input.datetime\" ).datepicker();
        });
    </script>

    <script>

    </script>
   
";
    }

    public function getTemplateName()
    {
        return "admin/crud/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 114,  413 => 113,  409 => 110,  407 => 109,  396 => 105,  392 => 103,  375 => 99,  347 => 97,  344 => 96,  341 => 95,  338 => 94,  335 => 93,  332 => 92,  329 => 91,  327 => 90,  319 => 87,  305 => 86,  301 => 84,  299 => 83,  282 => 80,  280 => 79,  276 => 77,  261 => 75,  257 => 74,  253 => 73,  250 => 72,  248 => 71,  244 => 69,  229 => 67,  225 => 66,  221 => 65,  218 => 64,  216 => 63,  212 => 61,  205 => 60,  202 => 59,  195 => 58,  192 => 57,  188 => 55,  185 => 54,  182 => 53,  179 => 52,  176 => 51,  173 => 50,  170 => 49,  167 => 48,  162 => 46,  157 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  98 => 25,  96 => 24,  91 => 22,  88 => 21,  86 => 20,  69 => 19,  58 => 17,  54 => 16,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html' %}*/
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
/* </style>*/
/* */
/* <h4><a href="/admin">Home</a> -> <a href="/admin/showlist/{{data.model.entity}}">{{data.model.entity}}</a> -> {{data.model.entity}}</h4>*/
/* <h3>{{data.model.name}}</h3>*/
/* <form onsubmit="return validate();" method="POST" action="/admin/{{data.action}}/{{data.model.entity}}/{% if data.object is defined %}{{data.object.getId}}{% endif %}" enctype="application/x-www-form-urlencoded">*/
/* <table class="table">*/
/* {% for col in data.model.schema_edit|keys %}*/
/* {% if data.model.schema_edit[col]['visible'] %}*/
/* <tr>*/
/* 	<td>{{data.model.schema_edit[col]['name']}}</td>*/
/*     <td>*/
/*         {% set method='get'~(col|capitalize) %}*/
/*         {% if data.object is defined %}*/
/*             {% if data.model.schema_edit[col]['type'] == 'text' %}*/
/*                 {% set value=attribute(data.object, method) %}*/
/*             {% elseif data.model.schema_edit[col]['type'] == 'datetime' %}*/
/*                 {% set value=attribute(data.object, method) | date ('Y/m/d H:i:s') %}*/
/*             {% elseif data.model.schema_edit[col]['type'] == 'date' %}*/
/*                 {% set value=attribute(data.object, method) | date ('Y/m/d') %}*/
/*             {% elseif data.model.schema_edit[col]['type'] == 'array' %}*/
/*                 {% set value=attribute(data.object, method)|join(',') %}*/
/*             {% elseif data.model.schema_edit[col]['type'] == 'img' %}*/
/*                 {% set value=attribute(data.object, method) %}*/
/*             {% elseif data.model.schema_edit[col]['type'] == 'integer' %}*/
/*                 {% set value=attribute(data.object, method) %}*/
/*             {% elseif data.model.schema_edit[col]['type'] == 'object_array' %}*/
/*                 {% set value=attribute(data.object, method) %}*/
/*             {% elseif data.model.schema_list[col]['type'] == 'string' %}*/
/*                 {% set value=attribute(data.object, method) %}*/
/*             {% endif%}*/
/*         */
/*             {% if data.model.schema_edit[col]['type'] == 'checkbox' %}*/
/*                 {% if attribute(data.object, method) %} */
/*                     {% set checked='checked' %} */
/*                 {% else %}*/
/*                     {% set checked='' %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% else %}*/
/*             {% if data.model.schema_edit[col]['default'] is defined %}*/
/*                 {% set value = data.model.schema_edit[col]['default'] %}*/
/*             {% endif %}*/
/* */
/*         {% endif %}*/
/*         {% set disabled='' %}*/
/*         {% if data.model.schema_edit[col]['enabled'] is defined %}{% if not data.model.schema_edit[col]['enabled'] %}{% set disabled='disabled' %}{% endif %}{% endif %}*/
/*         {% set required='' %}*/
/*         {% if data.model.schema_edit[col]['required'] is defined %}{% if data.model.schema_edit[col]['required'] %}{% set required='required' %}{% endif %}{% endif %}*/
/*         */
/*         */
/*         {% if data.model.schema_edit[col]['type'] == 'select' %}*/
/*             <p>*/
/*                 <select name="{{col}}">*/
/*                     {% for opt in data.model.schema_edit[col]['options'] %}*/
/*                         <option value="{{opt}}" {% if opt in attribute(data.object, method) %} selected {% endif %}>{{opt}}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </p>*/
/*         {% elseif data.model.schema_edit[col]['type'] == 'multiselect' %}*/
/*             <p>*/
/*                 <select multiple name="{{col}}[]">*/
/*                     {% for opt in data.model.schema_edit[col]['options'] %}*/
/*                         <option value="{{opt}}" {% if opt in attribute(data.object, method) %} selected {% endif %}>{{opt}}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </p>*/
/*         {% elseif data.model.schema_edit[col]['type'] == 'text' %}*/
/*             <textarea name="{{col}}" type="{{data.model.schema_edit[col]['type']}}" {% if data.model.schema_edit[col]['class'] is defined %} class="{{data.model.schema_edit[col]['class']}}" {% endif %}>{{value}}</textarea>*/
/* */
/* */
/*         {% elseif data.model.schema_edit[col]['type'] == 'img' %}*/
/* */
/* */
/*             <img id="img-preview" width="100" height="75"  src="{% if value == '' %}/upload/default.png{% else %}{{'/'~data.upload_dir~'/'~value}}{% endif %}" {% if data.model.schema_edit[col]['class'] is defined %} class="{{data.model.schema_edit[col]['class']}}" {% endif %}/>*/
/*             <input type="hidden" name="{{col}}" value="{{value}}" id="img-value"/>*/
/*             <a href="#" id="open-images">Изображения</a>*/
/* */
/*         {% elseif data.model.schema_edit[col]['type'] == 'object_array' %}*/
/*             {% if data.action == 'edit' %}*/
/*                 {% include 'admin/crud/object_array_edit.html' %}*/
/*             {% else %}*/
/*                 {% include 'admin/crud/object_array_create.html' %}*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <p><input name="{{col}}" type="{{data.model.schema_edit[col]['type']}}" value="{{value}}" {{checked}} {{disabled}} {{required}} {% if data.model.schema_edit[col]['class'] is defined %} class="{{data.model.schema_edit[col]['class']}}" {% endif %} {% if data.model.schema_edit[col]['placeholder'] is defined %} placeholder="{{data.model.schema_edit[col]['placeholder']}}" {% endif %}/></p>*/
/*         {% endif %}*/
/*     </td>*/
/* </tr>*/
/* {% endif %}*/
/* {% endfor %}*/
/* */
/* </table>*/
/* <button>{% if data.action=='edit' %} Save {% else%} Create {% endif %}</button>*/
/* */
/* </form>*/
/* */
/* {% include 'admin/crud/tinymce.html' %}*/
/* {% include 'admin/crud/select_image.html' %}*/
/* {% endblock %}*/
/* */
/* {% block bottom_js%}*/
/*    <script type="text/javascript">*/
/*         App.switchMenu('home');*/
/*    </script>*/
/*    <script type="text/javascript" src="/js/validate.js"></script>*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $( "input.datetime" ).datepicker();*/
/*         });*/
/*     </script>*/
/* */
/*     <script>*/
/* */
/*     </script>*/
/*    */
/* {% endblock %}*/
/* */
