<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c36fdaaf86ed4de9acc71c8d7fed488d1ef0cd5cb2164522588cdae2735a18d6 extends Twig_Template
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
        $__internal_241b8f308d2f98271a13d58b4c270011d5eae33040ca628d8a2a51b74a02aa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241b8f308d2f98271a13d58b4c270011d5eae33040ca628d8a2a51b74a02aa18->enter($__internal_241b8f308d2f98271a13d58b4c270011d5eae33040ca628d8a2a51b74a02aa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_93db328c3a73db5468f3752dea9a7e45e881b20272dad5c5d536a39b92d282da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93db328c3a73db5468f3752dea9a7e45e881b20272dad5c5d536a39b92d282da->enter($__internal_93db328c3a73db5468f3752dea9a7e45e881b20272dad5c5d536a39b92d282da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_241b8f308d2f98271a13d58b4c270011d5eae33040ca628d8a2a51b74a02aa18->leave($__internal_241b8f308d2f98271a13d58b4c270011d5eae33040ca628d8a2a51b74a02aa18_prof);

        
        $__internal_93db328c3a73db5468f3752dea9a7e45e881b20272dad5c5d536a39b92d282da->leave($__internal_93db328c3a73db5468f3752dea9a7e45e881b20272dad5c5d536a39b92d282da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
