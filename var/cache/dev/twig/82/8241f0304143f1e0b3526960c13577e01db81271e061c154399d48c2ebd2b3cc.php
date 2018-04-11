<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_83c55445f5166154f4650febd205f0ce91e7ced303aec4a947f06e1e4666a601 extends Twig_Template
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
        $__internal_88a6bda0a4360619d5f334024b80bf237f2e8a98c1154fc9ac7a12723e558dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a6bda0a4360619d5f334024b80bf237f2e8a98c1154fc9ac7a12723e558dd4->enter($__internal_88a6bda0a4360619d5f334024b80bf237f2e8a98c1154fc9ac7a12723e558dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_0968e1b491c953e5b485ab7e654ea7dfb51d2df42b89fb1c9f15617121bbc1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0968e1b491c953e5b485ab7e654ea7dfb51d2df42b89fb1c9f15617121bbc1b8->enter($__internal_0968e1b491c953e5b485ab7e654ea7dfb51d2df42b89fb1c9f15617121bbc1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_88a6bda0a4360619d5f334024b80bf237f2e8a98c1154fc9ac7a12723e558dd4->leave($__internal_88a6bda0a4360619d5f334024b80bf237f2e8a98c1154fc9ac7a12723e558dd4_prof);

        
        $__internal_0968e1b491c953e5b485ab7e654ea7dfb51d2df42b89fb1c9f15617121bbc1b8->leave($__internal_0968e1b491c953e5b485ab7e654ea7dfb51d2df42b89fb1c9f15617121bbc1b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
