<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c008b9cf4d005725171f17998be0448d3c92aff890afa77407634b6d9d05bcd6 extends Twig_Template
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
        $__internal_4f0f42817cbcdf35c36aa395c39317b0a3160c30f83e1bbc192155946c0b7b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0f42817cbcdf35c36aa395c39317b0a3160c30f83e1bbc192155946c0b7b91->enter($__internal_4f0f42817cbcdf35c36aa395c39317b0a3160c30f83e1bbc192155946c0b7b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_38b7928baf6595214fd03920ccbb1d871fe831bbf9558cb42c4f6ffa47a69c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b7928baf6595214fd03920ccbb1d871fe831bbf9558cb42c4f6ffa47a69c9c->enter($__internal_38b7928baf6595214fd03920ccbb1d871fe831bbf9558cb42c4f6ffa47a69c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4f0f42817cbcdf35c36aa395c39317b0a3160c30f83e1bbc192155946c0b7b91->leave($__internal_4f0f42817cbcdf35c36aa395c39317b0a3160c30f83e1bbc192155946c0b7b91_prof);

        
        $__internal_38b7928baf6595214fd03920ccbb1d871fe831bbf9558cb42c4f6ffa47a69c9c->leave($__internal_38b7928baf6595214fd03920ccbb1d871fe831bbf9558cb42c4f6ffa47a69c9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
