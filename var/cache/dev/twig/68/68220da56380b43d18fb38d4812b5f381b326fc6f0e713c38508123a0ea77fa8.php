<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8452ba4208725e4a8bf9c9e33cbfea2a14ff2db072df63edd4221feadb7129b8 extends Twig_Template
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
        $__internal_26b5a7be2400732782607cd266f00df636b5eda7cb15e0d84d0ea3e989650203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b5a7be2400732782607cd266f00df636b5eda7cb15e0d84d0ea3e989650203->enter($__internal_26b5a7be2400732782607cd266f00df636b5eda7cb15e0d84d0ea3e989650203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_019a5bc2807e84368bc3b1295aee6c28263f0fe1ac0e7dff15f73849a3fc4e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019a5bc2807e84368bc3b1295aee6c28263f0fe1ac0e7dff15f73849a3fc4e9f->enter($__internal_019a5bc2807e84368bc3b1295aee6c28263f0fe1ac0e7dff15f73849a3fc4e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_26b5a7be2400732782607cd266f00df636b5eda7cb15e0d84d0ea3e989650203->leave($__internal_26b5a7be2400732782607cd266f00df636b5eda7cb15e0d84d0ea3e989650203_prof);

        
        $__internal_019a5bc2807e84368bc3b1295aee6c28263f0fe1ac0e7dff15f73849a3fc4e9f->leave($__internal_019a5bc2807e84368bc3b1295aee6c28263f0fe1ac0e7dff15f73849a3fc4e9f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
