<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2f990e7c4cb71bb48aeb801a3b1c503a4328eb671333616f9dea022878a68d3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a15652ef8b8b0c2dba199f614487dd2dee77bbfbb72a082d2af5397f8422c63 = $this->env->getExtension("native_profiler");
        $__internal_5a15652ef8b8b0c2dba199f614487dd2dee77bbfbb72a082d2af5397f8422c63->enter($__internal_5a15652ef8b8b0c2dba199f614487dd2dee77bbfbb72a082d2af5397f8422c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a15652ef8b8b0c2dba199f614487dd2dee77bbfbb72a082d2af5397f8422c63->leave($__internal_5a15652ef8b8b0c2dba199f614487dd2dee77bbfbb72a082d2af5397f8422c63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30afc72ace8381ba7427600958bd60a17f0e0e262da75718fd4982c2dbbaf3ad = $this->env->getExtension("native_profiler");
        $__internal_30afc72ace8381ba7427600958bd60a17f0e0e262da75718fd4982c2dbbaf3ad->enter($__internal_30afc72ace8381ba7427600958bd60a17f0e0e262da75718fd4982c2dbbaf3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30afc72ace8381ba7427600958bd60a17f0e0e262da75718fd4982c2dbbaf3ad->leave($__internal_30afc72ace8381ba7427600958bd60a17f0e0e262da75718fd4982c2dbbaf3ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff8c808039ff4295e111bba048c97280470ce48e077925245601ce17ebb1b866 = $this->env->getExtension("native_profiler");
        $__internal_ff8c808039ff4295e111bba048c97280470ce48e077925245601ce17ebb1b866->enter($__internal_ff8c808039ff4295e111bba048c97280470ce48e077925245601ce17ebb1b866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff8c808039ff4295e111bba048c97280470ce48e077925245601ce17ebb1b866->leave($__internal_ff8c808039ff4295e111bba048c97280470ce48e077925245601ce17ebb1b866_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45bdf508c4e9b8326a6820d37a0eba1452700d736c86d06b3e75a246a72c027f = $this->env->getExtension("native_profiler");
        $__internal_45bdf508c4e9b8326a6820d37a0eba1452700d736c86d06b3e75a246a72c027f->enter($__internal_45bdf508c4e9b8326a6820d37a0eba1452700d736c86d06b3e75a246a72c027f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45bdf508c4e9b8326a6820d37a0eba1452700d736c86d06b3e75a246a72c027f->leave($__internal_45bdf508c4e9b8326a6820d37a0eba1452700d736c86d06b3e75a246a72c027f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
