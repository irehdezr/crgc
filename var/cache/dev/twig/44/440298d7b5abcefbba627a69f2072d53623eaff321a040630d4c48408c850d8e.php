<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a096a32f1923cddfdae39df3ad105437b0ed6105bd9361719df0f8c8ef935dce extends Twig_Template
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
        $__internal_395fcef7780bc7c4b96f7e813cfd644b53b7647e6c1e732984cf44e7f2e189a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395fcef7780bc7c4b96f7e813cfd644b53b7647e6c1e732984cf44e7f2e189a6->enter($__internal_395fcef7780bc7c4b96f7e813cfd644b53b7647e6c1e732984cf44e7f2e189a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e400189e0a8b7902901d3ea01da6410d2163fda560e7ac3a06437032ef1d497f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e400189e0a8b7902901d3ea01da6410d2163fda560e7ac3a06437032ef1d497f->enter($__internal_e400189e0a8b7902901d3ea01da6410d2163fda560e7ac3a06437032ef1d497f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_395fcef7780bc7c4b96f7e813cfd644b53b7647e6c1e732984cf44e7f2e189a6->leave($__internal_395fcef7780bc7c4b96f7e813cfd644b53b7647e6c1e732984cf44e7f2e189a6_prof);

        
        $__internal_e400189e0a8b7902901d3ea01da6410d2163fda560e7ac3a06437032ef1d497f->leave($__internal_e400189e0a8b7902901d3ea01da6410d2163fda560e7ac3a06437032ef1d497f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
