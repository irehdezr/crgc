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
        $__internal_2e236a159a68c453207349f0332924ac7da65aeff7bad701fc32bb1c7c6efcbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e236a159a68c453207349f0332924ac7da65aeff7bad701fc32bb1c7c6efcbe->enter($__internal_2e236a159a68c453207349f0332924ac7da65aeff7bad701fc32bb1c7c6efcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f3e620ea3f5ba35d5f5a4b4f55bb1227bf449f67714d204f11379c4e0c1424ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e620ea3f5ba35d5f5a4b4f55bb1227bf449f67714d204f11379c4e0c1424ff->enter($__internal_f3e620ea3f5ba35d5f5a4b4f55bb1227bf449f67714d204f11379c4e0c1424ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_2e236a159a68c453207349f0332924ac7da65aeff7bad701fc32bb1c7c6efcbe->leave($__internal_2e236a159a68c453207349f0332924ac7da65aeff7bad701fc32bb1c7c6efcbe_prof);

        
        $__internal_f3e620ea3f5ba35d5f5a4b4f55bb1227bf449f67714d204f11379c4e0c1424ff->leave($__internal_f3e620ea3f5ba35d5f5a4b4f55bb1227bf449f67714d204f11379c4e0c1424ff_prof);

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
