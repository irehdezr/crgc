<?php

/* PageBundle:Default:onDevelopment.html.twig */
class __TwigTemplate_2f61fce2854a2acac630ec19481870fb6b64fb509ddc451d595b41cb8bb97af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "PageBundle:Default:onDevelopment.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_258b59091525b730442ce6a61431d33d8006a57d5a78a0ef64c0c14358e23925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258b59091525b730442ce6a61431d33d8006a57d5a78a0ef64c0c14358e23925->enter($__internal_258b59091525b730442ce6a61431d33d8006a57d5a78a0ef64c0c14358e23925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $__internal_2261048c1fedb7f21e941f36d0b4bdf81445c8ac90c3178d4511030d14b26abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2261048c1fedb7f21e941f36d0b4bdf81445c8ac90c3178d4511030d14b26abb->enter($__internal_2261048c1fedb7f21e941f36d0b4bdf81445c8ac90c3178d4511030d14b26abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PageBundle:Default:onDevelopment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_258b59091525b730442ce6a61431d33d8006a57d5a78a0ef64c0c14358e23925->leave($__internal_258b59091525b730442ce6a61431d33d8006a57d5a78a0ef64c0c14358e23925_prof);

        
        $__internal_2261048c1fedb7f21e941f36d0b4bdf81445c8ac90c3178d4511030d14b26abb->leave($__internal_2261048c1fedb7f21e941f36d0b4bdf81445c8ac90c3178d4511030d14b26abb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d86829bf560739a357931a3ce9e69a7b4ed1b8d54477e0104adc02290ac05786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86829bf560739a357931a3ce9e69a7b4ed1b8d54477e0104adc02290ac05786->enter($__internal_d86829bf560739a357931a3ce9e69a7b4ed1b8d54477e0104adc02290ac05786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6255e06a053743a0eeece170357c8c40a607e720af73f3fc4f51053a264ee8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6255e06a053743a0eeece170357c8c40a607e720af73f3fc4f51053a264ee8d2->enter($__internal_6255e06a053743a0eeece170357c8c40a607e720af73f3fc4f51053a264ee8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "On Development";
        
        $__internal_6255e06a053743a0eeece170357c8c40a607e720af73f3fc4f51053a264ee8d2->leave($__internal_6255e06a053743a0eeece170357c8c40a607e720af73f3fc4f51053a264ee8d2_prof);

        
        $__internal_d86829bf560739a357931a3ce9e69a7b4ed1b8d54477e0104adc02290ac05786->leave($__internal_d86829bf560739a357931a3ce9e69a7b4ed1b8d54477e0104adc02290ac05786_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_05b7b0be4a03bc4ecd5a71e4dabc9baf3e5acffe36c50ae98219ab8af13a8056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b7b0be4a03bc4ecd5a71e4dabc9baf3e5acffe36c50ae98219ab8af13a8056->enter($__internal_05b7b0be4a03bc4ecd5a71e4dabc9baf3e5acffe36c50ae98219ab8af13a8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6ad204eb30472f1863c2d86698a40797829f4ed623629ba42988cdf706df585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ad204eb30472f1863c2d86698a40797829f4ed623629ba42988cdf706df585->enter($__internal_e6ad204eb30472f1863c2d86698a40797829f4ed623629ba42988cdf706df585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main>
\t<center>
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
";
        
        $__internal_e6ad204eb30472f1863c2d86698a40797829f4ed623629ba42988cdf706df585->leave($__internal_e6ad204eb30472f1863c2d86698a40797829f4ed623629ba42988cdf706df585_prof);

        
        $__internal_05b7b0be4a03bc4ecd5a71e4dabc9baf3e5acffe36c50ae98219ab8af13a8056->leave($__internal_05b7b0be4a03bc4ecd5a71e4dabc9baf3e5acffe36c50ae98219ab8af13a8056_prof);

    }

    public function getTemplateName()
    {
        return "PageBundle:Default:onDevelopment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title%}On Development{% endblock %}
{% block body %}
<main>
\t<center>
\t    <h2>
\t        <br/>Oooops...<br/>
\t        This page is under development....
\t    </h2>
    </center>
</main>
{% endblock %}", "PageBundle:Default:onDevelopment.html.twig", "C:\\xampp\\htdocs\\crgc\\src\\PageBundle/Resources/views/Default/onDevelopment.html.twig");
    }
}
