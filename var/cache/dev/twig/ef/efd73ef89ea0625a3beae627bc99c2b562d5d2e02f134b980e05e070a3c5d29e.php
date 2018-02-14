<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_69f3ff076221599774c74b3380b03a7d5d028ef3da0a1f856172be6625bcad56 extends Twig_Template
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
        $__internal_da0f6d8319686166cec3993e568080d32ac2913b921504f72b871eb9828e0289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0f6d8319686166cec3993e568080d32ac2913b921504f72b871eb9828e0289->enter($__internal_da0f6d8319686166cec3993e568080d32ac2913b921504f72b871eb9828e0289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_db248e0ba6caf55957d6892a138a347fbb8a47c8a518e70118aad61867afec60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db248e0ba6caf55957d6892a138a347fbb8a47c8a518e70118aad61867afec60->enter($__internal_db248e0ba6caf55957d6892a138a347fbb8a47c8a518e70118aad61867afec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_da0f6d8319686166cec3993e568080d32ac2913b921504f72b871eb9828e0289->leave($__internal_da0f6d8319686166cec3993e568080d32ac2913b921504f72b871eb9828e0289_prof);

        
        $__internal_db248e0ba6caf55957d6892a138a347fbb8a47c8a518e70118aad61867afec60->leave($__internal_db248e0ba6caf55957d6892a138a347fbb8a47c8a518e70118aad61867afec60_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
