<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_db36eecc4a4f7c16689bafa37af4743135e1bb72350c3d4c006e3f845c424f6e extends Twig_Template
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
        $__internal_3324eb579afa5d2bb257ab09bc36095891161310ab254fb052019aa85b56fcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3324eb579afa5d2bb257ab09bc36095891161310ab254fb052019aa85b56fcb0->enter($__internal_3324eb579afa5d2bb257ab09bc36095891161310ab254fb052019aa85b56fcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ffe9d34ff6373b804fd4767b3e61a42dec320a8fb80cc6af6b3b56c235bed377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe9d34ff6373b804fd4767b3e61a42dec320a8fb80cc6af6b3b56c235bed377->enter($__internal_ffe9d34ff6373b804fd4767b3e61a42dec320a8fb80cc6af6b3b56c235bed377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_3324eb579afa5d2bb257ab09bc36095891161310ab254fb052019aa85b56fcb0->leave($__internal_3324eb579afa5d2bb257ab09bc36095891161310ab254fb052019aa85b56fcb0_prof);

        
        $__internal_ffe9d34ff6373b804fd4767b3e61a42dec320a8fb80cc6af6b3b56c235bed377->leave($__internal_ffe9d34ff6373b804fd4767b3e61a42dec320a8fb80cc6af6b3b56c235bed377_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
