<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7f379c43fd25e6aa569dfb7bd92b64b0eb1b9f2002822bccd7b26e332432159f extends Twig_Template
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
        $__internal_f4cfddb8bf2922841be4c3addc79bc0be88db575257332309504ebfaf2223be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cfddb8bf2922841be4c3addc79bc0be88db575257332309504ebfaf2223be5->enter($__internal_f4cfddb8bf2922841be4c3addc79bc0be88db575257332309504ebfaf2223be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b508fba66780d6f07433f37181bde8cfea73600752c8dce1a73da905cfd27aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b508fba66780d6f07433f37181bde8cfea73600752c8dce1a73da905cfd27aef->enter($__internal_b508fba66780d6f07433f37181bde8cfea73600752c8dce1a73da905cfd27aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cfddb8bf2922841be4c3addc79bc0be88db575257332309504ebfaf2223be5->leave($__internal_f4cfddb8bf2922841be4c3addc79bc0be88db575257332309504ebfaf2223be5_prof);

        
        $__internal_b508fba66780d6f07433f37181bde8cfea73600752c8dce1a73da905cfd27aef->leave($__internal_b508fba66780d6f07433f37181bde8cfea73600752c8dce1a73da905cfd27aef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_095a93ef15b1182a52bb846a8b91a0058c4a183c9582b9334aab12448f5ba4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095a93ef15b1182a52bb846a8b91a0058c4a183c9582b9334aab12448f5ba4d8->enter($__internal_095a93ef15b1182a52bb846a8b91a0058c4a183c9582b9334aab12448f5ba4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc0e4e2b330b218165ef88d73a3454fb5f6b177bade4ff088294ad86ee9b1c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0e4e2b330b218165ef88d73a3454fb5f6b177bade4ff088294ad86ee9b1c98->enter($__internal_dc0e4e2b330b218165ef88d73a3454fb5f6b177bade4ff088294ad86ee9b1c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_dc0e4e2b330b218165ef88d73a3454fb5f6b177bade4ff088294ad86ee9b1c98->leave($__internal_dc0e4e2b330b218165ef88d73a3454fb5f6b177bade4ff088294ad86ee9b1c98_prof);

        
        $__internal_095a93ef15b1182a52bb846a8b91a0058c4a183c9582b9334aab12448f5ba4d8->leave($__internal_095a93ef15b1182a52bb846a8b91a0058c4a183c9582b9334aab12448f5ba4d8_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\Programacion\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
