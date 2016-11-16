<?php

/* admin/layout.html */
class __TwigTemplate_6d5b52080fb70af6f555eda4e9ae7e281a06a33d7e04cab8b153efec17bb63ee extends Twig_Template
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

      <!-- Static navbar -->
      <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/admin\">Admin panel</a>
          </div>
          <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              <li><a href=\"/admin\" id=\"home\"  class=\"menu\">Главная</a></li>
              <!--<li><a href=\"/admin/upload\" id=\"upload\"  class=\"menu\">Изображения</a></li>-->

              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Изображения<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"/admin/upload\" id=\"upload\" class=\"menu\">Загрузка (1 вариант)</a></li>
                  <li><a href=\"/admin/upload2\" id=\"upload2\" class=\"menu\">Загрузка (2 вариант)</a></li>
                  <!--<li role=\"separator\" class=\"divider\"></li>-->
                </ul>
              </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">База данных<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"/admin/backup\" id=\"backup\" class=\"menu\">Скачать дамп БД</a></li>
                          <li><a href=\"/admin/recovery\" id=\"recovery\" class=\"menu\">Залить дамп БД</a></li>
                          <!--<li role=\"separator\" class=\"divider\"></li>-->
                          </li>

                    </ul>



            </ul>
            ";
        // line 80
        $this->loadTemplate("/auth/auth_bar.html", "admin/layout.html", 80)->display($context);
        // line 81
        echo "          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class=\"jumbotron\">
       
        ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
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
        // line 104
        $this->displayBlock('bottom_js', $context, $blocks);
        // line 105
        echo "  </body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 104
    public function block_bottom_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 104,  149 => 88,  144 => 13,  138 => 105,  136 => 104,  119 => 89,  117 => 88,  108 => 81,  106 => 80,  36 => 13,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
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
/*     */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <div class="container">*/
/* */
/*       <!-- Static navbar -->*/
/*       <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*           <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/admin">Admin panel</a>*/
/*           </div>*/
/*           <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*               <li><a href="/admin" id="home"  class="menu">Главная</a></li>*/
/*               <!--<li><a href="/admin/upload" id="upload"  class="menu">Изображения</a></li>-->*/
/* */
/*               <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Изображения<span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li><a href="/admin/upload" id="upload" class="menu">Загрузка (1 вариант)</a></li>*/
/*                   <li><a href="/admin/upload2" id="upload2" class="menu">Загрузка (2 вариант)</a></li>*/
/*                   <!--<li role="separator" class="divider"></li>-->*/
/*                 </ul>*/
/*               </li>*/
/*                       <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">База данных<span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                           <li><a href="/admin/backup" id="backup" class="menu">Скачать дамп БД</a></li>*/
/*                           <li><a href="/admin/recovery" id="recovery" class="menu">Залить дамп БД</a></li>*/
/*                           <!--<li role="separator" class="divider"></li>-->*/
/*                           </li>*/
/* */
/*                     </ul>*/
/* */
/* */
/* */
/*             </ul>*/
/*             {% include '/auth/auth_bar.html' %}*/
/*           </div><!--/.nav-collapse -->*/
/*         </div><!--/.container-fluid -->*/
/*       </nav>*/
/* */
/*       <!-- Main component for a primary marketing message or call to action -->*/
/*       <div class="jumbotron">*/
/*        */
/*         {% block content %} {% endblock %}*/
/* */
/*       </div>*/
/* */
/*     </div> <!-- /container -->*/
/* */
/* */
/*     <!-- Bootstrap core JavaScript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->*/
/*     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/*     <script src="/bootstrap/js/bootstrap.min.js"></script>*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <script src="/bootstrap/js/ie10-viewport-bug-workaround.js"></script>*/
/*     <script type="text/javascript" src="/js/app.js"></script>*/
/*     {% block bottom_js%}{%endblock%}*/
/*   </body>*/
/* </html>*/
/* */
