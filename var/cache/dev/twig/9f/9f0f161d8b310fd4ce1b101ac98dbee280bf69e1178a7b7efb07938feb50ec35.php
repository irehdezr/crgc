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
        $__internal_8fcea78b8bfa95828801407280130b95ecf11bfcda27fb8dd7889daf1e6777dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcea78b8bfa95828801407280130b95ecf11bfcda27fb8dd7889daf1e6777dd->enter($__internal_8fcea78b8bfa95828801407280130b95ecf11bfcda27fb8dd7889daf1e6777dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_7f567c18d8ffbf35abb4953d21e2bd1350b486aa694882fc53380cf9cbd6f9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f567c18d8ffbf35abb4953d21e2bd1350b486aa694882fc53380cf9cbd6f9a5->enter($__internal_7f567c18d8ffbf35abb4953d21e2bd1350b486aa694882fc53380cf9cbd6f9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fcea78b8bfa95828801407280130b95ecf11bfcda27fb8dd7889daf1e6777dd->leave($__internal_8fcea78b8bfa95828801407280130b95ecf11bfcda27fb8dd7889daf1e6777dd_prof);

        
        $__internal_7f567c18d8ffbf35abb4953d21e2bd1350b486aa694882fc53380cf9cbd6f9a5->leave($__internal_7f567c18d8ffbf35abb4953d21e2bd1350b486aa694882fc53380cf9cbd6f9a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4deda6bcb9fa3657a22732b3d12bd55deef6bec95bbfe7e941bdcfb160cdc11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4deda6bcb9fa3657a22732b3d12bd55deef6bec95bbfe7e941bdcfb160cdc11->enter($__internal_a4deda6bcb9fa3657a22732b3d12bd55deef6bec95bbfe7e941bdcfb160cdc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_21ec90bcb9d0426362af0f454b33bd0198cf223330c865faac1d484bb29a411e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ec90bcb9d0426362af0f454b33bd0198cf223330c865faac1d484bb29a411e->enter($__internal_21ec90bcb9d0426362af0f454b33bd0198cf223330c865faac1d484bb29a411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_21ec90bcb9d0426362af0f454b33bd0198cf223330c865faac1d484bb29a411e->leave($__internal_21ec90bcb9d0426362af0f454b33bd0198cf223330c865faac1d484bb29a411e_prof);

        
        $__internal_a4deda6bcb9fa3657a22732b3d12bd55deef6bec95bbfe7e941bdcfb160cdc11->leave($__internal_a4deda6bcb9fa3657a22732b3d12bd55deef6bec95bbfe7e941bdcfb160cdc11_prof);

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
