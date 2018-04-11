<?php

/* layout.html.twig */
class __TwigTemplate_f2b6473b4b69bfa66d88ba3bd73c558f15ea35c677a1c1d675f8352e9328afdb extends Twig_Template
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
        $__internal_a75e8c8070ad29a66b6ef983c9156284a2c57c26eb1b27a0413f024090032a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75e8c8070ad29a66b6ef983c9156284a2c57c26eb1b27a0413f024090032a97->enter($__internal_a75e8c8070ad29a66b6ef983c9156284a2c57c26eb1b27a0413f024090032a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_e0ae281d148457664c21e294a98b85915d6620fb84ec9f62c30d30831d172cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ae281d148457664c21e294a98b85915d6620fb84ec9f62c30d30831d172cd8->enter($__internal_e0ae281d148457664c21e294a98b85915d6620fb84ec9f62c30d30831d172cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 35
        echo "    </body>
</html>";
        
        $__internal_a75e8c8070ad29a66b6ef983c9156284a2c57c26eb1b27a0413f024090032a97->leave($__internal_a75e8c8070ad29a66b6ef983c9156284a2c57c26eb1b27a0413f024090032a97_prof);

        
        $__internal_e0ae281d148457664c21e294a98b85915d6620fb84ec9f62c30d30831d172cd8->leave($__internal_e0ae281d148457664c21e294a98b85915d6620fb84ec9f62c30d30831d172cd8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_25555beb47dcdf68c36a4a8dce8d86c2f1d644ea4af7b0241e9f13ff3a476a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25555beb47dcdf68c36a4a8dce8d86c2f1d644ea4af7b0241e9f13ff3a476a61->enter($__internal_25555beb47dcdf68c36a4a8dce8d86c2f1d644ea4af7b0241e9f13ff3a476a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6967d705e50f5badab2c07c5c696828b51a2f91e478cd820f25b67e1c5a1e868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6967d705e50f5badab2c07c5c696828b51a2f91e478cd820f25b67e1c5a1e868->enter($__internal_6967d705e50f5badab2c07c5c696828b51a2f91e478cd820f25b67e1c5a1e868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_6967d705e50f5badab2c07c5c696828b51a2f91e478cd820f25b67e1c5a1e868->leave($__internal_6967d705e50f5badab2c07c5c696828b51a2f91e478cd820f25b67e1c5a1e868_prof);

        
        $__internal_25555beb47dcdf68c36a4a8dce8d86c2f1d644ea4af7b0241e9f13ff3a476a61->leave($__internal_25555beb47dcdf68c36a4a8dce8d86c2f1d644ea4af7b0241e9f13ff3a476a61_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_019a6d7a62ad8c6ee569e8793daf838aa02376b17c56be2d01d003335d356c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019a6d7a62ad8c6ee569e8793daf838aa02376b17c56be2d01d003335d356c49->enter($__internal_019a6d7a62ad8c6ee569e8793daf838aa02376b17c56be2d01d003335d356c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0a35f750a333d45b1d9446d54894e01ddbfee37731454a90edb85f41952fec04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a35f750a333d45b1d9446d54894e01ddbfee37731454a90edb85f41952fec04->enter($__internal_0a35f750a333d45b1d9446d54894e01ddbfee37731454a90edb85f41952fec04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_0a35f750a333d45b1d9446d54894e01ddbfee37731454a90edb85f41952fec04->leave($__internal_0a35f750a333d45b1d9446d54894e01ddbfee37731454a90edb85f41952fec04_prof);

        
        $__internal_019a6d7a62ad8c6ee569e8793daf838aa02376b17c56be2d01d003335d356c49->leave($__internal_019a6d7a62ad8c6ee569e8793daf838aa02376b17c56be2d01d003335d356c49_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_745898d605c51536c7e6c90e18be0160f2f63d287413e269021dc5e6852a8936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745898d605c51536c7e6c90e18be0160f2f63d287413e269021dc5e6852a8936->enter($__internal_745898d605c51536c7e6c90e18be0160f2f63d287413e269021dc5e6852a8936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0873303ba0ba8ca2d5a36def54fdcfa8f748b0194368ec3654859d6c27997f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0873303ba0ba8ca2d5a36def54fdcfa8f748b0194368ec3654859d6c27997f2->enter($__internal_d0873303ba0ba8ca2d5a36def54fdcfa8f748b0194368ec3654859d6c27997f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_d0873303ba0ba8ca2d5a36def54fdcfa8f748b0194368ec3654859d6c27997f2->leave($__internal_d0873303ba0ba8ca2d5a36def54fdcfa8f748b0194368ec3654859d6c27997f2_prof);

        
        $__internal_745898d605c51536c7e6c90e18be0160f2f63d287413e269021dc5e6852a8936->leave($__internal_745898d605c51536c7e6c90e18be0160f2f63d287413e269021dc5e6852a8936_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05fe5abe934aff6c06a76bedb5efd5ef0f87a448d8b2382f780d00af6ec70f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05fe5abe934aff6c06a76bedb5efd5ef0f87a448d8b2382f780d00af6ec70f99->enter($__internal_05fe5abe934aff6c06a76bedb5efd5ef0f87a448d8b2382f780d00af6ec70f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc5092fb658acd548b261e7ad4ce1eb34f85e8e91ae82e2d6b41e29f86c08155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5092fb658acd548b261e7ad4ce1eb34f85e8e91ae82e2d6b41e29f86c08155->enter($__internal_dc5092fb658acd548b261e7ad4ce1eb34f85e8e91ae82e2d6b41e29f86c08155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t\t\t<script>
\t\t\t\tvar addToCartUrl = \"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_add_presentation_to_cart"), "js"), "html", null, true);
        echo "\";
\t\t\t</script>
            <script src= \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_dc5092fb658acd548b261e7ad4ce1eb34f85e8e91ae82e2d6b41e29f86c08155->leave($__internal_dc5092fb658acd548b261e7ad4ce1eb34f85e8e91ae82e2d6b41e29f86c08155_prof);

        
        $__internal_05fe5abe934aff6c06a76bedb5efd5ef0f87a448d8b2382f780d00af6ec70f99->leave($__internal_05fe5abe934aff6c06a76bedb5efd5ef0f87a448d8b2382f780d00af6ec70f99_prof);

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
        return array (  169 => 33,  165 => 32,  161 => 31,  156 => 29,  153 => 28,  144 => 27,  134 => 22,  125 => 21,  113 => 13,  108 => 12,  99 => 11,  88 => 7,  79 => 6,  68 => 35,  66 => 27,  63 => 26,  61 => 25,  57 => 23,  55 => 21,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
\t\t\t</script>
            <script src= \"{{ asset('js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\crgc\\app\\Resources\\views\\layout.html.twig");
    }
}
