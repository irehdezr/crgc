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
        $__internal_1be88ee6886230fac95971f166742e29ae309bf264b8479f821736946140864a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be88ee6886230fac95971f166742e29ae309bf264b8479f821736946140864a->enter($__internal_1be88ee6886230fac95971f166742e29ae309bf264b8479f821736946140864a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_1be88ee6886230fac95971f166742e29ae309bf264b8479f821736946140864a->leave($__internal_1be88ee6886230fac95971f166742e29ae309bf264b8479f821736946140864a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8faa4ee25bf29bdb6fc7d02d5c733dde57084fafc18d094b01d4bb4235c135e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8faa4ee25bf29bdb6fc7d02d5c733dde57084fafc18d094b01d4bb4235c135e4->enter($__internal_8faa4ee25bf29bdb6fc7d02d5c733dde57084fafc18d094b01d4bb4235c135e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_8faa4ee25bf29bdb6fc7d02d5c733dde57084fafc18d094b01d4bb4235c135e4->leave($__internal_8faa4ee25bf29bdb6fc7d02d5c733dde57084fafc18d094b01d4bb4235c135e4_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c1e1a87cd53a6120ffe65b6f13f109a16fe8d581c4f89dd272487027389c203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1e1a87cd53a6120ffe65b6f13f109a16fe8d581c4f89dd272487027389c203->enter($__internal_7c1e1a87cd53a6120ffe65b6f13f109a16fe8d581c4f89dd272487027389c203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_7c1e1a87cd53a6120ffe65b6f13f109a16fe8d581c4f89dd272487027389c203->leave($__internal_7c1e1a87cd53a6120ffe65b6f13f109a16fe8d581c4f89dd272487027389c203_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ee79eec67469323237e9ca7d6f6914a400d2c31a2e3f3e0bb68118bad9ab035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee79eec67469323237e9ca7d6f6914a400d2c31a2e3f3e0bb68118bad9ab035->enter($__internal_3ee79eec67469323237e9ca7d6f6914a400d2c31a2e3f3e0bb68118bad9ab035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_3ee79eec67469323237e9ca7d6f6914a400d2c31a2e3f3e0bb68118bad9ab035->leave($__internal_3ee79eec67469323237e9ca7d6f6914a400d2c31a2e3f3e0bb68118bad9ab035_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa8cba5e976fb9b7ca5b610a20de1d255aea8a1b07e9daec28aa3a760591078e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8cba5e976fb9b7ca5b610a20de1d255aea8a1b07e9daec28aa3a760591078e->enter($__internal_aa8cba5e976fb9b7ca5b610a20de1d255aea8a1b07e9daec28aa3a760591078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_aa8cba5e976fb9b7ca5b610a20de1d255aea8a1b07e9daec28aa3a760591078e->leave($__internal_aa8cba5e976fb9b7ca5b610a20de1d255aea8a1b07e9daec28aa3a760591078e_prof);

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
