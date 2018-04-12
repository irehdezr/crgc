<?php

/* layout.html.twig */
class __TwigTemplate_1d65d2cbb85a32dc48eb261514ec01895b3fcbdf14d485ed7af5f468f4ddebbb extends Twig_Template
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
        $__internal_f969e0743df76ff31bb01d51ed679cbfc52f4f7d09e46d94aafec23f263e6244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f969e0743df76ff31bb01d51ed679cbfc52f4f7d09e46d94aafec23f263e6244->enter($__internal_f969e0743df76ff31bb01d51ed679cbfc52f4f7d09e46d94aafec23f263e6244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_3da040f3d4ff069622ea3397c0d47bbd80ef197a84c3678d8a91e7f519fbf57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da040f3d4ff069622ea3397c0d47bbd80ef197a84c3678d8a91e7f519fbf57a->enter($__internal_3da040f3d4ff069622ea3397c0d47bbd80ef197a84c3678d8a91e7f519fbf57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_f969e0743df76ff31bb01d51ed679cbfc52f4f7d09e46d94aafec23f263e6244->leave($__internal_f969e0743df76ff31bb01d51ed679cbfc52f4f7d09e46d94aafec23f263e6244_prof);

        
        $__internal_3da040f3d4ff069622ea3397c0d47bbd80ef197a84c3678d8a91e7f519fbf57a->leave($__internal_3da040f3d4ff069622ea3397c0d47bbd80ef197a84c3678d8a91e7f519fbf57a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e831bf7335a6a56a1aa4879de3953e61d6cd52bac9203b7911de7f96cff567b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e831bf7335a6a56a1aa4879de3953e61d6cd52bac9203b7911de7f96cff567b6->enter($__internal_e831bf7335a6a56a1aa4879de3953e61d6cd52bac9203b7911de7f96cff567b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a68a3fe61d2f76661ef2c4b553e6a70ebeb9fa35abf5c30e6cf1818bd4495b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68a3fe61d2f76661ef2c4b553e6a70ebeb9fa35abf5c30e6cf1818bd4495b9d->enter($__internal_a68a3fe61d2f76661ef2c4b553e6a70ebeb9fa35abf5c30e6cf1818bd4495b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_a68a3fe61d2f76661ef2c4b553e6a70ebeb9fa35abf5c30e6cf1818bd4495b9d->leave($__internal_a68a3fe61d2f76661ef2c4b553e6a70ebeb9fa35abf5c30e6cf1818bd4495b9d_prof);

        
        $__internal_e831bf7335a6a56a1aa4879de3953e61d6cd52bac9203b7911de7f96cff567b6->leave($__internal_e831bf7335a6a56a1aa4879de3953e61d6cd52bac9203b7911de7f96cff567b6_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_768f6f4d6973d92eb262c41d6f6ff85d127aa205861884188674250ada5bf813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768f6f4d6973d92eb262c41d6f6ff85d127aa205861884188674250ada5bf813->enter($__internal_768f6f4d6973d92eb262c41d6f6ff85d127aa205861884188674250ada5bf813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_04c47431dd84c92dbce3d9d57189ba250212faec65e138915751f587783ded37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c47431dd84c92dbce3d9d57189ba250212faec65e138915751f587783ded37->enter($__internal_04c47431dd84c92dbce3d9d57189ba250212faec65e138915751f587783ded37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_04c47431dd84c92dbce3d9d57189ba250212faec65e138915751f587783ded37->leave($__internal_04c47431dd84c92dbce3d9d57189ba250212faec65e138915751f587783ded37_prof);

        
        $__internal_768f6f4d6973d92eb262c41d6f6ff85d127aa205861884188674250ada5bf813->leave($__internal_768f6f4d6973d92eb262c41d6f6ff85d127aa205861884188674250ada5bf813_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3ff0bb756f276a5d83e41d3086ad55cd469a89f77fa7bf4bd62b5783b2d2546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ff0bb756f276a5d83e41d3086ad55cd469a89f77fa7bf4bd62b5783b2d2546->enter($__internal_f3ff0bb756f276a5d83e41d3086ad55cd469a89f77fa7bf4bd62b5783b2d2546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c10d50c1faa39e6b292f1745855a29575e4ec6941154a3282711f4cf63c5b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c10d50c1faa39e6b292f1745855a29575e4ec6941154a3282711f4cf63c5b0a->enter($__internal_6c10d50c1faa39e6b292f1745855a29575e4ec6941154a3282711f4cf63c5b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_6c10d50c1faa39e6b292f1745855a29575e4ec6941154a3282711f4cf63c5b0a->leave($__internal_6c10d50c1faa39e6b292f1745855a29575e4ec6941154a3282711f4cf63c5b0a_prof);

        
        $__internal_f3ff0bb756f276a5d83e41d3086ad55cd469a89f77fa7bf4bd62b5783b2d2546->leave($__internal_f3ff0bb756f276a5d83e41d3086ad55cd469a89f77fa7bf4bd62b5783b2d2546_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fd386356af82a7eea061fac426ae2c90b1c6568777a8ab0182d7774491993c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd386356af82a7eea061fac426ae2c90b1c6568777a8ab0182d7774491993c4->enter($__internal_0fd386356af82a7eea061fac426ae2c90b1c6568777a8ab0182d7774491993c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e7369cc1bbddc6f088897184a86ea0697a9b38df45ffe42901b5ce6d309d752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7369cc1bbddc6f088897184a86ea0697a9b38df45ffe42901b5ce6d309d752->enter($__internal_3e7369cc1bbddc6f088897184a86ea0697a9b38df45ffe42901b5ce6d309d752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3e7369cc1bbddc6f088897184a86ea0697a9b38df45ffe42901b5ce6d309d752->leave($__internal_3e7369cc1bbddc6f088897184a86ea0697a9b38df45ffe42901b5ce6d309d752_prof);

        
        $__internal_0fd386356af82a7eea061fac426ae2c90b1c6568777a8ab0182d7774491993c4->leave($__internal_0fd386356af82a7eea061fac426ae2c90b1c6568777a8ab0182d7774491993c4_prof);

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
        return array (  173 => 34,  169 => 33,  165 => 32,  160 => 30,  156 => 29,  153 => 28,  144 => 27,  134 => 22,  125 => 21,  113 => 13,  108 => 12,  99 => 11,  88 => 7,  79 => 6,  68 => 36,  66 => 27,  63 => 26,  61 => 25,  57 => 23,  55 => 21,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
