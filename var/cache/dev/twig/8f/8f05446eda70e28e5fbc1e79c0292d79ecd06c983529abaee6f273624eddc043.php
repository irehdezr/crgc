<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_13981e59ca324c1201389f4a6fc7edb355696ca0478e710ae1eb948bca3fe6f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_911250984b67fea9f2d2c7a1ca5d660f9710390b44fb66a74f1aa298a05afa78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911250984b67fea9f2d2c7a1ca5d660f9710390b44fb66a74f1aa298a05afa78->enter($__internal_911250984b67fea9f2d2c7a1ca5d660f9710390b44fb66a74f1aa298a05afa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_9b5af1ce498c76070cfb5d0c7e7f7b2dcac394956d380023bbf679dbd7468d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5af1ce498c76070cfb5d0c7e7f7b2dcac394956d380023bbf679dbd7468d72->enter($__internal_9b5af1ce498c76070cfb5d0c7e7f7b2dcac394956d380023bbf679dbd7468d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_911250984b67fea9f2d2c7a1ca5d660f9710390b44fb66a74f1aa298a05afa78->leave($__internal_911250984b67fea9f2d2c7a1ca5d660f9710390b44fb66a74f1aa298a05afa78_prof);

        
        $__internal_9b5af1ce498c76070cfb5d0c7e7f7b2dcac394956d380023bbf679dbd7468d72->leave($__internal_9b5af1ce498c76070cfb5d0c7e7f7b2dcac394956d380023bbf679dbd7468d72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
