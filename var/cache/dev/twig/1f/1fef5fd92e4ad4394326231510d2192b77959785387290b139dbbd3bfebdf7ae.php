<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c36fdaaf86ed4de9acc71c8d7fed488d1ef0cd5cb2164522588cdae2735a18d6 extends Twig_Template
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
        $__internal_7d4e90e7f1aef02f79469995f9e9222fbfb5d277dc491f52db87e8d7a3b8d997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4e90e7f1aef02f79469995f9e9222fbfb5d277dc491f52db87e8d7a3b8d997->enter($__internal_7d4e90e7f1aef02f79469995f9e9222fbfb5d277dc491f52db87e8d7a3b8d997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_4e713dea015ae76e67003ca364a0999ba177458138fa8c69bd5d9b38bafd6290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e713dea015ae76e67003ca364a0999ba177458138fa8c69bd5d9b38bafd6290->enter($__internal_4e713dea015ae76e67003ca364a0999ba177458138fa8c69bd5d9b38bafd6290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_7d4e90e7f1aef02f79469995f9e9222fbfb5d277dc491f52db87e8d7a3b8d997->leave($__internal_7d4e90e7f1aef02f79469995f9e9222fbfb5d277dc491f52db87e8d7a3b8d997_prof);

        
        $__internal_4e713dea015ae76e67003ca364a0999ba177458138fa8c69bd5d9b38bafd6290->leave($__internal_4e713dea015ae76e67003ca364a0999ba177458138fa8c69bd5d9b38bafd6290_prof);

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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
