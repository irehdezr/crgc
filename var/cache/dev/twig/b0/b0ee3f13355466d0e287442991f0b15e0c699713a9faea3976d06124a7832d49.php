<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_924e7dbf2e3c6aad4764faa9cc456b4e7378281f43eee6b858457b4a3341d996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_5d80f6500b769c40a7a3db1cef794476cdbd9d61557a4f68dab9b7aef2db102e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d80f6500b769c40a7a3db1cef794476cdbd9d61557a4f68dab9b7aef2db102e->enter($__internal_5d80f6500b769c40a7a3db1cef794476cdbd9d61557a4f68dab9b7aef2db102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_af16af6f16c21684fb64bd63ae5276980e561cb8d0c8886908969216f13a6660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af16af6f16c21684fb64bd63ae5276980e561cb8d0c8886908969216f13a6660->enter($__internal_af16af6f16c21684fb64bd63ae5276980e561cb8d0c8886908969216f13a6660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d80f6500b769c40a7a3db1cef794476cdbd9d61557a4f68dab9b7aef2db102e->leave($__internal_5d80f6500b769c40a7a3db1cef794476cdbd9d61557a4f68dab9b7aef2db102e_prof);

        
        $__internal_af16af6f16c21684fb64bd63ae5276980e561cb8d0c8886908969216f13a6660->leave($__internal_af16af6f16c21684fb64bd63ae5276980e561cb8d0c8886908969216f13a6660_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a2d91239ba576de9002d0ebb107507953137e8328a371cb45fd0940155d261e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2d91239ba576de9002d0ebb107507953137e8328a371cb45fd0940155d261e->enter($__internal_7a2d91239ba576de9002d0ebb107507953137e8328a371cb45fd0940155d261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0bf1e32a828f7c6266e6617ad15e8125fae8ca3ef13c0bed7c18fb78323ccd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf1e32a828f7c6266e6617ad15e8125fae8ca3ef13c0bed7c18fb78323ccd10->enter($__internal_0bf1e32a828f7c6266e6617ad15e8125fae8ca3ef13c0bed7c18fb78323ccd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0bf1e32a828f7c6266e6617ad15e8125fae8ca3ef13c0bed7c18fb78323ccd10->leave($__internal_0bf1e32a828f7c6266e6617ad15e8125fae8ca3ef13c0bed7c18fb78323ccd10_prof);

        
        $__internal_7a2d91239ba576de9002d0ebb107507953137e8328a371cb45fd0940155d261e->leave($__internal_7a2d91239ba576de9002d0ebb107507953137e8328a371cb45fd0940155d261e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
