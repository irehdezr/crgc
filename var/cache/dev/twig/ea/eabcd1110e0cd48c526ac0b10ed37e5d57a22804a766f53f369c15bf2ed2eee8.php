<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d269a9fd0694e09a40acbc4302ea4c97be030326a0d3b0de075ac046f7c3245f extends Twig_Template
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
        $__internal_a6d4d0a6938cad943c70e782d329502c3598f8abfe5e9d066c095a17b5dbcb09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d4d0a6938cad943c70e782d329502c3598f8abfe5e9d066c095a17b5dbcb09->enter($__internal_a6d4d0a6938cad943c70e782d329502c3598f8abfe5e9d066c095a17b5dbcb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e8c6d49b03397703a448058d75066f9bcf8e2b54c2c8a0c51e602de765b25b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c6d49b03397703a448058d75066f9bcf8e2b54c2c8a0c51e602de765b25b50->enter($__internal_e8c6d49b03397703a448058d75066f9bcf8e2b54c2c8a0c51e602de765b25b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a6d4d0a6938cad943c70e782d329502c3598f8abfe5e9d066c095a17b5dbcb09->leave($__internal_a6d4d0a6938cad943c70e782d329502c3598f8abfe5e9d066c095a17b5dbcb09_prof);

        
        $__internal_e8c6d49b03397703a448058d75066f9bcf8e2b54c2c8a0c51e602de765b25b50->leave($__internal_e8c6d49b03397703a448058d75066f9bcf8e2b54c2c8a0c51e602de765b25b50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
