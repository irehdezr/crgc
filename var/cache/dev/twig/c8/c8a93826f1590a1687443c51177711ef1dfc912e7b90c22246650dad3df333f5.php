<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0aa104b58749b5c7cea9953382fa5ac1e569e5c50833968e759fbbabebecec39 extends Twig_Template
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
        $__internal_a7cb30303f5e4b0f61f4bb7f9720c37dcae3f9a4055b50c60b89bf39c055a12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7cb30303f5e4b0f61f4bb7f9720c37dcae3f9a4055b50c60b89bf39c055a12d->enter($__internal_a7cb30303f5e4b0f61f4bb7f9720c37dcae3f9a4055b50c60b89bf39c055a12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_53db062cce18501cdd2000a92bf4498d7036e8f45a5e846966a29554a6db0050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53db062cce18501cdd2000a92bf4498d7036e8f45a5e846966a29554a6db0050->enter($__internal_53db062cce18501cdd2000a92bf4498d7036e8f45a5e846966a29554a6db0050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7cb30303f5e4b0f61f4bb7f9720c37dcae3f9a4055b50c60b89bf39c055a12d->leave($__internal_a7cb30303f5e4b0f61f4bb7f9720c37dcae3f9a4055b50c60b89bf39c055a12d_prof);

        
        $__internal_53db062cce18501cdd2000a92bf4498d7036e8f45a5e846966a29554a6db0050->leave($__internal_53db062cce18501cdd2000a92bf4498d7036e8f45a5e846966a29554a6db0050_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9406c69e93f91fc025e99abb533c003d1ba52c367d2ebecb8d074b4a79a84fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9406c69e93f91fc025e99abb533c003d1ba52c367d2ebecb8d074b4a79a84fc3->enter($__internal_9406c69e93f91fc025e99abb533c003d1ba52c367d2ebecb8d074b4a79a84fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7b38010e58bf14995f840851fc305b5dfc46e6be70affe8037110817890e9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b38010e58bf14995f840851fc305b5dfc46e6be70affe8037110817890e9c8->enter($__internal_a7b38010e58bf14995f840851fc305b5dfc46e6be70affe8037110817890e9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a7b38010e58bf14995f840851fc305b5dfc46e6be70affe8037110817890e9c8->leave($__internal_a7b38010e58bf14995f840851fc305b5dfc46e6be70affe8037110817890e9c8_prof);

        
        $__internal_9406c69e93f91fc025e99abb533c003d1ba52c367d2ebecb8d074b4a79a84fc3->leave($__internal_9406c69e93f91fc025e99abb533c003d1ba52c367d2ebecb8d074b4a79a84fc3_prof);

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
