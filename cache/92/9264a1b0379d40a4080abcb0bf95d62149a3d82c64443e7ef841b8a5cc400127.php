<?php

/* auth/layout.html */
class __TwigTemplate_066e2f31ddff8e3dc937f89a44258c96dc50cfa133d1c162ec0620783415b703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bottom_js' => array($this, 'block_bottom_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta http-equiv=\"Cache-Control\" content=\"no-cache\">
    <link rel=\"icon\" href=\"favicon.ico\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/js/jquery-ui-1.11.4.custom/jquery-ui.min.css\" rel=\"stylesheet\">
    <link href=\"/js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css\" rel=\"stylesheet\">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href=\"/bootstarp/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">-->

    <!-- Custom styles for this template -->
    <link href=\"/bootstrap/css/navbar.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"/bootstrap/js/ie-emulation-modes-warning.js\"></script>
    <script type=\"text/javascript\" src=\"/js/jquery-1.11.0.min.js\"></script>
    <script type=\"text/javascript\" src=\"/js/jquery-ui-1.11.4.custom/jquery-ui.min.js\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<div class=\"container\">



    <!-- Main component for a primary marketing message or call to action -->
    <div class=\"jumbotron\">

        ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
    </div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>-->
<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"/bootstrap/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"/bootstrap/js/ie10-viewport-bug-workaround.js\"></script>
<script type=\"text/javascript\" src=\"/js/app.js\"></script>
";
        // line 63
        $this->displayBlock('bottom_js', $context, $blocks);
        // line 64
        echo "</body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 63
    public function block_bottom_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "auth/layout.html";
    }

    public function getDebugInfo()
    {
        return array (  111 => 63,  105 => 47,  100 => 13,  94 => 64,  92 => 63,  75 => 48,  73 => 47,  36 => 13,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <meta http-equiv="Cache-Control" content="no-cache">*/
/*     <link rel="icon" href="favicon.ico">*/
/* */
/*     <title>{% block title%}{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="/js/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet">*/
/*     <link href="/js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css" rel="stylesheet">*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <!--<link href="/bootstarp/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="/bootstrap/css/navbar.css" rel="stylesheet">*/
/* */
/*     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*     <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/*     <script src="/bootstrap/js/ie-emulation-modes-warning.js"></script>*/
/*     <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>*/
/*     <script type="text/javascript" src="/js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div class="container">*/
/* */
/* */
/* */
/*     <!-- Main component for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/* */
/*         {% block content %} {% endblock %}*/
/* */
/*     </div>*/
/* */
/* </div> <!-- /container -->*/
/* */
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->*/
/* <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/* <script src="/bootstrap/js/bootstrap.min.js"></script>*/
/* <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/* <script src="/bootstrap/js/ie10-viewport-bug-workaround.js"></script>*/
/* <script type="text/javascript" src="/js/app.js"></script>*/
/* {% block bottom_js%}{%endblock%}*/
/* </body>*/
/* </html>*/
/* */
