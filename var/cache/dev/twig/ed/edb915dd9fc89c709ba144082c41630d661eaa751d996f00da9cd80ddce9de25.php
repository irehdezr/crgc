<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a023d5d55a48a44bb3b1be30b4786cdf8fc2d9f7628e71e78f0ea35f1f5696ad extends Twig_Template
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
        $__internal_b733efeac414389ab3c05185bdb247f4fdf89c03ba79c80a74b3246cf9ee49b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b733efeac414389ab3c05185bdb247f4fdf89c03ba79c80a74b3246cf9ee49b2->enter($__internal_b733efeac414389ab3c05185bdb247f4fdf89c03ba79c80a74b3246cf9ee49b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_16668820e3873f4ce793455b0d07e2da9a749816e678e5f34a24c8dbce2e0ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16668820e3873f4ce793455b0d07e2da9a749816e678e5f34a24c8dbce2e0ac6->enter($__internal_16668820e3873f4ce793455b0d07e2da9a749816e678e5f34a24c8dbce2e0ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b733efeac414389ab3c05185bdb247f4fdf89c03ba79c80a74b3246cf9ee49b2->leave($__internal_b733efeac414389ab3c05185bdb247f4fdf89c03ba79c80a74b3246cf9ee49b2_prof);

        
        $__internal_16668820e3873f4ce793455b0d07e2da9a749816e678e5f34a24c8dbce2e0ac6->leave($__internal_16668820e3873f4ce793455b0d07e2da9a749816e678e5f34a24c8dbce2e0ac6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
