<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d269a9fd0694e09a40acbc4302ea4c97be030326a0d3b0de075ac046f7c3245f extends Twig_Template
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
        $__internal_466203e476110415a6717e995127855bc59c8bdbfa23e28a0022813872f82b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466203e476110415a6717e995127855bc59c8bdbfa23e28a0022813872f82b64->enter($__internal_466203e476110415a6717e995127855bc59c8bdbfa23e28a0022813872f82b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c9073d960f32e7b3d28cf68ec5e11dd5fb1e6eccbd5baf8185815b7713750885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9073d960f32e7b3d28cf68ec5e11dd5fb1e6eccbd5baf8185815b7713750885->enter($__internal_c9073d960f32e7b3d28cf68ec5e11dd5fb1e6eccbd5baf8185815b7713750885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_466203e476110415a6717e995127855bc59c8bdbfa23e28a0022813872f82b64->leave($__internal_466203e476110415a6717e995127855bc59c8bdbfa23e28a0022813872f82b64_prof);

        
        $__internal_c9073d960f32e7b3d28cf68ec5e11dd5fb1e6eccbd5baf8185815b7713750885->leave($__internal_c9073d960f32e7b3d28cf68ec5e11dd5fb1e6eccbd5baf8185815b7713750885_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
