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
        $__internal_3833d6610ff538bf70cd8990c0d95a7ad9b110acaf842f8d5dee760e3f7a446d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3833d6610ff538bf70cd8990c0d95a7ad9b110acaf842f8d5dee760e3f7a446d->enter($__internal_3833d6610ff538bf70cd8990c0d95a7ad9b110acaf842f8d5dee760e3f7a446d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d769dcb88a3a4989f460d1d9dadb2d5edee7e84f4817c2b16c886bcea0c6e247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d769dcb88a3a4989f460d1d9dadb2d5edee7e84f4817c2b16c886bcea0c6e247->enter($__internal_d769dcb88a3a4989f460d1d9dadb2d5edee7e84f4817c2b16c886bcea0c6e247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_3833d6610ff538bf70cd8990c0d95a7ad9b110acaf842f8d5dee760e3f7a446d->leave($__internal_3833d6610ff538bf70cd8990c0d95a7ad9b110acaf842f8d5dee760e3f7a446d_prof);

        
        $__internal_d769dcb88a3a4989f460d1d9dadb2d5edee7e84f4817c2b16c886bcea0c6e247->leave($__internal_d769dcb88a3a4989f460d1d9dadb2d5edee7e84f4817c2b16c886bcea0c6e247_prof);

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
