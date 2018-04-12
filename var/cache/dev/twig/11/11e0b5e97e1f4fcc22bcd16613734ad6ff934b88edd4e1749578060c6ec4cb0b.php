<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4f7456d0c839f07644480a5954981ca5441f37c6ffb5d0491a77b7df4d3462ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9462ade57a8d913496082f2421f87354b0dfd2590b7ebda42abcb5d38d41c215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9462ade57a8d913496082f2421f87354b0dfd2590b7ebda42abcb5d38d41c215->enter($__internal_9462ade57a8d913496082f2421f87354b0dfd2590b7ebda42abcb5d38d41c215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a46d9f31b3c01551c5ccf657ade278811b34e3a3a10a2a12adcb1cfa7d648395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46d9f31b3c01551c5ccf657ade278811b34e3a3a10a2a12adcb1cfa7d648395->enter($__internal_a46d9f31b3c01551c5ccf657ade278811b34e3a3a10a2a12adcb1cfa7d648395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9462ade57a8d913496082f2421f87354b0dfd2590b7ebda42abcb5d38d41c215->leave($__internal_9462ade57a8d913496082f2421f87354b0dfd2590b7ebda42abcb5d38d41c215_prof);

        
        $__internal_a46d9f31b3c01551c5ccf657ade278811b34e3a3a10a2a12adcb1cfa7d648395->leave($__internal_a46d9f31b3c01551c5ccf657ade278811b34e3a3a10a2a12adcb1cfa7d648395_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21d827f5433c4b5de39b791371b3ff76e118a4374bbde00bc92b9994a37430f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d827f5433c4b5de39b791371b3ff76e118a4374bbde00bc92b9994a37430f0->enter($__internal_21d827f5433c4b5de39b791371b3ff76e118a4374bbde00bc92b9994a37430f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f482c7cb9fd6efb094560ab1d1fa62855002dd24fabb338489fb967ecc1909c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f482c7cb9fd6efb094560ab1d1fa62855002dd24fabb338489fb967ecc1909c4->enter($__internal_f482c7cb9fd6efb094560ab1d1fa62855002dd24fabb338489fb967ecc1909c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f482c7cb9fd6efb094560ab1d1fa62855002dd24fabb338489fb967ecc1909c4->leave($__internal_f482c7cb9fd6efb094560ab1d1fa62855002dd24fabb338489fb967ecc1909c4_prof);

        
        $__internal_21d827f5433c4b5de39b791371b3ff76e118a4374bbde00bc92b9994a37430f0->leave($__internal_21d827f5433c4b5de39b791371b3ff76e118a4374bbde00bc92b9994a37430f0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a4d8cab6bdb072e8c9b38101d6bada6a96f0850c5c54e507af965a1957d7ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4d8cab6bdb072e8c9b38101d6bada6a96f0850c5c54e507af965a1957d7ebb->enter($__internal_1a4d8cab6bdb072e8c9b38101d6bada6a96f0850c5c54e507af965a1957d7ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b603972907d309f2d6546bfa565b4c9eaae66b7daec107c92c789516e604470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b603972907d309f2d6546bfa565b4c9eaae66b7daec107c92c789516e604470->enter($__internal_8b603972907d309f2d6546bfa565b4c9eaae66b7daec107c92c789516e604470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8b603972907d309f2d6546bfa565b4c9eaae66b7daec107c92c789516e604470->leave($__internal_8b603972907d309f2d6546bfa565b4c9eaae66b7daec107c92c789516e604470_prof);

        
        $__internal_1a4d8cab6bdb072e8c9b38101d6bada6a96f0850c5c54e507af965a1957d7ebb->leave($__internal_1a4d8cab6bdb072e8c9b38101d6bada6a96f0850c5c54e507af965a1957d7ebb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
