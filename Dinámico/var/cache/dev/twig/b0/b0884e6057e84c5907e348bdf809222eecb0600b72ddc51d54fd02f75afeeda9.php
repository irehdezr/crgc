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
        $__internal_b0921086c5186e1e349bbdf85ad3ec5890577d37d09715a6ce67644fac4d6b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0921086c5186e1e349bbdf85ad3ec5890577d37d09715a6ce67644fac4d6b2d->enter($__internal_b0921086c5186e1e349bbdf85ad3ec5890577d37d09715a6ce67644fac4d6b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_fd89330a018159e22f2c71b2a071c6e82776c75f84bbedeeda9d7039c6c53850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd89330a018159e22f2c71b2a071c6e82776c75f84bbedeeda9d7039c6c53850->enter($__internal_fd89330a018159e22f2c71b2a071c6e82776c75f84bbedeeda9d7039c6c53850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b0921086c5186e1e349bbdf85ad3ec5890577d37d09715a6ce67644fac4d6b2d->leave($__internal_b0921086c5186e1e349bbdf85ad3ec5890577d37d09715a6ce67644fac4d6b2d_prof);

        
        $__internal_fd89330a018159e22f2c71b2a071c6e82776c75f84bbedeeda9d7039c6c53850->leave($__internal_fd89330a018159e22f2c71b2a071c6e82776c75f84bbedeeda9d7039c6c53850_prof);

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
