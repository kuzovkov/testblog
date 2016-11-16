<?php

/* admin/crud/simple_upload_form.html */
class __TwigTemplate_ac76752d5dbc7fc24c72191ff327d7ce0feccc10a449dda88a2c7185de14a5e4 extends Twig_Template
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
<form method=\"post\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "upload_url", array()), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
    <div class=\"login-form\">
        <div class=\"form-group\">
            <label for=\"file\">Файлы изображения</label>
            <input id=\"file\" type=\"file\" class=\"form-control\" name=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "field_name", array()), "html", null, true);
        echo "[]\" multiple placeholder=\"Файл изображения\">
        </div>
        <button type=\"submit\" id=\"login-btn\" class=\"btn btn-default\">Загрузить</button>
    </div>
</form>

<div class=\"img-wrap\">
    <h5>Загруженные изображения</h5>
    <div id=\"show-images\"><img class=\"preload\" src=\"/img/preload.gif\"/></div>
</div>
<script>

    function showImages(){
        \$('#show-images').load('/admin/imglist');
    }

    showImages();
    showImages();

</script>
";
    }

    public function getTemplateName()
    {
        return "admin/crud/simple_upload_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <link rel="stylesheet" href="/css/upload/main.css" type="text/css" media="screen, projection" />*/
/* <form method="post" action="{{data.upload_url}}" enctype="multipart/form-data">*/
/*     <div class="login-form">*/
/*         <div class="form-group">*/
/*             <label for="file">Файлы изображения</label>*/
/*             <input id="file" type="file" class="form-control" name="{{data.field_name}}[]" multiple placeholder="Файл изображения">*/
/*         </div>*/
/*         <button type="submit" id="login-btn" class="btn btn-default">Загрузить</button>*/
/*     </div>*/
/* </form>*/
/* */
/* <div class="img-wrap">*/
/*     <h5>Загруженные изображения</h5>*/
/*     <div id="show-images"><img class="preload" src="/img/preload.gif"/></div>*/
/* </div>*/
/* <script>*/
/* */
/*     function showImages(){*/
/*         $('#show-images').load('/admin/imglist');*/
/*     }*/
/* */
/*     showImages();*/
/*     showImages();*/
/* */
/* </script>*/
/* */
