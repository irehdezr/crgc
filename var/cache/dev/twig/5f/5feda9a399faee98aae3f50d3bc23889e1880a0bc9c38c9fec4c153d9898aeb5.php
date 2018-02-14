<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7701d846070a06c08bde27c9301a8c05ce6eb695c7dbf5481a3c2e1ffbf95a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_c6e440f917253261d6932499e79c6bac60c0de7276f8bf35903cb13477b0d66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e440f917253261d6932499e79c6bac60c0de7276f8bf35903cb13477b0d66b->enter($__internal_c6e440f917253261d6932499e79c6bac60c0de7276f8bf35903cb13477b0d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5a6e2b13e79e804d27417b87be722c9e2fbb27edb3d484c07e139cec9d58c4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6e2b13e79e804d27417b87be722c9e2fbb27edb3d484c07e139cec9d58c4b2->enter($__internal_5a6e2b13e79e804d27417b87be722c9e2fbb27edb3d484c07e139cec9d58c4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e440f917253261d6932499e79c6bac60c0de7276f8bf35903cb13477b0d66b->leave($__internal_c6e440f917253261d6932499e79c6bac60c0de7276f8bf35903cb13477b0d66b_prof);

        
        $__internal_5a6e2b13e79e804d27417b87be722c9e2fbb27edb3d484c07e139cec9d58c4b2->leave($__internal_5a6e2b13e79e804d27417b87be722c9e2fbb27edb3d484c07e139cec9d58c4b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ecb84cca6524686024a5d91dc1d70b441dfb8806330ae94ed5bec23dc8c915b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecb84cca6524686024a5d91dc1d70b441dfb8806330ae94ed5bec23dc8c915b->enter($__internal_6ecb84cca6524686024a5d91dc1d70b441dfb8806330ae94ed5bec23dc8c915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_708f1a20f67e870dd49549d8970061e88d1c00020537253ba1dbe92b6bd683c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708f1a20f67e870dd49549d8970061e88d1c00020537253ba1dbe92b6bd683c7->enter($__internal_708f1a20f67e870dd49549d8970061e88d1c00020537253ba1dbe92b6bd683c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_708f1a20f67e870dd49549d8970061e88d1c00020537253ba1dbe92b6bd683c7->leave($__internal_708f1a20f67e870dd49549d8970061e88d1c00020537253ba1dbe92b6bd683c7_prof);

        
        $__internal_6ecb84cca6524686024a5d91dc1d70b441dfb8806330ae94ed5bec23dc8c915b->leave($__internal_6ecb84cca6524686024a5d91dc1d70b441dfb8806330ae94ed5bec23dc8c915b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68c2881d65cf5e15bbd18ecb0337a83bcf97d7a0b6f30c97a26b36d53c032930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c2881d65cf5e15bbd18ecb0337a83bcf97d7a0b6f30c97a26b36d53c032930->enter($__internal_68c2881d65cf5e15bbd18ecb0337a83bcf97d7a0b6f30c97a26b36d53c032930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ba6865b263c6597abefac76d70c6d80d796a1e0485b3caaa42f07e5fa7ffaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba6865b263c6597abefac76d70c6d80d796a1e0485b3caaa42f07e5fa7ffaf4->enter($__internal_3ba6865b263c6597abefac76d70c6d80d796a1e0485b3caaa42f07e5fa7ffaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3ba6865b263c6597abefac76d70c6d80d796a1e0485b3caaa42f07e5fa7ffaf4->leave($__internal_3ba6865b263c6597abefac76d70c6d80d796a1e0485b3caaa42f07e5fa7ffaf4_prof);

        
        $__internal_68c2881d65cf5e15bbd18ecb0337a83bcf97d7a0b6f30c97a26b36d53c032930->leave($__internal_68c2881d65cf5e15bbd18ecb0337a83bcf97d7a0b6f30c97a26b36d53c032930_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94cc8580a0b306a8290d9d83b6e354195928009c84b4991da54e2ef3c2f53be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cc8580a0b306a8290d9d83b6e354195928009c84b4991da54e2ef3c2f53be0->enter($__internal_94cc8580a0b306a8290d9d83b6e354195928009c84b4991da54e2ef3c2f53be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c86ccb9648d8ab23365113f9ee173dd6b1b9e1a215187d7695c4abb5785b6009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86ccb9648d8ab23365113f9ee173dd6b1b9e1a215187d7695c4abb5785b6009->enter($__internal_c86ccb9648d8ab23365113f9ee173dd6b1b9e1a215187d7695c4abb5785b6009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c86ccb9648d8ab23365113f9ee173dd6b1b9e1a215187d7695c4abb5785b6009->leave($__internal_c86ccb9648d8ab23365113f9ee173dd6b1b9e1a215187d7695c4abb5785b6009_prof);

        
        $__internal_94cc8580a0b306a8290d9d83b6e354195928009c84b4991da54e2ef3c2f53be0->leave($__internal_94cc8580a0b306a8290d9d83b6e354195928009c84b4991da54e2ef3c2f53be0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
