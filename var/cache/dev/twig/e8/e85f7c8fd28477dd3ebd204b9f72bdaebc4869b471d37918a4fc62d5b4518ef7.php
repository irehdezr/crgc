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
        $__internal_0439cc3327ca00d15c2b1d24c38c04ed127cc70c90ed11ab89841895b6a06d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0439cc3327ca00d15c2b1d24c38c04ed127cc70c90ed11ab89841895b6a06d2e->enter($__internal_0439cc3327ca00d15c2b1d24c38c04ed127cc70c90ed11ab89841895b6a06d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_539f70c56738bb205ac5458d7a8936aea116374ee1aa7a582456c5a3a32c4465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539f70c56738bb205ac5458d7a8936aea116374ee1aa7a582456c5a3a32c4465->enter($__internal_539f70c56738bb205ac5458d7a8936aea116374ee1aa7a582456c5a3a32c4465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_0439cc3327ca00d15c2b1d24c38c04ed127cc70c90ed11ab89841895b6a06d2e->leave($__internal_0439cc3327ca00d15c2b1d24c38c04ed127cc70c90ed11ab89841895b6a06d2e_prof);

        
        $__internal_539f70c56738bb205ac5458d7a8936aea116374ee1aa7a582456c5a3a32c4465->leave($__internal_539f70c56738bb205ac5458d7a8936aea116374ee1aa7a582456c5a3a32c4465_prof);

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
