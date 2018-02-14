<?php

/* layout.html.twig */
class __TwigTemplate_224c0c911975e2efc303f079c804daced2df91e71744310adaf1df71ffc8fb53 extends Twig_Template
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
        $__internal_92f1b7b5fa1a39c5a795177b6ba0b43abbe1c4755df4fe5c72615040ad1c862c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f1b7b5fa1a39c5a795177b6ba0b43abbe1c4755df4fe5c72615040ad1c862c->enter($__internal_92f1b7b5fa1a39c5a795177b6ba0b43abbe1c4755df4fe5c72615040ad1c862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_064e450f6578e723c655951abe0c00629354b33a4772164579e31f52b0178509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064e450f6578e723c655951abe0c00629354b33a4772164579e31f52b0178509->enter($__internal_064e450f6578e723c655951abe0c00629354b33a4772164579e31f52b0178509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_92f1b7b5fa1a39c5a795177b6ba0b43abbe1c4755df4fe5c72615040ad1c862c->leave($__internal_92f1b7b5fa1a39c5a795177b6ba0b43abbe1c4755df4fe5c72615040ad1c862c_prof);

        
        $__internal_064e450f6578e723c655951abe0c00629354b33a4772164579e31f52b0178509->leave($__internal_064e450f6578e723c655951abe0c00629354b33a4772164579e31f52b0178509_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_49e3c7d468bfd9ed78dd8ef7eadbd82d2e4cc3b2ee5be03b4a0723bc5f38d81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e3c7d468bfd9ed78dd8ef7eadbd82d2e4cc3b2ee5be03b4a0723bc5f38d81a->enter($__internal_49e3c7d468bfd9ed78dd8ef7eadbd82d2e4cc3b2ee5be03b4a0723bc5f38d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa8b524e216095ef5a5a6cc47c873364ad94fb15d47af3a3dc1ce5eab16903d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8b524e216095ef5a5a6cc47c873364ad94fb15d47af3a3dc1ce5eab16903d3->enter($__internal_fa8b524e216095ef5a5a6cc47c873364ad94fb15d47af3a3dc1ce5eab16903d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_fa8b524e216095ef5a5a6cc47c873364ad94fb15d47af3a3dc1ce5eab16903d3->leave($__internal_fa8b524e216095ef5a5a6cc47c873364ad94fb15d47af3a3dc1ce5eab16903d3_prof);

        
        $__internal_49e3c7d468bfd9ed78dd8ef7eadbd82d2e4cc3b2ee5be03b4a0723bc5f38d81a->leave($__internal_49e3c7d468bfd9ed78dd8ef7eadbd82d2e4cc3b2ee5be03b4a0723bc5f38d81a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b11da549cc4ed98d1c728996bacc214a42f748f01a19b1d685f60775a09045b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11da549cc4ed98d1c728996bacc214a42f748f01a19b1d685f60775a09045b6->enter($__internal_b11da549cc4ed98d1c728996bacc214a42f748f01a19b1d685f60775a09045b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6edc80064af98005ca859865c5c2a97cbd0090ba0ec380069313d946a64b7234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edc80064af98005ca859865c5c2a97cbd0090ba0ec380069313d946a64b7234->enter($__internal_6edc80064af98005ca859865c5c2a97cbd0090ba0ec380069313d946a64b7234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_6edc80064af98005ca859865c5c2a97cbd0090ba0ec380069313d946a64b7234->leave($__internal_6edc80064af98005ca859865c5c2a97cbd0090ba0ec380069313d946a64b7234_prof);

        
        $__internal_b11da549cc4ed98d1c728996bacc214a42f748f01a19b1d685f60775a09045b6->leave($__internal_b11da549cc4ed98d1c728996bacc214a42f748f01a19b1d685f60775a09045b6_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7f18ebce93ba82b77997ecef681d3d1dfe0386c6b5442fcacfc14728f889278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f18ebce93ba82b77997ecef681d3d1dfe0386c6b5442fcacfc14728f889278->enter($__internal_e7f18ebce93ba82b77997ecef681d3d1dfe0386c6b5442fcacfc14728f889278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e97f75e0bedd27dec79a38f82d8ea291bd5f5a694c6fb8bacb41d3b7c2f8a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e97f75e0bedd27dec79a38f82d8ea291bd5f5a694c6fb8bacb41d3b7c2f8a1e->enter($__internal_8e97f75e0bedd27dec79a38f82d8ea291bd5f5a694c6fb8bacb41d3b7c2f8a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_8e97f75e0bedd27dec79a38f82d8ea291bd5f5a694c6fb8bacb41d3b7c2f8a1e->leave($__internal_8e97f75e0bedd27dec79a38f82d8ea291bd5f5a694c6fb8bacb41d3b7c2f8a1e_prof);

        
        $__internal_e7f18ebce93ba82b77997ecef681d3d1dfe0386c6b5442fcacfc14728f889278->leave($__internal_e7f18ebce93ba82b77997ecef681d3d1dfe0386c6b5442fcacfc14728f889278_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4493effd830d2870fcf56fe4880f4a571ed11ac2e08d8e8c1569b90e4fea2ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4493effd830d2870fcf56fe4880f4a571ed11ac2e08d8e8c1569b90e4fea2ea1->enter($__internal_4493effd830d2870fcf56fe4880f4a571ed11ac2e08d8e8c1569b90e4fea2ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3bfcf20b7eaecff729cd1e6952394ee481d8ebabe513dc68ae2b8e9a88bff9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bfcf20b7eaecff729cd1e6952394ee481d8ebabe513dc68ae2b8e9a88bff9b->enter($__internal_b3bfcf20b7eaecff729cd1e6952394ee481d8ebabe513dc68ae2b8e9a88bff9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b3bfcf20b7eaecff729cd1e6952394ee481d8ebabe513dc68ae2b8e9a88bff9b->leave($__internal_b3bfcf20b7eaecff729cd1e6952394ee481d8ebabe513dc68ae2b8e9a88bff9b_prof);

        
        $__internal_4493effd830d2870fcf56fe4880f4a571ed11ac2e08d8e8c1569b90e4fea2ea1->leave($__internal_4493effd830d2870fcf56fe4880f4a571ed11ac2e08d8e8c1569b90e4fea2ea1_prof);

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
        return array (  162 => 30,  158 => 29,  153 => 28,  144 => 27,  134 => 22,  125 => 21,  113 => 13,  108 => 12,  99 => 11,  88 => 7,  79 => 6,  68 => 32,  66 => 27,  63 => 26,  61 => 25,  57 => 23,  55 => 21,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
