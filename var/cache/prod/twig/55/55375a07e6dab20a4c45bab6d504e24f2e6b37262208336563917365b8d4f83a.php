<?php

/* layout.html.twig */
class __TwigTemplate_fa663af8537105114a7752b5e500e270d459fcf8e8d2b34c61c6f76ff2501201 extends Twig_Template
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
        $__internal_17d538c114b75733e594880b12a2d630cbdd4a607f3d0164df36e748ba848bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d538c114b75733e594880b12a2d630cbdd4a607f3d0164df36e748ba848bed->enter($__internal_17d538c114b75733e594880b12a2d630cbdd4a607f3d0164df36e748ba848bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        <header>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PageBundle:Default:header"));
        echo "
        </header>
        <main>
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        </main>
        <footer>
            ";
        // line 25
        $this->loadTemplate("footer.html.twig", "layout.html.twig", 25)->display($context);
        // line 26
        echo "        </footer>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>";
        
        $__internal_17d538c114b75733e594880b12a2d630cbdd4a607f3d0164df36e748ba848bed->leave($__internal_17d538c114b75733e594880b12a2d630cbdd4a607f3d0164df36e748ba848bed_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c02e2730b330508d869cc890a67e6dbe479c3ceb0316fb98b3c15e42744366e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02e2730b330508d869cc890a67e6dbe479c3ceb0316fb98b3c15e42744366e8->enter($__internal_c02e2730b330508d869cc890a67e6dbe479c3ceb0316fb98b3c15e42744366e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_c02e2730b330508d869cc890a67e6dbe479c3ceb0316fb98b3c15e42744366e8->leave($__internal_c02e2730b330508d869cc890a67e6dbe479c3ceb0316fb98b3c15e42744366e8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6150924792b8e08bf730839552b5470f9e4bfd85ec1aaad755f3b4b27bf06f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6150924792b8e08bf730839552b5470f9e4bfd85ec1aaad755f3b4b27bf06f0->enter($__internal_e6150924792b8e08bf730839552b5470f9e4bfd85ec1aaad755f3b4b27bf06f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e6150924792b8e08bf730839552b5470f9e4bfd85ec1aaad755f3b4b27bf06f0->leave($__internal_e6150924792b8e08bf730839552b5470f9e4bfd85ec1aaad755f3b4b27bf06f0_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77d6354e5f1aec27bd3fa3cbfe9d612e3349a9e6fca02b8c907a9163f4a7bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77d6354e5f1aec27bd3fa3cbfe9d612e3349a9e6fca02b8c907a9163f4a7bd2->enter($__internal_f77d6354e5f1aec27bd3fa3cbfe9d612e3349a9e6fca02b8c907a9163f4a7bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_f77d6354e5f1aec27bd3fa3cbfe9d612e3349a9e6fca02b8c907a9163f4a7bd2->leave($__internal_f77d6354e5f1aec27bd3fa3cbfe9d612e3349a9e6fca02b8c907a9163f4a7bd2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f4dc6f9ce139a8913eb65831f50e7fe1f6c17dc6e40fb7806fa0e0ea02c9027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4dc6f9ce139a8913eb65831f50e7fe1f6c17dc6e40fb7806fa0e0ea02c9027->enter($__internal_4f4dc6f9ce139a8913eb65831f50e7fe1f6c17dc6e40fb7806fa0e0ea02c9027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t\t\t<script>
\t\t\t\tvar addToCartUrl = \"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_add_presentation_to_cart"), "js"), "html", null, true);
        echo "\";
                var homeUrl = \"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_homepage"), "js"), "html", null, true);
        echo "\";
\t\t\t</script>
            <script src= \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_4f4dc6f9ce139a8913eb65831f50e7fe1f6c17dc6e40fb7806fa0e0ea02c9027->leave($__internal_4f4dc6f9ce139a8913eb65831f50e7fe1f6c17dc6e40fb7806fa0e0ea02c9027_prof);

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
        return array (  146 => 34,  142 => 33,  138 => 32,  133 => 30,  129 => 29,  126 => 28,  120 => 27,  113 => 22,  107 => 21,  98 => 13,  93 => 12,  87 => 11,  79 => 7,  73 => 6,  65 => 36,  63 => 27,  60 => 26,  58 => 25,  54 => 23,  52 => 21,  46 => 18,  41 => 15,  39 => 11,  35 => 9,  33 => 6,  26 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css')}}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/crgourmetcoffee.css')}}\" />
        {% endblock %}
    </head>
    <body>
        <header>
            {{ render(controller('PageBundle:Default:header' )) }}
        </header>
        <main>
            {% block body %}
            {% endblock %}
        </main>
        <footer>
            {% include \"footer.html.twig\"%}
        </footer>
        {% block javascripts %}
\t\t\t<script>
\t\t\t\tvar addToCartUrl = \"{{ path('product_add_presentation_to_cart')|escape('js') }}\";
                var homeUrl = \"{{ path('page_homepage')|escape('js') }}\";
\t\t\t</script>
            <script src= \"{{ asset('js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\crgc\\app\\Resources\\views\\layout.html.twig");
    }
}
