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
        $__internal_af3bbb9069d266ede74ea4f61a47fab417394fe0324f6ad9b45598917942a559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3bbb9069d266ede74ea4f61a47fab417394fe0324f6ad9b45598917942a559->enter($__internal_af3bbb9069d266ede74ea4f61a47fab417394fe0324f6ad9b45598917942a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_873bcfe89ad96f8280710a78d09631f927c700b8d998e60a85887c6a30ad995d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873bcfe89ad96f8280710a78d09631f927c700b8d998e60a85887c6a30ad995d->enter($__internal_873bcfe89ad96f8280710a78d09631f927c700b8d998e60a85887c6a30ad995d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3bbb9069d266ede74ea4f61a47fab417394fe0324f6ad9b45598917942a559->leave($__internal_af3bbb9069d266ede74ea4f61a47fab417394fe0324f6ad9b45598917942a559_prof);

        
        $__internal_873bcfe89ad96f8280710a78d09631f927c700b8d998e60a85887c6a30ad995d->leave($__internal_873bcfe89ad96f8280710a78d09631f927c700b8d998e60a85887c6a30ad995d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eda5ed7ef39ad06d2589f1d31e9c88f898a7b6099467df94abece8744b8df679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda5ed7ef39ad06d2589f1d31e9c88f898a7b6099467df94abece8744b8df679->enter($__internal_eda5ed7ef39ad06d2589f1d31e9c88f898a7b6099467df94abece8744b8df679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fbc9584a38136de5a6514c7dbb75445438cc365efc8e7294e0347c8b2d761cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc9584a38136de5a6514c7dbb75445438cc365efc8e7294e0347c8b2d761cd1->enter($__internal_fbc9584a38136de5a6514c7dbb75445438cc365efc8e7294e0347c8b2d761cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fbc9584a38136de5a6514c7dbb75445438cc365efc8e7294e0347c8b2d761cd1->leave($__internal_fbc9584a38136de5a6514c7dbb75445438cc365efc8e7294e0347c8b2d761cd1_prof);

        
        $__internal_eda5ed7ef39ad06d2589f1d31e9c88f898a7b6099467df94abece8744b8df679->leave($__internal_eda5ed7ef39ad06d2589f1d31e9c88f898a7b6099467df94abece8744b8df679_prof);

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
