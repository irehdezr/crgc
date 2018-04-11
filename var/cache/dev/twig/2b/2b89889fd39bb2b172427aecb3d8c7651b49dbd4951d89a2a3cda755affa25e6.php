<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a4bf7e0f4de9190509bfaa6a46f8260a56370d48ef8100314cd0ac3f13b214c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20f81eef0ed5101f7256f7882c55d564f28114854bd496d5c7daeb1e156989f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f81eef0ed5101f7256f7882c55d564f28114854bd496d5c7daeb1e156989f5->enter($__internal_20f81eef0ed5101f7256f7882c55d564f28114854bd496d5c7daeb1e156989f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d4f2864478fa02d4faf34c7212c43b2bf87f31f111de8e4fe8334285413d5a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f2864478fa02d4faf34c7212c43b2bf87f31f111de8e4fe8334285413d5a3a->enter($__internal_d4f2864478fa02d4faf34c7212c43b2bf87f31f111de8e4fe8334285413d5a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20f81eef0ed5101f7256f7882c55d564f28114854bd496d5c7daeb1e156989f5->leave($__internal_20f81eef0ed5101f7256f7882c55d564f28114854bd496d5c7daeb1e156989f5_prof);

        
        $__internal_d4f2864478fa02d4faf34c7212c43b2bf87f31f111de8e4fe8334285413d5a3a->leave($__internal_d4f2864478fa02d4faf34c7212c43b2bf87f31f111de8e4fe8334285413d5a3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c0b7eb4cc1af22726f8bda7bf13ead8a239903874ce1a3e0d7d8031c2f6dfbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0b7eb4cc1af22726f8bda7bf13ead8a239903874ce1a3e0d7d8031c2f6dfbe->enter($__internal_8c0b7eb4cc1af22726f8bda7bf13ead8a239903874ce1a3e0d7d8031c2f6dfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92e1407c1de19dbee1bf4bb92a17825d8b7b7104f741fb1716c08b5544e0175b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e1407c1de19dbee1bf4bb92a17825d8b7b7104f741fb1716c08b5544e0175b->enter($__internal_92e1407c1de19dbee1bf4bb92a17825d8b7b7104f741fb1716c08b5544e0175b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_92e1407c1de19dbee1bf4bb92a17825d8b7b7104f741fb1716c08b5544e0175b->leave($__internal_92e1407c1de19dbee1bf4bb92a17825d8b7b7104f741fb1716c08b5544e0175b_prof);

        
        $__internal_8c0b7eb4cc1af22726f8bda7bf13ead8a239903874ce1a3e0d7d8031c2f6dfbe->leave($__internal_8c0b7eb4cc1af22726f8bda7bf13ead8a239903874ce1a3e0d7d8031c2f6dfbe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
