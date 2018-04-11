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
        $__internal_c605ce4b87a6fc08067462dcca9568d03f01486a8fd43d17809d267f783bd51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c605ce4b87a6fc08067462dcca9568d03f01486a8fd43d17809d267f783bd51a->enter($__internal_c605ce4b87a6fc08067462dcca9568d03f01486a8fd43d17809d267f783bd51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bb79f2f25dcb559c38ef1ec5b715efa01e30cd7bf4e1d97519d3b785bd1fd460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb79f2f25dcb559c38ef1ec5b715efa01e30cd7bf4e1d97519d3b785bd1fd460->enter($__internal_bb79f2f25dcb559c38ef1ec5b715efa01e30cd7bf4e1d97519d3b785bd1fd460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c605ce4b87a6fc08067462dcca9568d03f01486a8fd43d17809d267f783bd51a->leave($__internal_c605ce4b87a6fc08067462dcca9568d03f01486a8fd43d17809d267f783bd51a_prof);

        
        $__internal_bb79f2f25dcb559c38ef1ec5b715efa01e30cd7bf4e1d97519d3b785bd1fd460->leave($__internal_bb79f2f25dcb559c38ef1ec5b715efa01e30cd7bf4e1d97519d3b785bd1fd460_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ccfffc5497245cb219fafc3cb96cd4b84836f8ff260778cf4c8e4134d1750d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfffc5497245cb219fafc3cb96cd4b84836f8ff260778cf4c8e4134d1750d88->enter($__internal_ccfffc5497245cb219fafc3cb96cd4b84836f8ff260778cf4c8e4134d1750d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3d4b03b4a53939ca604966cb82976ff7cf790a1b8d2bcff12820cb6edb495b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4b03b4a53939ca604966cb82976ff7cf790a1b8d2bcff12820cb6edb495b71->enter($__internal_3d4b03b4a53939ca604966cb82976ff7cf790a1b8d2bcff12820cb6edb495b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3d4b03b4a53939ca604966cb82976ff7cf790a1b8d2bcff12820cb6edb495b71->leave($__internal_3d4b03b4a53939ca604966cb82976ff7cf790a1b8d2bcff12820cb6edb495b71_prof);

        
        $__internal_ccfffc5497245cb219fafc3cb96cd4b84836f8ff260778cf4c8e4134d1750d88->leave($__internal_ccfffc5497245cb219fafc3cb96cd4b84836f8ff260778cf4c8e4134d1750d88_prof);

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
