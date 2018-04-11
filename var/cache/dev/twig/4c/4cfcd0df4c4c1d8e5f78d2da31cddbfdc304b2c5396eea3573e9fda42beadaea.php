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
        $__internal_2d5b271908e8c07718939f2d312f9af920a15e93f5abe68690135503247f6dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5b271908e8c07718939f2d312f9af920a15e93f5abe68690135503247f6dfe->enter($__internal_2d5b271908e8c07718939f2d312f9af920a15e93f5abe68690135503247f6dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_10f55f951815124d3e9ee638c9338bd6163bf3c42bd226e27ed8167d03013bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f55f951815124d3e9ee638c9338bd6163bf3c42bd226e27ed8167d03013bfb->enter($__internal_10f55f951815124d3e9ee638c9338bd6163bf3c42bd226e27ed8167d03013bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_2d5b271908e8c07718939f2d312f9af920a15e93f5abe68690135503247f6dfe->leave($__internal_2d5b271908e8c07718939f2d312f9af920a15e93f5abe68690135503247f6dfe_prof);

        
        $__internal_10f55f951815124d3e9ee638c9338bd6163bf3c42bd226e27ed8167d03013bfb->leave($__internal_10f55f951815124d3e9ee638c9338bd6163bf3c42bd226e27ed8167d03013bfb_prof);

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
