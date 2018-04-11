<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc6674af95a439fdc9d8ca81aed1cfd8c2d3ed2849b6d2bf347a500486741792 extends Twig_Template
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
        $__internal_3fa44b96dce41b35bf57cc4d5aaa45f484e1e16ce1fe30a0127381961cdb787e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa44b96dce41b35bf57cc4d5aaa45f484e1e16ce1fe30a0127381961cdb787e->enter($__internal_3fa44b96dce41b35bf57cc4d5aaa45f484e1e16ce1fe30a0127381961cdb787e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_effb611aac93ca1c9a7fecbe506e857e7cdb0ebaa2cd89d4af3993669fb8c6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effb611aac93ca1c9a7fecbe506e857e7cdb0ebaa2cd89d4af3993669fb8c6d5->enter($__internal_effb611aac93ca1c9a7fecbe506e857e7cdb0ebaa2cd89d4af3993669fb8c6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa44b96dce41b35bf57cc4d5aaa45f484e1e16ce1fe30a0127381961cdb787e->leave($__internal_3fa44b96dce41b35bf57cc4d5aaa45f484e1e16ce1fe30a0127381961cdb787e_prof);

        
        $__internal_effb611aac93ca1c9a7fecbe506e857e7cdb0ebaa2cd89d4af3993669fb8c6d5->leave($__internal_effb611aac93ca1c9a7fecbe506e857e7cdb0ebaa2cd89d4af3993669fb8c6d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78367c88cb2bf6cb199695c2d3c380b6ecbc082d25079af484a9dae3226da015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78367c88cb2bf6cb199695c2d3c380b6ecbc082d25079af484a9dae3226da015->enter($__internal_78367c88cb2bf6cb199695c2d3c380b6ecbc082d25079af484a9dae3226da015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8be50ee1d78a212da67251734ad30a3028c056d9af3a86528548fc1c5f00f705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be50ee1d78a212da67251734ad30a3028c056d9af3a86528548fc1c5f00f705->enter($__internal_8be50ee1d78a212da67251734ad30a3028c056d9af3a86528548fc1c5f00f705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8be50ee1d78a212da67251734ad30a3028c056d9af3a86528548fc1c5f00f705->leave($__internal_8be50ee1d78a212da67251734ad30a3028c056d9af3a86528548fc1c5f00f705_prof);

        
        $__internal_78367c88cb2bf6cb199695c2d3c380b6ecbc082d25079af484a9dae3226da015->leave($__internal_78367c88cb2bf6cb199695c2d3c380b6ecbc082d25079af484a9dae3226da015_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23bbdad7619104637023c98b66392dd94d3e9c8847983e22f96899ea1e2d3470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bbdad7619104637023c98b66392dd94d3e9c8847983e22f96899ea1e2d3470->enter($__internal_23bbdad7619104637023c98b66392dd94d3e9c8847983e22f96899ea1e2d3470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_173ac8f7545f32f6093c3dd0d2c5edf43d2a4b7b67e6be1f2f0e917995b2ea6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173ac8f7545f32f6093c3dd0d2c5edf43d2a4b7b67e6be1f2f0e917995b2ea6e->enter($__internal_173ac8f7545f32f6093c3dd0d2c5edf43d2a4b7b67e6be1f2f0e917995b2ea6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_173ac8f7545f32f6093c3dd0d2c5edf43d2a4b7b67e6be1f2f0e917995b2ea6e->leave($__internal_173ac8f7545f32f6093c3dd0d2c5edf43d2a4b7b67e6be1f2f0e917995b2ea6e_prof);

        
        $__internal_23bbdad7619104637023c98b66392dd94d3e9c8847983e22f96899ea1e2d3470->leave($__internal_23bbdad7619104637023c98b66392dd94d3e9c8847983e22f96899ea1e2d3470_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_300906511b616f3f14cdb9c30f8e71732695d0911b4eb31115b2d45434206662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300906511b616f3f14cdb9c30f8e71732695d0911b4eb31115b2d45434206662->enter($__internal_300906511b616f3f14cdb9c30f8e71732695d0911b4eb31115b2d45434206662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f49d1405f0ac80011fdc651133e6faad9970e268d1d2617f1e57446ea3210279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49d1405f0ac80011fdc651133e6faad9970e268d1d2617f1e57446ea3210279->enter($__internal_f49d1405f0ac80011fdc651133e6faad9970e268d1d2617f1e57446ea3210279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f49d1405f0ac80011fdc651133e6faad9970e268d1d2617f1e57446ea3210279->leave($__internal_f49d1405f0ac80011fdc651133e6faad9970e268d1d2617f1e57446ea3210279_prof);

        
        $__internal_300906511b616f3f14cdb9c30f8e71732695d0911b4eb31115b2d45434206662->leave($__internal_300906511b616f3f14cdb9c30f8e71732695d0911b4eb31115b2d45434206662_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
