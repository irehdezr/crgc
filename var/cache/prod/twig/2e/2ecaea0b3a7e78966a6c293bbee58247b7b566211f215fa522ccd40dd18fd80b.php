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
        $__internal_ed82774fda8a5eea7c762ee0066de0d661048d52158d4c5a559de999602f870b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed82774fda8a5eea7c762ee0066de0d661048d52158d4c5a559de999602f870b->enter($__internal_ed82774fda8a5eea7c762ee0066de0d661048d52158d4c5a559de999602f870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        $this->loadTemplate("header.html.twig", "layout.html.twig", 18)->display($context);
        // line 19
        echo "        </div>
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
        
        $__internal_ed82774fda8a5eea7c762ee0066de0d661048d52158d4c5a559de999602f870b->leave($__internal_ed82774fda8a5eea7c762ee0066de0d661048d52158d4c5a559de999602f870b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c403406b60a974187786af065ca48c0e24da5414fde01fbe80b822554bfdb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c403406b60a974187786af065ca48c0e24da5414fde01fbe80b822554bfdb60->enter($__internal_3c403406b60a974187786af065ca48c0e24da5414fde01fbe80b822554bfdb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_3c403406b60a974187786af065ca48c0e24da5414fde01fbe80b822554bfdb60->leave($__internal_3c403406b60a974187786af065ca48c0e24da5414fde01fbe80b822554bfdb60_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a54dae648903e3a851196ea964d4111ae4677b56fe75c643eaaea6cad0e446ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54dae648903e3a851196ea964d4111ae4677b56fe75c643eaaea6cad0e446ff->enter($__internal_a54dae648903e3a851196ea964d4111ae4677b56fe75c643eaaea6cad0e446ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a54dae648903e3a851196ea964d4111ae4677b56fe75c643eaaea6cad0e446ff->leave($__internal_a54dae648903e3a851196ea964d4111ae4677b56fe75c643eaaea6cad0e446ff_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_d04ac4bb31c86cd6af1c107e10664730dea127fd5bd657ee87802044e7f0212e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04ac4bb31c86cd6af1c107e10664730dea127fd5bd657ee87802044e7f0212e->enter($__internal_d04ac4bb31c86cd6af1c107e10664730dea127fd5bd657ee87802044e7f0212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_d04ac4bb31c86cd6af1c107e10664730dea127fd5bd657ee87802044e7f0212e->leave($__internal_d04ac4bb31c86cd6af1c107e10664730dea127fd5bd657ee87802044e7f0212e_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a90f6e99dd5887dbc176c5dd0b928dd374e8bde6006e7e7af0e8a520835ba651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90f6e99dd5887dbc176c5dd0b928dd374e8bde6006e7e7af0e8a520835ba651->enter($__internal_a90f6e99dd5887dbc176c5dd0b928dd374e8bde6006e7e7af0e8a520835ba651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a90f6e99dd5887dbc176c5dd0b928dd374e8bde6006e7e7af0e8a520835ba651->leave($__internal_a90f6e99dd5887dbc176c5dd0b928dd374e8bde6006e7e7af0e8a520835ba651_prof);

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
        return array (  135 => 30,  131 => 29,  126 => 28,  120 => 27,  113 => 22,  107 => 21,  98 => 13,  93 => 12,  87 => 11,  79 => 7,  73 => 6,  65 => 32,  63 => 27,  60 => 26,  58 => 25,  54 => 23,  52 => 21,  48 => 19,  46 => 18,  41 => 15,  39 => 11,  35 => 9,  33 => 6,  26 => 1,);
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
            {% include \"header.html.twig\"%}
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
