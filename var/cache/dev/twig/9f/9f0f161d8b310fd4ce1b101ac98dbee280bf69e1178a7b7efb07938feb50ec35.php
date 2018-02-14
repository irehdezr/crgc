<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_abc87462cdb0da27ea234d13f2d9de49cb75ca4630bcd821c1d7440470f412ab extends Twig_Template
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
        $__internal_84883b827e2a44d50ecb223b7e899f00c96cedff8abb0a98438cd7b9b0fb3db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84883b827e2a44d50ecb223b7e899f00c96cedff8abb0a98438cd7b9b0fb3db9->enter($__internal_84883b827e2a44d50ecb223b7e899f00c96cedff8abb0a98438cd7b9b0fb3db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d65ee87aa5adcd12cc57aa3e139dabf373819e5209d0416370cf45f6c3ba454f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65ee87aa5adcd12cc57aa3e139dabf373819e5209d0416370cf45f6c3ba454f->enter($__internal_d65ee87aa5adcd12cc57aa3e139dabf373819e5209d0416370cf45f6c3ba454f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84883b827e2a44d50ecb223b7e899f00c96cedff8abb0a98438cd7b9b0fb3db9->leave($__internal_84883b827e2a44d50ecb223b7e899f00c96cedff8abb0a98438cd7b9b0fb3db9_prof);

        
        $__internal_d65ee87aa5adcd12cc57aa3e139dabf373819e5209d0416370cf45f6c3ba454f->leave($__internal_d65ee87aa5adcd12cc57aa3e139dabf373819e5209d0416370cf45f6c3ba454f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f780761bb6ef29f457974c39b89e7bead25ae891d23bdddf33416d341607506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f780761bb6ef29f457974c39b89e7bead25ae891d23bdddf33416d341607506->enter($__internal_6f780761bb6ef29f457974c39b89e7bead25ae891d23bdddf33416d341607506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_195072b0d769a4b56e605f908a5ce2d6c3d1f232beb970408dde6342f90afaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195072b0d769a4b56e605f908a5ce2d6c3d1f232beb970408dde6342f90afaef->enter($__internal_195072b0d769a4b56e605f908a5ce2d6c3d1f232beb970408dde6342f90afaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_195072b0d769a4b56e605f908a5ce2d6c3d1f232beb970408dde6342f90afaef->leave($__internal_195072b0d769a4b56e605f908a5ce2d6c3d1f232beb970408dde6342f90afaef_prof);

        
        $__internal_6f780761bb6ef29f457974c39b89e7bead25ae891d23bdddf33416d341607506->leave($__internal_6f780761bb6ef29f457974c39b89e7bead25ae891d23bdddf33416d341607506_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
