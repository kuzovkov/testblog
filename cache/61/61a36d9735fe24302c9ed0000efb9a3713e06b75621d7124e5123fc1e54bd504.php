<?php

/* posts.html */
class __TwigTemplate_1690c0e8ed26317f5fd3b43b155db5f0e383ad19a00cd8a091f5bd1fabade4a5 extends Twig_Template
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
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "posts", array())) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 3
                echo "
    <div class=\"post_box\">

        <h2><a href=\"#\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getTitle", array()), "html", null, true);
                echo "</a></h2> ";
                $context["tags"] = $this->getAttribute($context["post"], "getTagNames", array());
                // line 7
                echo "        <div class=\"news_meta\">Posted: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "getUpdated_at", array()), $this->getAttribute($this->getAttribute((isset($context["d"]) ? $context["d"] : null), "m", array()), "Y", array())), "html", null, true);
                echo " | Tags: ";
                if ((isset($context["tags"]) ? $context["tags"] : null)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        echo "<a href=\"#\">&nbsp;";
                        echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                        echo "&nbsp; </a>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo "</div>
        <div class=\"image_wrapper\"><a href=\"#\" target=\"_parent\"><a class=\"fb_group\" id=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array()), "html", null, true);
                echo "_image\" href=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upload_dir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getImg", array()), "html", null, true);
                echo "\"><img src=\"/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upload_dir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getImg", array()), "html", null, true);
                echo "\" alt=\"image\" /></a></a></div>
        <div id=\"short_";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array()), "html", null, true);
                echo "\" class=\"short\"><p align=\"justify\">";
                echo twig_slice($this->env, $this->getAttribute($context["post"], "getBody", array()), 0, 200);
                echo "...</p></div>
        <div id=\"full_";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array()), "html", null, true);
                echo "\" class=\"full\"><p align=\"justify\">";
                echo $this->getAttribute($context["post"], "getBody", array());
                echo "</p></div>
        <div id=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array()), "html", null, true);
                echo "\" class=\"in-more\"><a class=\"continue\">Больше...</a></div>
        <div class=\"cleaner\"></div>
    </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "posts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  71 => 10,  65 => 9,  53 => 8,  35 => 7,  31 => 6,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if data.posts %}*/
/*     {% for post in data.posts %}*/
/* */
/*     <div class="post_box">*/
/* */
/*         <h2><a href="#">{{post.getTitle}}</a></h2> {% set tags = post.getTagNames %}*/
/*         <div class="news_meta">Posted: {{post.getUpdated_at | date(d.m.Y)}} | Tags: {% if tags %}{% for tag in tags %}<a href="#">&nbsp;{{tag}}&nbsp; </a>{% endfor %}{% endif %}</div>*/
/*         <div class="image_wrapper"><a href="#" target="_parent"><a class="fb_group" id="{{post.getId}}_image" href="/{{data.upload_dir}}/{{post.getImg}}"><img src="/{{data.upload_dir}}/{{post.getImg}}" alt="image" /></a></a></div>*/
/*         <div id="short_{{post.getId}}" class="short"><p align="justify">{{post.getBody | slice(0,200) | raw}}...</p></div>*/
/*         <div id="full_{{post.getId}}" class="full"><p align="justify">{{post.getBody | raw}}</p></div>*/
/*         <div id="{{post.getId}}" class="in-more"><a class="continue">Больше...</a></div>*/
/*         <div class="cleaner"></div>*/
/*     </div>*/
/* */
/*     {% endfor %}*/
/* {% endif %}*/
