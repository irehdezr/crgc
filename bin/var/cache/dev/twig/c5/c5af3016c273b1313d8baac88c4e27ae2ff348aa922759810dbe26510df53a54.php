<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d637f79863cd8b5a594fdcb28eab96a7b85b5b8594466ed615ac717f390e6aa5 extends Twig_Template
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
        $__internal_2e16dba8131a6d68b1d96f9b64a5af77516905e8a6748ba476ba259c608ed78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e16dba8131a6d68b1d96f9b64a5af77516905e8a6748ba476ba259c608ed78f->enter($__internal_2e16dba8131a6d68b1d96f9b64a5af77516905e8a6748ba476ba259c608ed78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6987d75be080d061ad3017a5247c4267cfbe7cd9257a6b5179be564b0dba4323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6987d75be080d061ad3017a5247c4267cfbe7cd9257a6b5179be564b0dba4323->enter($__internal_6987d75be080d061ad3017a5247c4267cfbe7cd9257a6b5179be564b0dba4323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2e16dba8131a6d68b1d96f9b64a5af77516905e8a6748ba476ba259c608ed78f->leave($__internal_2e16dba8131a6d68b1d96f9b64a5af77516905e8a6748ba476ba259c608ed78f_prof);

        
        $__internal_6987d75be080d061ad3017a5247c4267cfbe7cd9257a6b5179be564b0dba4323->leave($__internal_6987d75be080d061ad3017a5247c4267cfbe7cd9257a6b5179be564b0dba4323_prof);

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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
