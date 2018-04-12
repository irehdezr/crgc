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
        $__internal_3c8365b53e1910566a80a9aeb5d8068dff16f0c50cb510022032d473259761fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8365b53e1910566a80a9aeb5d8068dff16f0c50cb510022032d473259761fc->enter($__internal_3c8365b53e1910566a80a9aeb5d8068dff16f0c50cb510022032d473259761fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2de1908d601c1127131cebea59153a8c26e3bb9867fdcc100b85568bd807bd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de1908d601c1127131cebea59153a8c26e3bb9867fdcc100b85568bd807bd6b->enter($__internal_2de1908d601c1127131cebea59153a8c26e3bb9867fdcc100b85568bd807bd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3c8365b53e1910566a80a9aeb5d8068dff16f0c50cb510022032d473259761fc->leave($__internal_3c8365b53e1910566a80a9aeb5d8068dff16f0c50cb510022032d473259761fc_prof);

        
        $__internal_2de1908d601c1127131cebea59153a8c26e3bb9867fdcc100b85568bd807bd6b->leave($__internal_2de1908d601c1127131cebea59153a8c26e3bb9867fdcc100b85568bd807bd6b_prof);

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
