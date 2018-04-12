<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ec3ebc5bdfe202ced9191165d32e9e4826ab50558c545ac544b37a059ee89105 extends Twig_Template
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
        $__internal_0fae8cdc92222c9a1c32ef5ea90b49ca045da2a5d9af7436930e37e6242f4306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fae8cdc92222c9a1c32ef5ea90b49ca045da2a5d9af7436930e37e6242f4306->enter($__internal_0fae8cdc92222c9a1c32ef5ea90b49ca045da2a5d9af7436930e37e6242f4306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_6f0abd1a33a36f6513de48153c65f85da7ec24438475c5d3b2791a1c469add9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0abd1a33a36f6513de48153c65f85da7ec24438475c5d3b2791a1c469add9e->enter($__internal_6f0abd1a33a36f6513de48153c65f85da7ec24438475c5d3b2791a1c469add9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0fae8cdc92222c9a1c32ef5ea90b49ca045da2a5d9af7436930e37e6242f4306->leave($__internal_0fae8cdc92222c9a1c32ef5ea90b49ca045da2a5d9af7436930e37e6242f4306_prof);

        
        $__internal_6f0abd1a33a36f6513de48153c65f85da7ec24438475c5d3b2791a1c469add9e->leave($__internal_6f0abd1a33a36f6513de48153c65f85da7ec24438475c5d3b2791a1c469add9e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\crgc\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
