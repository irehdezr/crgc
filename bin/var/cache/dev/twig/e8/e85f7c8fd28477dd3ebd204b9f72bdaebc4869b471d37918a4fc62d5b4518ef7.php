<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_e4ba6b381596c2328a65df666d8edf8e8b5e593be2abf9ed03b95c9c92162bd2 extends Twig_Template
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
        $__internal_d8759a244e6f4d313d8237168eed5dd54e9ae882c974d5e9ae6c8cc31b27bbbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8759a244e6f4d313d8237168eed5dd54e9ae882c974d5e9ae6c8cc31b27bbbe->enter($__internal_d8759a244e6f4d313d8237168eed5dd54e9ae882c974d5e9ae6c8cc31b27bbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_72115b2c9c90e74c098765eaafdc545964551771d4ad82acac99fb0d2e6a7008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72115b2c9c90e74c098765eaafdc545964551771d4ad82acac99fb0d2e6a7008->enter($__internal_72115b2c9c90e74c098765eaafdc545964551771d4ad82acac99fb0d2e6a7008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d8759a244e6f4d313d8237168eed5dd54e9ae882c974d5e9ae6c8cc31b27bbbe->leave($__internal_d8759a244e6f4d313d8237168eed5dd54e9ae882c974d5e9ae6c8cc31b27bbbe_prof);

        
        $__internal_72115b2c9c90e74c098765eaafdc545964551771d4ad82acac99fb0d2e6a7008->leave($__internal_72115b2c9c90e74c098765eaafdc545964551771d4ad82acac99fb0d2e6a7008_prof);

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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
