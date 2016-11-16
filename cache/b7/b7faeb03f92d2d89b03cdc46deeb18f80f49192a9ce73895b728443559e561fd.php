<?php

/* admin/crud/select_image.html */
class __TwigTemplate_4d3b5f9261cbdd40d92e17045bbce925f9178f50a9706f68cc7f51510b900d9a extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"/css/upload/main.css\" type=\"text/css\" media=\"screen, projection\" />
<script type=\"text/javascript\">

    var open_image = false;
    if ( \$('a').is('#open-images') ) {
        \$('#open-images').click(function(){
            if (!open_image) {
                \$('#open-images').text('Скрыть');
                open_image = true;

                \$('#open-images').after('<div id=\"img-wrap\"><img class=\"preload\" src=\"/img/preload.gif\"/></div>');
                \$('#img-wrap').load('/admin/imglist_select');
            }else{
                \$('#open-images').text('Изображения');
                open_image = false;
                \$('#img-wrap').html('');
            }

        });
    }

</script>";
    }

    public function getTemplateName()
    {
        return "admin/crud/select_image.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <link rel="stylesheet" href="/css/upload/main.css" type="text/css" media="screen, projection" />*/
/* <script type="text/javascript">*/
/* */
/*     var open_image = false;*/
/*     if ( $('a').is('#open-images') ) {*/
/*         $('#open-images').click(function(){*/
/*             if (!open_image) {*/
/*                 $('#open-images').text('Скрыть');*/
/*                 open_image = true;*/
/* */
/*                 $('#open-images').after('<div id="img-wrap"><img class="preload" src="/img/preload.gif"/></div>');*/
/*                 $('#img-wrap').load('/admin/imglist_select');*/
/*             }else{*/
/*                 $('#open-images').text('Изображения');*/
/*                 open_image = false;*/
/*                 $('#img-wrap').html('');*/
/*             }*/
/* */
/*         });*/
/*     }*/
/* */
/* </script>*/
