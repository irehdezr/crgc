<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_720543b4fbce9983c9776e1985703fa7cdc3ae704467fa4bef40c11afc118a14 extends Twig_Template
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
        $__internal_c45c692b2f60fb4f9d8cf834773e8603e51de0504056cf4bfdd2cbe0e32db655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45c692b2f60fb4f9d8cf834773e8603e51de0504056cf4bfdd2cbe0e32db655->enter($__internal_c45c692b2f60fb4f9d8cf834773e8603e51de0504056cf4bfdd2cbe0e32db655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c9c7cae27f20c0c0bd5e95117f35cd20d674d9b5e5bb96b62afcb6191ac92c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c7cae27f20c0c0bd5e95117f35cd20d674d9b5e5bb96b62afcb6191ac92c62->enter($__internal_c9c7cae27f20c0c0bd5e95117f35cd20d674d9b5e5bb96b62afcb6191ac92c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c45c692b2f60fb4f9d8cf834773e8603e51de0504056cf4bfdd2cbe0e32db655->leave($__internal_c45c692b2f60fb4f9d8cf834773e8603e51de0504056cf4bfdd2cbe0e32db655_prof);

        
        $__internal_c9c7cae27f20c0c0bd5e95117f35cd20d674d9b5e5bb96b62afcb6191ac92c62->leave($__internal_c9c7cae27f20c0c0bd5e95117f35cd20d674d9b5e5bb96b62afcb6191ac92c62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
