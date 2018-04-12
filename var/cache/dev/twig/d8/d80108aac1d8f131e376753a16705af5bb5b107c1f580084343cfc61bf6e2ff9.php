<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_afd3bb2041986bca00a4a1c3df1f222f57508376574c8ac865b10fdb0c4d94d0 extends Twig_Template
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
        $__internal_1dcfd12032e0e0987ee5fb6a254f9f2fa042a3b9a6eb68864835befaa3519bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dcfd12032e0e0987ee5fb6a254f9f2fa042a3b9a6eb68864835befaa3519bd8->enter($__internal_1dcfd12032e0e0987ee5fb6a254f9f2fa042a3b9a6eb68864835befaa3519bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_233641a3c550e820dcde87d28d08fe9237d7af1993ab297191cd9e149f8dc474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233641a3c550e820dcde87d28d08fe9237d7af1993ab297191cd9e149f8dc474->enter($__internal_233641a3c550e820dcde87d28d08fe9237d7af1993ab297191cd9e149f8dc474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1dcfd12032e0e0987ee5fb6a254f9f2fa042a3b9a6eb68864835befaa3519bd8->leave($__internal_1dcfd12032e0e0987ee5fb6a254f9f2fa042a3b9a6eb68864835befaa3519bd8_prof);

        
        $__internal_233641a3c550e820dcde87d28d08fe9237d7af1993ab297191cd9e149f8dc474->leave($__internal_233641a3c550e820dcde87d28d08fe9237d7af1993ab297191cd9e149f8dc474_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
