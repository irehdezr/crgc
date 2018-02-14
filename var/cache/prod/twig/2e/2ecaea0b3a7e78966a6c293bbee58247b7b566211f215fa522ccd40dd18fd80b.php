<?php

/* layout.html.twig */
class __TwigTemplate_c0f91db3116dda100db9a8acb2b6274a0ec6c26599dde545692cc7ae657693c7 extends Twig_Template
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
        $__internal_61edbc59d26f9c5aecf85ee1a2ae0f4e3d3206897e176a83dbaf2b30bb0eacef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61edbc59d26f9c5aecf85ee1a2ae0f4e3d3206897e176a83dbaf2b30bb0eacef->enter($__internal_61edbc59d26f9c5aecf85ee1a2ae0f4e3d3206897e176a83dbaf2b30bb0eacef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <meta name=\"viewport\" content=\"width=device-width,height=device-height initial-scale=1.0\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <div id=\"header\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PageBundle:Default:header"));
        echo "
        </div>
        <div id=\"content\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 25
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 25)->display($context);
        // line 26
        echo "        </div>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>";
        
        $__internal_61edbc59d26f9c5aecf85ee1a2ae0f4e3d3206897e176a83dbaf2b30bb0eacef->leave($__internal_61edbc59d26f9c5aecf85ee1a2ae0f4e3d3206897e176a83dbaf2b30bb0eacef_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_205cc90c80f307e26156d692c68a8ee7938b69902f004aebae31df4b82a113b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205cc90c80f307e26156d692c68a8ee7938b69902f004aebae31df4b82a113b8->enter($__internal_205cc90c80f307e26156d692c68a8ee7938b69902f004aebae31df4b82a113b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_205cc90c80f307e26156d692c68a8ee7938b69902f004aebae31df4b82a113b8->leave($__internal_205cc90c80f307e26156d692c68a8ee7938b69902f004aebae31df4b82a113b8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1c669fcee0eeb7559b3b7774a6970926fd84777854cf40a7e4e5ca73ff7f182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c669fcee0eeb7559b3b7774a6970926fd84777854cf40a7e4e5ca73ff7f182->enter($__internal_c1c669fcee0eeb7559b3b7774a6970926fd84777854cf40a7e4e5ca73ff7f182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_c1c669fcee0eeb7559b3b7774a6970926fd84777854cf40a7e4e5ca73ff7f182->leave($__internal_c1c669fcee0eeb7559b3b7774a6970926fd84777854cf40a7e4e5ca73ff7f182_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d1987845f3c06122abf4790d6124dd5d92b447d761193695c41cd6c6b85d471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1987845f3c06122abf4790d6124dd5d92b447d761193695c41cd6c6b85d471->enter($__internal_5d1987845f3c06122abf4790d6124dd5d92b447d761193695c41cd6c6b85d471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_5d1987845f3c06122abf4790d6124dd5d92b447d761193695c41cd6c6b85d471->leave($__internal_5d1987845f3c06122abf4790d6124dd5d92b447d761193695c41cd6c6b85d471_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31a044a1f43baa7820288642dd6a3f1838690d245bcb26ae415a11328088ca7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a044a1f43baa7820288642dd6a3f1838690d245bcb26ae415a11328088ca7a->enter($__internal_31a044a1f43baa7820288642dd6a3f1838690d245bcb26ae415a11328088ca7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_31a044a1f43baa7820288642dd6a3f1838690d245bcb26ae415a11328088ca7a->leave($__internal_31a044a1f43baa7820288642dd6a3f1838690d245bcb26ae415a11328088ca7a_prof);

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
        return array (  135 => 30,  131 => 29,  126 => 28,  120 => 27,  113 => 22,  107 => 21,  98 => 13,  93 => 12,  87 => 11,  79 => 7,  73 => 6,  65 => 32,  63 => 27,  60 => 26,  58 => 25,  54 => 23,  52 => 21,  46 => 18,  41 => 15,  39 => 11,  35 => 9,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            {% block title %}
                CRgourmetcoffee
            {% endblock %}
        </title>
        <meta name=\"viewport\" content=\"width=device-width,height=device-height initial-scale=1.0\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/bootstrap.css')}}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('/web/public/css/crgourmetcoffee.css')}}\" />
        {% endblock %}
    </head>
    <body>
        <div id=\"header\">
            {{ render(controller('PageBundle:Default:header' )) }}
        </div>
        <div id=\"content\">
            {% block body %}
            {% endblock %}
        </div>
        <div id=\"footer\">
            {% include \"footer.html.twig\"%}
        </div>
        {% block javascripts %}
            <script src= \"{{ asset('/web/public/js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('/web/public/js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('/web/public/js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\app\\Resources\\views\\layout.html.twig");
    }
}
