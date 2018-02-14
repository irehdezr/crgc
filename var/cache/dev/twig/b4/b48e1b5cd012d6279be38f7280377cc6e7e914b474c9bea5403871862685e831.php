<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3e73e3958e098a360b483a081aa8e84a36db30c161913c7c987b5442b368ee94 extends Twig_Template
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
        $__internal_31b8d675b2df9e278e81f6a24374a179e0af0b0a2d5dbb218f46b60696d7f755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b8d675b2df9e278e81f6a24374a179e0af0b0a2d5dbb218f46b60696d7f755->enter($__internal_31b8d675b2df9e278e81f6a24374a179e0af0b0a2d5dbb218f46b60696d7f755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_769042e88388a19a152d81a1447217193f09d18ef6868f04ac46ff66d346773a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769042e88388a19a152d81a1447217193f09d18ef6868f04ac46ff66d346773a->enter($__internal_769042e88388a19a152d81a1447217193f09d18ef6868f04ac46ff66d346773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b8d675b2df9e278e81f6a24374a179e0af0b0a2d5dbb218f46b60696d7f755->leave($__internal_31b8d675b2df9e278e81f6a24374a179e0af0b0a2d5dbb218f46b60696d7f755_prof);

        
        $__internal_769042e88388a19a152d81a1447217193f09d18ef6868f04ac46ff66d346773a->leave($__internal_769042e88388a19a152d81a1447217193f09d18ef6868f04ac46ff66d346773a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_88a4a2ee9e1ae873b78d87c2aaf2686114d83b89b99594ae708b2042a3b18eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a4a2ee9e1ae873b78d87c2aaf2686114d83b89b99594ae708b2042a3b18eb6->enter($__internal_88a4a2ee9e1ae873b78d87c2aaf2686114d83b89b99594ae708b2042a3b18eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c3969845925b551d1f027429c1474a3489b258a28ff05ac769cc92ac6f8cc1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3969845925b551d1f027429c1474a3489b258a28ff05ac769cc92ac6f8cc1eb->enter($__internal_c3969845925b551d1f027429c1474a3489b258a28ff05ac769cc92ac6f8cc1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c3969845925b551d1f027429c1474a3489b258a28ff05ac769cc92ac6f8cc1eb->leave($__internal_c3969845925b551d1f027429c1474a3489b258a28ff05ac769cc92ac6f8cc1eb_prof);

        
        $__internal_88a4a2ee9e1ae873b78d87c2aaf2686114d83b89b99594ae708b2042a3b18eb6->leave($__internal_88a4a2ee9e1ae873b78d87c2aaf2686114d83b89b99594ae708b2042a3b18eb6_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
