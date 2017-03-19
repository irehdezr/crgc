<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_8bae90101d16d578575267187e4a0a34e8cec8364b785cc960b5810c1c8c63f1 extends Twig_Template
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
        $__internal_7a7bd999365ebd9bd20f6812f85e37f0e7b717fa6f53bbacc5ff607ce44d7228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a7bd999365ebd9bd20f6812f85e37f0e7b717fa6f53bbacc5ff607ce44d7228->enter($__internal_7a7bd999365ebd9bd20f6812f85e37f0e7b717fa6f53bbacc5ff607ce44d7228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_7a7bd999365ebd9bd20f6812f85e37f0e7b717fa6f53bbacc5ff607ce44d7228->leave($__internal_7a7bd999365ebd9bd20f6812f85e37f0e7b717fa6f53bbacc5ff607ce44d7228_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.html.twig", "C:\\xampp\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.html.twig");
    }
}
