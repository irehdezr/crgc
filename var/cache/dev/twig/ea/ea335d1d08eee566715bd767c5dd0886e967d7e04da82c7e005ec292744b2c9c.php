<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6817efda115edcff98a8ff964036dfa34e8151aa1e8d08804a3b318c929f1739 extends Twig_Template
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
        $__internal_23477be0fd9c76103d1092d92aaec29d2ec527ceda0e00d11fee56546cc7d371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23477be0fd9c76103d1092d92aaec29d2ec527ceda0e00d11fee56546cc7d371->enter($__internal_23477be0fd9c76103d1092d92aaec29d2ec527ceda0e00d11fee56546cc7d371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_3537b578d94265e59665c9561174c1befb923ea11e06967ab31def653cdce8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3537b578d94265e59665c9561174c1befb923ea11e06967ab31def653cdce8f0->enter($__internal_3537b578d94265e59665c9561174c1befb923ea11e06967ab31def653cdce8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_23477be0fd9c76103d1092d92aaec29d2ec527ceda0e00d11fee56546cc7d371->leave($__internal_23477be0fd9c76103d1092d92aaec29d2ec527ceda0e00d11fee56546cc7d371_prof);

        
        $__internal_3537b578d94265e59665c9561174c1befb923ea11e06967ab31def653cdce8f0->leave($__internal_3537b578d94265e59665c9561174c1befb923ea11e06967ab31def653cdce8f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
