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
        $__internal_6791d14d7f3b0089750f181e8f8b6fd704e13d74ff9dcb32d6a90d87ffc3f4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6791d14d7f3b0089750f181e8f8b6fd704e13d74ff9dcb32d6a90d87ffc3f4d5->enter($__internal_6791d14d7f3b0089750f181e8f8b6fd704e13d74ff9dcb32d6a90d87ffc3f4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_251cca656177e1cc4ebd666b0fd7fd14713c4b58e59c1661e96cdb9cac99b85d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251cca656177e1cc4ebd666b0fd7fd14713c4b58e59c1661e96cdb9cac99b85d->enter($__internal_251cca656177e1cc4ebd666b0fd7fd14713c4b58e59c1661e96cdb9cac99b85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_6791d14d7f3b0089750f181e8f8b6fd704e13d74ff9dcb32d6a90d87ffc3f4d5->leave($__internal_6791d14d7f3b0089750f181e8f8b6fd704e13d74ff9dcb32d6a90d87ffc3f4d5_prof);

        
        $__internal_251cca656177e1cc4ebd666b0fd7fd14713c4b58e59c1661e96cdb9cac99b85d->leave($__internal_251cca656177e1cc4ebd666b0fd7fd14713c4b58e59c1661e96cdb9cac99b85d_prof);

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
