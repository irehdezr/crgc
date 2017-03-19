<?php

/* layout.html.twig */
class __TwigTemplate_8165f90eeeaec0f99ba957f2eaef9365b7af2c94c42108736bfbdae2d99489e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4be5bd7b55f6730cba0110322e5d0cbb0437250c1ff10e93d3f021ddd7d1f7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be5bd7b55f6730cba0110322e5d0cbb0437250c1ff10e93d3f021ddd7d1f7b2->enter($__internal_4be5bd7b55f6730cba0110322e5d0cbb0437250c1ff10e93d3f021ddd7d1f7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div id=\"header\">
            ";
        // line 14
        $this->loadTemplate("header.html.twig", "layout.html.twig", 14)->display($context);
        // line 15
        echo "        </div>
        <div id=\"content\">
            ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 20
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 20)->display($context);
        // line 21
        echo "        </div>
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>";
        
        $__internal_4be5bd7b55f6730cba0110322e5d0cbb0437250c1ff10e93d3f021ddd7d1f7b2->leave($__internal_4be5bd7b55f6730cba0110322e5d0cbb0437250c1ff10e93d3f021ddd7d1f7b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39131c3bc2049e1c673c5d2079acc5fe34dedb646665257f191c78edb8965c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39131c3bc2049e1c673c5d2079acc5fe34dedb646665257f191c78edb8965c60->enter($__internal_39131c3bc2049e1c673c5d2079acc5fe34dedb646665257f191c78edb8965c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRgourmetcoffee";
        
        $__internal_39131c3bc2049e1c673c5d2079acc5fe34dedb646665257f191c78edb8965c60->leave($__internal_39131c3bc2049e1c673c5d2079acc5fe34dedb646665257f191c78edb8965c60_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d31dd09f5b381f378b02c88d95d37d4f19b24b73db40a2a8c9598d444b8bc1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31dd09f5b381f378b02c88d95d37d4f19b24b73db40a2a8c9598d444b8bc1ff->enter($__internal_d31dd09f5b381f378b02c88d95d37d4f19b24b73db40a2a8c9598d444b8bc1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_d31dd09f5b381f378b02c88d95d37d4f19b24b73db40a2a8c9598d444b8bc1ff->leave($__internal_d31dd09f5b381f378b02c88d95d37d4f19b24b73db40a2a8c9598d444b8bc1ff_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca9fc875c79ae6e1e3ad9cf4cc80893541b1f5a5ac4825ce9b409a4e3b143120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9fc875c79ae6e1e3ad9cf4cc80893541b1f5a5ac4825ce9b409a4e3b143120->enter($__internal_ca9fc875c79ae6e1e3ad9cf4cc80893541b1f5a5ac4825ce9b409a4e3b143120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca9fc875c79ae6e1e3ad9cf4cc80893541b1f5a5ac4825ce9b409a4e3b143120->leave($__internal_ca9fc875c79ae6e1e3ad9cf4cc80893541b1f5a5ac4825ce9b409a4e3b143120_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7958e6d54ed1e0e6dbdcfde73714315773a897f7efddfb33007337f049bfb87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7958e6d54ed1e0e6dbdcfde73714315773a897f7efddfb33007337f049bfb87->enter($__internal_a7958e6d54ed1e0e6dbdcfde73714315773a897f7efddfb33007337f049bfb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"  </script>
       ";
        
        $__internal_a7958e6d54ed1e0e6dbdcfde73714315773a897f7efddfb33007337f049bfb87->leave($__internal_a7958e6d54ed1e0e6dbdcfde73714315773a897f7efddfb33007337f049bfb87_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 24,  120 => 23,  114 => 22,  103 => 17,  94 => 9,  89 => 8,  83 => 7,  71 => 5,  63 => 26,  61 => 22,  58 => 21,  56 => 20,  52 => 18,  50 => 17,  46 => 15,  44 => 14,  39 => 11,  37 => 7,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\layout.html.twig");
    }
}
