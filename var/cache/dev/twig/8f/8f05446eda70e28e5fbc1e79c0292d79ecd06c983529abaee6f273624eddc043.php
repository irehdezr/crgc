<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_13981e59ca324c1201389f4a6fc7edb355696ca0478e710ae1eb948bca3fe6f1 extends Twig_Template
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
        $__internal_526624332e0a30065b67e52c706b15ab7ed20e839dc2d045b4284ec1bd510a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526624332e0a30065b67e52c706b15ab7ed20e839dc2d045b4284ec1bd510a05->enter($__internal_526624332e0a30065b67e52c706b15ab7ed20e839dc2d045b4284ec1bd510a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_385f3b498d3447838b756723eafa369d542de72550cd7dbb1eba96d9223a47c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385f3b498d3447838b756723eafa369d542de72550cd7dbb1eba96d9223a47c8->enter($__internal_385f3b498d3447838b756723eafa369d542de72550cd7dbb1eba96d9223a47c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_526624332e0a30065b67e52c706b15ab7ed20e839dc2d045b4284ec1bd510a05->leave($__internal_526624332e0a30065b67e52c706b15ab7ed20e839dc2d045b4284ec1bd510a05_prof);

        
        $__internal_385f3b498d3447838b756723eafa369d542de72550cd7dbb1eba96d9223a47c8->leave($__internal_385f3b498d3447838b756723eafa369d542de72550cd7dbb1eba96d9223a47c8_prof);

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
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
