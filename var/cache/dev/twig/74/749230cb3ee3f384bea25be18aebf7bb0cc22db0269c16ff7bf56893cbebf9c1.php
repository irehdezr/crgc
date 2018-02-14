<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f33038495c85d83661699992730c8acf181f6ea36abb600c3ababe4be290ed52 extends Twig_Template
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
        $__internal_82d82272e11c83f651e44456b8718ae304c4bd51171b520ae5a65cd9f5bebfe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d82272e11c83f651e44456b8718ae304c4bd51171b520ae5a65cd9f5bebfe2->enter($__internal_82d82272e11c83f651e44456b8718ae304c4bd51171b520ae5a65cd9f5bebfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9f0359fdba8fc6ae8c8e818d202e1f63028dce0d20532a9322bc8f2c556ff3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0359fdba8fc6ae8c8e818d202e1f63028dce0d20532a9322bc8f2c556ff3ff->enter($__internal_9f0359fdba8fc6ae8c8e818d202e1f63028dce0d20532a9322bc8f2c556ff3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_82d82272e11c83f651e44456b8718ae304c4bd51171b520ae5a65cd9f5bebfe2->leave($__internal_82d82272e11c83f651e44456b8718ae304c4bd51171b520ae5a65cd9f5bebfe2_prof);

        
        $__internal_9f0359fdba8fc6ae8c8e818d202e1f63028dce0d20532a9322bc8f2c556ff3ff->leave($__internal_9f0359fdba8fc6ae8c8e818d202e1f63028dce0d20532a9322bc8f2c556ff3ff_prof);

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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
