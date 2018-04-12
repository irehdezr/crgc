<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a023d5d55a48a44bb3b1be30b4786cdf8fc2d9f7628e71e78f0ea35f1f5696ad extends Twig_Template
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
        $__internal_3ced0eb9ecacc05b8448df0fe7240af50086845572b6955f198ca34019bba736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ced0eb9ecacc05b8448df0fe7240af50086845572b6955f198ca34019bba736->enter($__internal_3ced0eb9ecacc05b8448df0fe7240af50086845572b6955f198ca34019bba736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_68f3e1033b4a39e551af47bb95017ed1b4530da67e101d088c65df403ecfa30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f3e1033b4a39e551af47bb95017ed1b4530da67e101d088c65df403ecfa30d->enter($__internal_68f3e1033b4a39e551af47bb95017ed1b4530da67e101d088c65df403ecfa30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3ced0eb9ecacc05b8448df0fe7240af50086845572b6955f198ca34019bba736->leave($__internal_3ced0eb9ecacc05b8448df0fe7240af50086845572b6955f198ca34019bba736_prof);

        
        $__internal_68f3e1033b4a39e551af47bb95017ed1b4530da67e101d088c65df403ecfa30d->leave($__internal_68f3e1033b4a39e551af47bb95017ed1b4530da67e101d088c65df403ecfa30d_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
