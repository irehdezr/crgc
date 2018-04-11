<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f9ba31a8d348f3b0d10a53bcfe9b9d5a412357ae275619cf49c648815c0ba1d1 extends Twig_Template
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
        $__internal_0d3de0f6b2f859846db8265f09b994dbaa7f7aa450c69d2991bd59a3a4227b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3de0f6b2f859846db8265f09b994dbaa7f7aa450c69d2991bd59a3a4227b03->enter($__internal_0d3de0f6b2f859846db8265f09b994dbaa7f7aa450c69d2991bd59a3a4227b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_53c2401f59225718f96c6ec64705eb6510cfc4f79939ef94d4763ed0d6a5ccb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c2401f59225718f96c6ec64705eb6510cfc4f79939ef94d4763ed0d6a5ccb1->enter($__internal_53c2401f59225718f96c6ec64705eb6510cfc4f79939ef94d4763ed0d6a5ccb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0d3de0f6b2f859846db8265f09b994dbaa7f7aa450c69d2991bd59a3a4227b03->leave($__internal_0d3de0f6b2f859846db8265f09b994dbaa7f7aa450c69d2991bd59a3a4227b03_prof);

        
        $__internal_53c2401f59225718f96c6ec64705eb6510cfc4f79939ef94d4763ed0d6a5ccb1->leave($__internal_53c2401f59225718f96c6ec64705eb6510cfc4f79939ef94d4763ed0d6a5ccb1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
