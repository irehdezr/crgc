<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_31a41ff7b52c865f040729fbf1797045237098e74c4f69677c8b81ee6a2287a5 extends Twig_Template
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
        $__internal_95edb7727caaa33eaa2a27c89054fde26b3ecbff2fdd499a0d0e889b60723140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95edb7727caaa33eaa2a27c89054fde26b3ecbff2fdd499a0d0e889b60723140->enter($__internal_95edb7727caaa33eaa2a27c89054fde26b3ecbff2fdd499a0d0e889b60723140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_8c82ee84e12fb8126aa29284b6db6089916014741811879178887a89c3b1be77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c82ee84e12fb8126aa29284b6db6089916014741811879178887a89c3b1be77->enter($__internal_8c82ee84e12fb8126aa29284b6db6089916014741811879178887a89c3b1be77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95edb7727caaa33eaa2a27c89054fde26b3ecbff2fdd499a0d0e889b60723140->leave($__internal_95edb7727caaa33eaa2a27c89054fde26b3ecbff2fdd499a0d0e889b60723140_prof);

        
        $__internal_8c82ee84e12fb8126aa29284b6db6089916014741811879178887a89c3b1be77->leave($__internal_8c82ee84e12fb8126aa29284b6db6089916014741811879178887a89c3b1be77_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f9b22df2a3b8c26e2a0f4067fa9709fbd682bbe9786db1d84c9ddf22b71a4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9b22df2a3b8c26e2a0f4067fa9709fbd682bbe9786db1d84c9ddf22b71a4d5->enter($__internal_8f9b22df2a3b8c26e2a0f4067fa9709fbd682bbe9786db1d84c9ddf22b71a4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad94120898bbeefea6cfc3a7a8010a362035ddca8e21e26b89462a98b667c816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad94120898bbeefea6cfc3a7a8010a362035ddca8e21e26b89462a98b667c816->enter($__internal_ad94120898bbeefea6cfc3a7a8010a362035ddca8e21e26b89462a98b667c816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ad94120898bbeefea6cfc3a7a8010a362035ddca8e21e26b89462a98b667c816->leave($__internal_ad94120898bbeefea6cfc3a7a8010a362035ddca8e21e26b89462a98b667c816_prof);

        
        $__internal_8f9b22df2a3b8c26e2a0f4067fa9709fbd682bbe9786db1d84c9ddf22b71a4d5->leave($__internal_8f9b22df2a3b8c26e2a0f4067fa9709fbd682bbe9786db1d84c9ddf22b71a4d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3b1b549a23d7461d47204b31d4b9a29fd3c5d3acfa408fcac21d5e937d9f5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b1b549a23d7461d47204b31d4b9a29fd3c5d3acfa408fcac21d5e937d9f5b0->enter($__internal_b3b1b549a23d7461d47204b31d4b9a29fd3c5d3acfa408fcac21d5e937d9f5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b3a8c1979f3da93c2675fc0392ba1a43ac5a89f8661314176404b2f1b4255b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3a8c1979f3da93c2675fc0392ba1a43ac5a89f8661314176404b2f1b4255b1->enter($__internal_2b3a8c1979f3da93c2675fc0392ba1a43ac5a89f8661314176404b2f1b4255b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2b3a8c1979f3da93c2675fc0392ba1a43ac5a89f8661314176404b2f1b4255b1->leave($__internal_2b3a8c1979f3da93c2675fc0392ba1a43ac5a89f8661314176404b2f1b4255b1_prof);

        
        $__internal_b3b1b549a23d7461d47204b31d4b9a29fd3c5d3acfa408fcac21d5e937d9f5b0->leave($__internal_b3b1b549a23d7461d47204b31d4b9a29fd3c5d3acfa408fcac21d5e937d9f5b0_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
