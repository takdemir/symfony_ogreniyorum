<?php

/* ::base.html.twig */
class __TwigTemplate_f19c473f6aa1a8f849a74cfa957cc94f6a737488b16db49736ffc0b291d4189e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2dbb40be5f5d24b4b0e230eb16795b7b78bc46229d11f196bcce15b765dbc76 = $this->env->getExtension("native_profiler");
        $__internal_f2dbb40be5f5d24b4b0e230eb16795b7b78bc46229d11f196bcce15b765dbc76->enter($__internal_f2dbb40be5f5d24b4b0e230eb16795b7b78bc46229d11f196bcce15b765dbc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"indexApp\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Assets/css/bootstrap-theme.css/"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Assets/css/bootstrap.css/"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Assets/css/bootstrap.min.css/"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Assets/css/index.css/"), "html", null, true);
        echo "\" />
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body ng-controller=\"indexController\">

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Menü</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Taner Symfony</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">



                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Operasyon</a></li>
                    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Giriş</a></li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>






        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Assets/js/common.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Assets/js/index_angular.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js\"></script>
        <script src=\"https://code.jquery.com/jquery-2.2.3.min.js\"></script>
    </body>

</html>
";
        
        $__internal_f2dbb40be5f5d24b4b0e230eb16795b7b78bc46229d11f196bcce15b765dbc76->leave($__internal_f2dbb40be5f5d24b4b0e230eb16795b7b78bc46229d11f196bcce15b765dbc76_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e0bedcccaa7ead4c31f1660b58efd071a8eff548cb76e654088f8a6c96cb248 = $this->env->getExtension("native_profiler");
        $__internal_8e0bedcccaa7ead4c31f1660b58efd071a8eff548cb76e654088f8a6c96cb248->enter($__internal_8e0bedcccaa7ead4c31f1660b58efd071a8eff548cb76e654088f8a6c96cb248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Denemeleri";
        
        $__internal_8e0bedcccaa7ead4c31f1660b58efd071a8eff548cb76e654088f8a6c96cb248->leave($__internal_8e0bedcccaa7ead4c31f1660b58efd071a8eff548cb76e654088f8a6c96cb248_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cde2edcdd459c4ab4759034aab77133ded0404606e656a381fb7c79192e0f5ce = $this->env->getExtension("native_profiler");
        $__internal_cde2edcdd459c4ab4759034aab77133ded0404606e656a381fb7c79192e0f5ce->enter($__internal_cde2edcdd459c4ab4759034aab77133ded0404606e656a381fb7c79192e0f5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cde2edcdd459c4ab4759034aab77133ded0404606e656a381fb7c79192e0f5ce->leave($__internal_cde2edcdd459c4ab4759034aab77133ded0404606e656a381fb7c79192e0f5ce_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_744d7b60a9106625489a9fe2043ad7ca1ecc71ec564631aaf52cb1a5bbcfddb9 = $this->env->getExtension("native_profiler");
        $__internal_744d7b60a9106625489a9fe2043ad7ca1ecc71ec564631aaf52cb1a5bbcfddb9->enter($__internal_744d7b60a9106625489a9fe2043ad7ca1ecc71ec564631aaf52cb1a5bbcfddb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_744d7b60a9106625489a9fe2043ad7ca1ecc71ec564631aaf52cb1a5bbcfddb9->leave($__internal_744d7b60a9106625489a9fe2043ad7ca1ecc71ec564631aaf52cb1a5bbcfddb9_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8df1d6a262a032927eb476d7dd7b82dba90e10d185b2cc54c014d751ba04c113 = $this->env->getExtension("native_profiler");
        $__internal_8df1d6a262a032927eb476d7dd7b82dba90e10d185b2cc54c014d751ba04c113->enter($__internal_8df1d6a262a032927eb476d7dd7b82dba90e10d185b2cc54c014d751ba04c113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8df1d6a262a032927eb476d7dd7b82dba90e10d185b2cc54c014d751ba04c113->leave($__internal_8df1d6a262a032927eb476d7dd7b82dba90e10d185b2cc54c014d751ba04c113_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 48,  151 => 47,  140 => 10,  128 => 5,  114 => 51,  110 => 50,  105 => 49,  102 => 48,  100 => 47,  85 => 35,  81 => 34,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="indexApp">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Symfony Denemeleri{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset("Assets/css/bootstrap-theme.css/") }}" />*/
/*         <link rel="stylesheet" href="{{ asset("Assets/css/bootstrap.css/") }}" />*/
/*         <link rel="stylesheet" href="{{ asset("Assets/css/bootstrap.min.css/") }}" />*/
/*         <link rel="stylesheet" href="{{ asset("Assets/css/index.css/") }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body ng-controller="indexController">*/
/* */
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">Menü</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">Taner Symfony</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* */
/* */
/* */
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li><a href="{{ path("homepage") }}">Operasyon</a></li>*/
/*                     <li><a href="{{ path("login") }}">Giriş</a></li>*/
/* */
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script src="{{ asset("Assets/js/bootstrap.js") }}"></script>*/
/*         <script src="{{ asset("Assets/js/common.js") }}"></script>*/
/*         <script src="{{ asset("Assets/js/index_angular.js") }}"></script>*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>*/
/*         <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>*/
/*     </body>*/
/* */
/* </html>*/
/* */
