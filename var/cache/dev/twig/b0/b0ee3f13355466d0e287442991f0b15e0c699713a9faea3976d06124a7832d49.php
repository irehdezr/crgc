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
        $__internal_442ca850176b5bf6c08590d163e8b39bba0888f3ca69a24d906a56baf30f31fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442ca850176b5bf6c08590d163e8b39bba0888f3ca69a24d906a56baf30f31fd->enter($__internal_442ca850176b5bf6c08590d163e8b39bba0888f3ca69a24d906a56baf30f31fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_6af55e0e9fe64ff0960a419efda8a06ea6f1d16b5143c10110bcfd845d0d1c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af55e0e9fe64ff0960a419efda8a06ea6f1d16b5143c10110bcfd845d0d1c5e->enter($__internal_6af55e0e9fe64ff0960a419efda8a06ea6f1d16b5143c10110bcfd845d0d1c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_442ca850176b5bf6c08590d163e8b39bba0888f3ca69a24d906a56baf30f31fd->leave($__internal_442ca850176b5bf6c08590d163e8b39bba0888f3ca69a24d906a56baf30f31fd_prof);

        
        $__internal_6af55e0e9fe64ff0960a419efda8a06ea6f1d16b5143c10110bcfd845d0d1c5e->leave($__internal_6af55e0e9fe64ff0960a419efda8a06ea6f1d16b5143c10110bcfd845d0d1c5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad521f77b34f6dacd33a87b408fd369fdd61a62d559b174ff87097e54e9af234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad521f77b34f6dacd33a87b408fd369fdd61a62d559b174ff87097e54e9af234->enter($__internal_ad521f77b34f6dacd33a87b408fd369fdd61a62d559b174ff87097e54e9af234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d13094f698d047461f81ef377fa82e7afc38d798d40ac20288329f7f883de02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13094f698d047461f81ef377fa82e7afc38d798d40ac20288329f7f883de02f->enter($__internal_d13094f698d047461f81ef377fa82e7afc38d798d40ac20288329f7f883de02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d13094f698d047461f81ef377fa82e7afc38d798d40ac20288329f7f883de02f->leave($__internal_d13094f698d047461f81ef377fa82e7afc38d798d40ac20288329f7f883de02f_prof);

        
        $__internal_ad521f77b34f6dacd33a87b408fd369fdd61a62d559b174ff87097e54e9af234->leave($__internal_ad521f77b34f6dacd33a87b408fd369fdd61a62d559b174ff87097e54e9af234_prof);

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
