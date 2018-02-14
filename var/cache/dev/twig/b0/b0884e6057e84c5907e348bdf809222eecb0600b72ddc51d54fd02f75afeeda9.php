<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_4c41733ea6d30c2eee362374042aae742adbced816ceb5a9442c3ac25299b6b1 extends Twig_Template
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
        $__internal_4caa43d30f82f37a9643a89547400a71c57feaaaf8c526efcb27705ecd3c4a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4caa43d30f82f37a9643a89547400a71c57feaaaf8c526efcb27705ecd3c4a8c->enter($__internal_4caa43d30f82f37a9643a89547400a71c57feaaaf8c526efcb27705ecd3c4a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_95cb8017a1df71d3f71563b9e57c747ceb4d20c28d87e380b7b5a9617b3e905e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cb8017a1df71d3f71563b9e57c747ceb4d20c28d87e380b7b5a9617b3e905e->enter($__internal_95cb8017a1df71d3f71563b9e57c747ceb4d20c28d87e380b7b5a9617b3e905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4caa43d30f82f37a9643a89547400a71c57feaaaf8c526efcb27705ecd3c4a8c->leave($__internal_4caa43d30f82f37a9643a89547400a71c57feaaaf8c526efcb27705ecd3c4a8c_prof);

        
        $__internal_95cb8017a1df71d3f71563b9e57c747ceb4d20c28d87e380b7b5a9617b3e905e->leave($__internal_95cb8017a1df71d3f71563b9e57c747ceb4d20c28d87e380b7b5a9617b3e905e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
