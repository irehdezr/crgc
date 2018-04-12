<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5df74de392d6ad3fe920ff4270cd90f4c6ea6f9ed63bae8141e55e47b72445a0 extends Twig_Template
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
        $__internal_e3b8f71f39bc49e1077093a0a60817ad9071ad1aa5256592f40f3ffa77fc7330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b8f71f39bc49e1077093a0a60817ad9071ad1aa5256592f40f3ffa77fc7330->enter($__internal_e3b8f71f39bc49e1077093a0a60817ad9071ad1aa5256592f40f3ffa77fc7330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_3f8c0bd660198b37f2758158af1665d65bc369971a3283ca745921ab93d680ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8c0bd660198b37f2758158af1665d65bc369971a3283ca745921ab93d680ad->enter($__internal_3f8c0bd660198b37f2758158af1665d65bc369971a3283ca745921ab93d680ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_e3b8f71f39bc49e1077093a0a60817ad9071ad1aa5256592f40f3ffa77fc7330->leave($__internal_e3b8f71f39bc49e1077093a0a60817ad9071ad1aa5256592f40f3ffa77fc7330_prof);

        
        $__internal_3f8c0bd660198b37f2758158af1665d65bc369971a3283ca745921ab93d680ad->leave($__internal_3f8c0bd660198b37f2758158af1665d65bc369971a3283ca745921ab93d680ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
