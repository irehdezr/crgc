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
        $__internal_a63f723781eddc600f0daebd5947fbcc48f6cbfb8484a18174b981369dd73d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63f723781eddc600f0daebd5947fbcc48f6cbfb8484a18174b981369dd73d9f->enter($__internal_a63f723781eddc600f0daebd5947fbcc48f6cbfb8484a18174b981369dd73d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_31e05161e2dd29c5ff05341bda7724d73274d95627540e203d3125eac08e7d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e05161e2dd29c5ff05341bda7724d73274d95627540e203d3125eac08e7d73->enter($__internal_31e05161e2dd29c5ff05341bda7724d73274d95627540e203d3125eac08e7d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a63f723781eddc600f0daebd5947fbcc48f6cbfb8484a18174b981369dd73d9f->leave($__internal_a63f723781eddc600f0daebd5947fbcc48f6cbfb8484a18174b981369dd73d9f_prof);

        
        $__internal_31e05161e2dd29c5ff05341bda7724d73274d95627540e203d3125eac08e7d73->leave($__internal_31e05161e2dd29c5ff05341bda7724d73274d95627540e203d3125eac08e7d73_prof);

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
