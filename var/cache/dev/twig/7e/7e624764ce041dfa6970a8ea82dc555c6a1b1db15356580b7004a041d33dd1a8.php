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
        $__internal_c08a373499268b3aa1ba253daa6102abdc621349fed4bd6db6474b802fe1a6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08a373499268b3aa1ba253daa6102abdc621349fed4bd6db6474b802fe1a6ee->enter($__internal_c08a373499268b3aa1ba253daa6102abdc621349fed4bd6db6474b802fe1a6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ca9c87708d67f564e8e12b9edf5134f687e8ac2021578a27d1e6affce1b77b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9c87708d67f564e8e12b9edf5134f687e8ac2021578a27d1e6affce1b77b21->enter($__internal_ca9c87708d67f564e8e12b9edf5134f687e8ac2021578a27d1e6affce1b77b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c08a373499268b3aa1ba253daa6102abdc621349fed4bd6db6474b802fe1a6ee->leave($__internal_c08a373499268b3aa1ba253daa6102abdc621349fed4bd6db6474b802fe1a6ee_prof);

        
        $__internal_ca9c87708d67f564e8e12b9edf5134f687e8ac2021578a27d1e6affce1b77b21->leave($__internal_ca9c87708d67f564e8e12b9edf5134f687e8ac2021578a27d1e6affce1b77b21_prof);

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
