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
        $__internal_e168b1a64df995371409621f2718d7216dc2d8b11a944c6a8469dcfeb80793e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e168b1a64df995371409621f2718d7216dc2d8b11a944c6a8469dcfeb80793e3->enter($__internal_e168b1a64df995371409621f2718d7216dc2d8b11a944c6a8469dcfeb80793e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6bd7ddbc22723179234fc1543a66d61fd72df9c79d2c75b35a6bc12fab621b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd7ddbc22723179234fc1543a66d61fd72df9c79d2c75b35a6bc12fab621b93->enter($__internal_6bd7ddbc22723179234fc1543a66d61fd72df9c79d2c75b35a6bc12fab621b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e168b1a64df995371409621f2718d7216dc2d8b11a944c6a8469dcfeb80793e3->leave($__internal_e168b1a64df995371409621f2718d7216dc2d8b11a944c6a8469dcfeb80793e3_prof);

        
        $__internal_6bd7ddbc22723179234fc1543a66d61fd72df9c79d2c75b35a6bc12fab621b93->leave($__internal_6bd7ddbc22723179234fc1543a66d61fd72df9c79d2c75b35a6bc12fab621b93_prof);

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
