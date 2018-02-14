<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ee8dec220c9e81eb721b43ce20d740a4db08306ea2389a9a620d35c75cf7eecb extends Twig_Template
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
        $__internal_19bbcc9f29ed780f5b736d985d14ea87f617ad2b181ad12f517576b89480abda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bbcc9f29ed780f5b736d985d14ea87f617ad2b181ad12f517576b89480abda->enter($__internal_19bbcc9f29ed780f5b736d985d14ea87f617ad2b181ad12f517576b89480abda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a5488a401f47e09449fbd44540226def8b52f5b0c5475581441d023a2fa59700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5488a401f47e09449fbd44540226def8b52f5b0c5475581441d023a2fa59700->enter($__internal_a5488a401f47e09449fbd44540226def8b52f5b0c5475581441d023a2fa59700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_19bbcc9f29ed780f5b736d985d14ea87f617ad2b181ad12f517576b89480abda->leave($__internal_19bbcc9f29ed780f5b736d985d14ea87f617ad2b181ad12f517576b89480abda_prof);

        
        $__internal_a5488a401f47e09449fbd44540226def8b52f5b0c5475581441d023a2fa59700->leave($__internal_a5488a401f47e09449fbd44540226def8b52f5b0c5475581441d023a2fa59700_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
