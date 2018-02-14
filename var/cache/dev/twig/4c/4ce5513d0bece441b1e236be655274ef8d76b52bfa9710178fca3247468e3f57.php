<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ecba8608aa67d9ce27a85ddce596a026bc26033c825ca7992f8898d704e20d2c extends Twig_Template
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
        $__internal_1444e4c4d771ce51bb2245435030e459ba7d101423ad9675e0771f67bd070542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1444e4c4d771ce51bb2245435030e459ba7d101423ad9675e0771f67bd070542->enter($__internal_1444e4c4d771ce51bb2245435030e459ba7d101423ad9675e0771f67bd070542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3f43304667124c326105ddb68d49519dde4b456d35693400d7a8d81e253718dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f43304667124c326105ddb68d49519dde4b456d35693400d7a8d81e253718dd->enter($__internal_3f43304667124c326105ddb68d49519dde4b456d35693400d7a8d81e253718dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_1444e4c4d771ce51bb2245435030e459ba7d101423ad9675e0771f67bd070542->leave($__internal_1444e4c4d771ce51bb2245435030e459ba7d101423ad9675e0771f67bd070542_prof);

        
        $__internal_3f43304667124c326105ddb68d49519dde4b456d35693400d7a8d81e253718dd->leave($__internal_3f43304667124c326105ddb68d49519dde4b456d35693400d7a8d81e253718dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
