<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_333424e3e37026b0e806f8c57e02cb03bacd3ec4cd8f7d9667a34246ba93b6de extends Twig_Template
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
        $__internal_bbf977a32cd414915040053d8dfad24da12b38842b9b303c46483fbec3388fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf977a32cd414915040053d8dfad24da12b38842b9b303c46483fbec3388fba->enter($__internal_bbf977a32cd414915040053d8dfad24da12b38842b9b303c46483fbec3388fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c274fc6babced706098a18acfffd173dc208e477952648a86eb7bbb2050f761b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c274fc6babced706098a18acfffd173dc208e477952648a86eb7bbb2050f761b->enter($__internal_c274fc6babced706098a18acfffd173dc208e477952648a86eb7bbb2050f761b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bbf977a32cd414915040053d8dfad24da12b38842b9b303c46483fbec3388fba->leave($__internal_bbf977a32cd414915040053d8dfad24da12b38842b9b303c46483fbec3388fba_prof);

        
        $__internal_c274fc6babced706098a18acfffd173dc208e477952648a86eb7bbb2050f761b->leave($__internal_c274fc6babced706098a18acfffd173dc208e477952648a86eb7bbb2050f761b_prof);

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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
