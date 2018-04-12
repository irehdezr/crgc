<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c8d5de1aba91ec4a8e1b061356717a22816b241513c09e818d770e3317237efc extends Twig_Template
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
        $__internal_116ca23f7a50eec5abe2106018abd646a846fb0a88ab065a72d9dbea7f65e66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116ca23f7a50eec5abe2106018abd646a846fb0a88ab065a72d9dbea7f65e66a->enter($__internal_116ca23f7a50eec5abe2106018abd646a846fb0a88ab065a72d9dbea7f65e66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_45f7b5f65865e5372e98f1a9520ad6a10d1236b1f8aa2566e0143e993cf9c03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f7b5f65865e5372e98f1a9520ad6a10d1236b1f8aa2566e0143e993cf9c03e->enter($__internal_45f7b5f65865e5372e98f1a9520ad6a10d1236b1f8aa2566e0143e993cf9c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_116ca23f7a50eec5abe2106018abd646a846fb0a88ab065a72d9dbea7f65e66a->leave($__internal_116ca23f7a50eec5abe2106018abd646a846fb0a88ab065a72d9dbea7f65e66a_prof);

        
        $__internal_45f7b5f65865e5372e98f1a9520ad6a10d1236b1f8aa2566e0143e993cf9c03e->leave($__internal_45f7b5f65865e5372e98f1a9520ad6a10d1236b1f8aa2566e0143e993cf9c03e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
