<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e1f0502a4a58c42374cf6dc5ab4c057e238e6a0ab357ce8e170e821fa7313066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_f5f206e0ba940148d8305d22725f577abcb7e2069713a9a161c4d9c6efebbf43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f206e0ba940148d8305d22725f577abcb7e2069713a9a161c4d9c6efebbf43->enter($__internal_f5f206e0ba940148d8305d22725f577abcb7e2069713a9a161c4d9c6efebbf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2d2da1c39ab0a582ea760a54b3fba3e493fb572140be87a63a37be8971c510ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2da1c39ab0a582ea760a54b3fba3e493fb572140be87a63a37be8971c510ad->enter($__internal_2d2da1c39ab0a582ea760a54b3fba3e493fb572140be87a63a37be8971c510ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5f206e0ba940148d8305d22725f577abcb7e2069713a9a161c4d9c6efebbf43->leave($__internal_f5f206e0ba940148d8305d22725f577abcb7e2069713a9a161c4d9c6efebbf43_prof);

        
        $__internal_2d2da1c39ab0a582ea760a54b3fba3e493fb572140be87a63a37be8971c510ad->leave($__internal_2d2da1c39ab0a582ea760a54b3fba3e493fb572140be87a63a37be8971c510ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1db48ca9ed8ffd720f869bffb15698f0e05b5513205a5598f94d366a25f68ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1db48ca9ed8ffd720f869bffb15698f0e05b5513205a5598f94d366a25f68ff->enter($__internal_e1db48ca9ed8ffd720f869bffb15698f0e05b5513205a5598f94d366a25f68ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0fe41d44ab832b46c57007c148cfa7d16fec8b67046025c8815bbcd6443765b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe41d44ab832b46c57007c148cfa7d16fec8b67046025c8815bbcd6443765b0->enter($__internal_0fe41d44ab832b46c57007c148cfa7d16fec8b67046025c8815bbcd6443765b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0fe41d44ab832b46c57007c148cfa7d16fec8b67046025c8815bbcd6443765b0->leave($__internal_0fe41d44ab832b46c57007c148cfa7d16fec8b67046025c8815bbcd6443765b0_prof);

        
        $__internal_e1db48ca9ed8ffd720f869bffb15698f0e05b5513205a5598f94d366a25f68ff->leave($__internal_e1db48ca9ed8ffd720f869bffb15698f0e05b5513205a5598f94d366a25f68ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_973b8dd0d01533c79ee46a93d3b5f8681fdd4e04fbdceb7b72ed9740945b4898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973b8dd0d01533c79ee46a93d3b5f8681fdd4e04fbdceb7b72ed9740945b4898->enter($__internal_973b8dd0d01533c79ee46a93d3b5f8681fdd4e04fbdceb7b72ed9740945b4898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_113f8f96a2f8b9f9126417f40bb5d85198d08b87b4be9f04d3f4ca0d20f2e053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113f8f96a2f8b9f9126417f40bb5d85198d08b87b4be9f04d3f4ca0d20f2e053->enter($__internal_113f8f96a2f8b9f9126417f40bb5d85198d08b87b4be9f04d3f4ca0d20f2e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_113f8f96a2f8b9f9126417f40bb5d85198d08b87b4be9f04d3f4ca0d20f2e053->leave($__internal_113f8f96a2f8b9f9126417f40bb5d85198d08b87b4be9f04d3f4ca0d20f2e053_prof);

        
        $__internal_973b8dd0d01533c79ee46a93d3b5f8681fdd4e04fbdceb7b72ed9740945b4898->leave($__internal_973b8dd0d01533c79ee46a93d3b5f8681fdd4e04fbdceb7b72ed9740945b4898_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
