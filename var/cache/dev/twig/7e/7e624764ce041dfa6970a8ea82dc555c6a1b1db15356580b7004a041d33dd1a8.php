<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_382107e3946122f59d66728bfbf30c42ef761e5542816e2d79e0733cd33b2bc0 extends Twig_Template
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
        $__internal_5c9e68a99ca7b30368cf5a95e6c0f54ef4cbedbf311550e0670d29c19bf3a6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9e68a99ca7b30368cf5a95e6c0f54ef4cbedbf311550e0670d29c19bf3a6fa->enter($__internal_5c9e68a99ca7b30368cf5a95e6c0f54ef4cbedbf311550e0670d29c19bf3a6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_18fd340b58e4d50e1e1526977af8d3ca1af5160a8a6eddc6a4b5d598297eb51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fd340b58e4d50e1e1526977af8d3ca1af5160a8a6eddc6a4b5d598297eb51e->enter($__internal_18fd340b58e4d50e1e1526977af8d3ca1af5160a8a6eddc6a4b5d598297eb51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5c9e68a99ca7b30368cf5a95e6c0f54ef4cbedbf311550e0670d29c19bf3a6fa->leave($__internal_5c9e68a99ca7b30368cf5a95e6c0f54ef4cbedbf311550e0670d29c19bf3a6fa_prof);

        
        $__internal_18fd340b58e4d50e1e1526977af8d3ca1af5160a8a6eddc6a4b5d598297eb51e->leave($__internal_18fd340b58e4d50e1e1526977af8d3ca1af5160a8a6eddc6a4b5d598297eb51e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
