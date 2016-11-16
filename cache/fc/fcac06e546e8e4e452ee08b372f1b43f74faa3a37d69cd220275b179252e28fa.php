<?php

/* index.html */
class __TwigTemplate_4965eb4c27c97c553f6968674f57821a28b4a33d2518bd2b2b2ae954578625d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
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
    <div id=\"posts-wrapper\">
       ";
        // line 5
        $this->loadTemplate("posts.html", "index.html", 5)->display($context);
        // line 6
        echo "    </div>

    <button id=\"add-posts\">Загрузить еще...</button>



    <script type=\"text/javascript\">
        function hideFull() {
            \$('div.full').hide();
        }

        function showShort() {
            \$('div.short').show();

        }

        hideFull();

        function more( id, elem ) {
            console.log(id);
            if ( elem.html() == '<a class=\"continue\">Больше...</a>') {

                \$('#short_'+id).hide();
                \$('#full_'+id).fadeIn(1000);
                elem.html('<a class=\"continue\">Меньше...</a>');
            }else if (elem.html() == '<a class=\"continue\">Меньше...</a>'){
                \$('#full_'+id).hide();
                \$('#short_'+id).fadeIn(1000);
                elem.html('<a class=\"continue\">Больше...</a>');
            }
        }

        \$('.in-more').click(function(){
            var id=this.id;
            var elem = \$(this);
            more(id,elem);
        });

    </script>

    <script>
        \$('#add-posts').click(function(){
            var number_posts = \$('.post_box').length;
            //console.log(number_posts);
            \$.post('/common/addposts/' + (number_posts-1), function (content) {
                \$('#posts-wrapper').append(content);
                hideFull();
                showShort();
                \$('.in-more').each(function(){
                    \$(this).unbind('click');
                });
                \$('.in-more').click(function(){
                    var id=this.id;
                    var elem = \$(this);
                    more(id,elem);
                });
            });
        });



        \$(\"a.fb_group\").fancybox();
    </script>

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html' %}*/
/* {% block content %}*/
/* */
/*     <div id="posts-wrapper">*/
/*        {% include 'posts.html' %}*/
/*     </div>*/
/* */
/*     <button id="add-posts">Загрузить еще...</button>*/
/* */
/* */
/* */
/*     <script type="text/javascript">*/
/*         function hideFull() {*/
/*             $('div.full').hide();*/
/*         }*/
/* */
/*         function showShort() {*/
/*             $('div.short').show();*/
/* */
/*         }*/
/* */
/*         hideFull();*/
/* */
/*         function more( id, elem ) {*/
/*             console.log(id);*/
/*             if ( elem.html() == '<a class="continue">Больше...</a>') {*/
/* */
/*                 $('#short_'+id).hide();*/
/*                 $('#full_'+id).fadeIn(1000);*/
/*                 elem.html('<a class="continue">Меньше...</a>');*/
/*             }else if (elem.html() == '<a class="continue">Меньше...</a>'){*/
/*                 $('#full_'+id).hide();*/
/*                 $('#short_'+id).fadeIn(1000);*/
/*                 elem.html('<a class="continue">Больше...</a>');*/
/*             }*/
/*         }*/
/* */
/*         $('.in-more').click(function(){*/
/*             var id=this.id;*/
/*             var elem = $(this);*/
/*             more(id,elem);*/
/*         });*/
/* */
/*     </script>*/
/* */
/*     <script>*/
/*         $('#add-posts').click(function(){*/
/*             var number_posts = $('.post_box').length;*/
/*             //console.log(number_posts);*/
/*             $.post('/common/addposts/' + (number_posts-1), function (content) {*/
/*                 $('#posts-wrapper').append(content);*/
/*                 hideFull();*/
/*                 showShort();*/
/*                 $('.in-more').each(function(){*/
/*                     $(this).unbind('click');*/
/*                 });*/
/*                 $('.in-more').click(function(){*/
/*                     var id=this.id;*/
/*                     var elem = $(this);*/
/*                     more(id,elem);*/
/*                 });*/
/*             });*/
/*         });*/
/* */
/* */
/* */
/*         $("a.fb_group").fancybox();*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
