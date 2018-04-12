<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_35a4f6eebb00f29ad13f99b9d19115bba66adea15cae8069cd6eeb8785d99add extends Twig_Template
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
        $__internal_0d46d5b32fc583338257a90f9378680fa33e85d0b88179fbf07aec2989a40a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d46d5b32fc583338257a90f9378680fa33e85d0b88179fbf07aec2989a40a73->enter($__internal_0d46d5b32fc583338257a90f9378680fa33e85d0b88179fbf07aec2989a40a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f9dd63a6a698884eeaed9c406ea2f0588faf4519204c47106b5ad0280d939fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9dd63a6a698884eeaed9c406ea2f0588faf4519204c47106b5ad0280d939fc8->enter($__internal_f9dd63a6a698884eeaed9c406ea2f0588faf4519204c47106b5ad0280d939fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_0d46d5b32fc583338257a90f9378680fa33e85d0b88179fbf07aec2989a40a73->leave($__internal_0d46d5b32fc583338257a90f9378680fa33e85d0b88179fbf07aec2989a40a73_prof);

        
        $__internal_f9dd63a6a698884eeaed9c406ea2f0588faf4519204c47106b5ad0280d939fc8->leave($__internal_f9dd63a6a698884eeaed9c406ea2f0588faf4519204c47106b5ad0280d939fc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
