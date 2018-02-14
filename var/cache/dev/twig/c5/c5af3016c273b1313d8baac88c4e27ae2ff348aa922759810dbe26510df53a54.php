<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d637f79863cd8b5a594fdcb28eab96a7b85b5b8594466ed615ac717f390e6aa5 extends Twig_Template
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
        $__internal_0f71c57b6339b552f96a93f7854240fc435a4ea1be4b907e96d1144ff693ad19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f71c57b6339b552f96a93f7854240fc435a4ea1be4b907e96d1144ff693ad19->enter($__internal_0f71c57b6339b552f96a93f7854240fc435a4ea1be4b907e96d1144ff693ad19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_391c3e98cb4849969bdf805531b4d4699b25cd52c42e6523784141cfe3c11eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391c3e98cb4849969bdf805531b4d4699b25cd52c42e6523784141cfe3c11eb5->enter($__internal_391c3e98cb4849969bdf805531b4d4699b25cd52c42e6523784141cfe3c11eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0f71c57b6339b552f96a93f7854240fc435a4ea1be4b907e96d1144ff693ad19->leave($__internal_0f71c57b6339b552f96a93f7854240fc435a4ea1be4b907e96d1144ff693ad19_prof);

        
        $__internal_391c3e98cb4849969bdf805531b4d4699b25cd52c42e6523784141cfe3c11eb5->leave($__internal_391c3e98cb4849969bdf805531b4d4699b25cd52c42e6523784141cfe3c11eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
