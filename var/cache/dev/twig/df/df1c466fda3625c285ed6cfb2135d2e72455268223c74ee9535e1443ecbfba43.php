<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b4e9d03206a1e42bc753a625267560cd607166f70095dbf4190e5f9d65199640 extends Twig_Template
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
        $__internal_3dfb43ce92d9b0904381723ea55c428857c9463b4a573ced3c9c7dadf3c3cd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfb43ce92d9b0904381723ea55c428857c9463b4a573ced3c9c7dadf3c3cd3e->enter($__internal_3dfb43ce92d9b0904381723ea55c428857c9463b4a573ced3c9c7dadf3c3cd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8adb37c086fdccd0a95e04c87b2b6f6687e0f2041fd872477857501cf6291092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adb37c086fdccd0a95e04c87b2b6f6687e0f2041fd872477857501cf6291092->enter($__internal_8adb37c086fdccd0a95e04c87b2b6f6687e0f2041fd872477857501cf6291092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_3dfb43ce92d9b0904381723ea55c428857c9463b4a573ced3c9c7dadf3c3cd3e->leave($__internal_3dfb43ce92d9b0904381723ea55c428857c9463b4a573ced3c9c7dadf3c3cd3e_prof);

        
        $__internal_8adb37c086fdccd0a95e04c87b2b6f6687e0f2041fd872477857501cf6291092->leave($__internal_8adb37c086fdccd0a95e04c87b2b6f6687e0f2041fd872477857501cf6291092_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
