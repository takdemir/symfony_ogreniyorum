<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2f2af4762422a0cf6cdd1dc78a6e1728c5edc3e22ad945ce4ea8f91b5dd88dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_eac9e05b1f3621ba74ce603ec256b0a713b0f4695a9720dfe5a294c62d76bc35 = $this->env->getExtension("native_profiler");
        $__internal_eac9e05b1f3621ba74ce603ec256b0a713b0f4695a9720dfe5a294c62d76bc35->enter($__internal_eac9e05b1f3621ba74ce603ec256b0a713b0f4695a9720dfe5a294c62d76bc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac9e05b1f3621ba74ce603ec256b0a713b0f4695a9720dfe5a294c62d76bc35->leave($__internal_eac9e05b1f3621ba74ce603ec256b0a713b0f4695a9720dfe5a294c62d76bc35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71d13db76b5ee72f599fe5bc18b6e9c0d46c091b0b00bca40db3cdc6135d817a = $this->env->getExtension("native_profiler");
        $__internal_71d13db76b5ee72f599fe5bc18b6e9c0d46c091b0b00bca40db3cdc6135d817a->enter($__internal_71d13db76b5ee72f599fe5bc18b6e9c0d46c091b0b00bca40db3cdc6135d817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_71d13db76b5ee72f599fe5bc18b6e9c0d46c091b0b00bca40db3cdc6135d817a->leave($__internal_71d13db76b5ee72f599fe5bc18b6e9c0d46c091b0b00bca40db3cdc6135d817a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9107c0d44ecd6356bfe0752873b628e5954d153abd5c097d9b6e5af84c973a42 = $this->env->getExtension("native_profiler");
        $__internal_9107c0d44ecd6356bfe0752873b628e5954d153abd5c097d9b6e5af84c973a42->enter($__internal_9107c0d44ecd6356bfe0752873b628e5954d153abd5c097d9b6e5af84c973a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9107c0d44ecd6356bfe0752873b628e5954d153abd5c097d9b6e5af84c973a42->leave($__internal_9107c0d44ecd6356bfe0752873b628e5954d153abd5c097d9b6e5af84c973a42_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_426cb3df3f6976563475e8aca44c52a49a80306e7cc72c13d6d6605b2d781bc7 = $this->env->getExtension("native_profiler");
        $__internal_426cb3df3f6976563475e8aca44c52a49a80306e7cc72c13d6d6605b2d781bc7->enter($__internal_426cb3df3f6976563475e8aca44c52a49a80306e7cc72c13d6d6605b2d781bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_426cb3df3f6976563475e8aca44c52a49a80306e7cc72c13d6d6605b2d781bc7->leave($__internal_426cb3df3f6976563475e8aca44c52a49a80306e7cc72c13d6d6605b2d781bc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
