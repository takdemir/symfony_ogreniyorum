<?php

/* AppBundle::index.html.twig */
class __TwigTemplate_1529c0d072f7be1452930720583eb36f20b760f927ab1c46a900aeb37daff09f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2e37506c19846004c97b171e8dcc2dfffee5155d7204602c4ed9a9172da0bc4 = $this->env->getExtension("native_profiler");
        $__internal_d2e37506c19846004c97b171e8dcc2dfffee5155d7204602c4ed9a9172da0bc4->enter($__internal_d2e37506c19846004c97b171e8dcc2dfffee5155d7204602c4ed9a9172da0bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2e37506c19846004c97b171e8dcc2dfffee5155d7204602c4ed9a9172da0bc4->leave($__internal_d2e37506c19846004c97b171e8dcc2dfffee5155d7204602c4ed9a9172da0bc4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c1d3db0b97f1bbbfdc0c0eeaeec073cf8d8df8e3cf7721104a17d39e7e3e04 = $this->env->getExtension("native_profiler");
        $__internal_a3c1d3db0b97f1bbbfdc0c0eeaeec073cf8d8df8e3cf7721104a17d39e7e3e04->enter($__internal_a3c1d3db0b97f1bbbfdc0c0eeaeec073cf8d8df8e3cf7721104a17d39e7e3e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container-fluid\" style=\"margin-top: 150px;\">

        <div class=\"col-lg-4 col-md-3 col-sm-2\"></div>

        <div class=\"col-lg-4 col-md-3 col-sm-2\">

            Anasayfa

        </div>


        <div class=\"col-lg-4 col-md-3 col-sm-2\"></div>

    </div>

";
        
        $__internal_a3c1d3db0b97f1bbbfdc0c0eeaeec073cf8d8df8e3cf7721104a17d39e7e3e04->leave($__internal_a3c1d3db0b97f1bbbfdc0c0eeaeec073cf8d8df8e3cf7721104a17d39e7e3e04_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container-fluid" style="margin-top: 150px;">*/
/* */
/*         <div class="col-lg-4 col-md-3 col-sm-2"></div>*/
/* */
/*         <div class="col-lg-4 col-md-3 col-sm-2">*/
/* */
/*             Anasayfa*/
/* */
/*         </div>*/
/* */
/* */
/*         <div class="col-lg-4 col-md-3 col-sm-2"></div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
