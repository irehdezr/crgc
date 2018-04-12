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
        $__internal_8ab7789b0aac399e8365e4375f5be7ab236cba78e1118148da5915e435d1deca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab7789b0aac399e8365e4375f5be7ab236cba78e1118148da5915e435d1deca->enter($__internal_8ab7789b0aac399e8365e4375f5be7ab236cba78e1118148da5915e435d1deca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_ff1d92c541218dc0aabaa2f3d05aa1f1f6389b33842f8cad72bd5e257cbaaabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1d92c541218dc0aabaa2f3d05aa1f1f6389b33842f8cad72bd5e257cbaaabe->enter($__internal_ff1d92c541218dc0aabaa2f3d05aa1f1f6389b33842f8cad72bd5e257cbaaabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_8ab7789b0aac399e8365e4375f5be7ab236cba78e1118148da5915e435d1deca->leave($__internal_8ab7789b0aac399e8365e4375f5be7ab236cba78e1118148da5915e435d1deca_prof);

        
        $__internal_ff1d92c541218dc0aabaa2f3d05aa1f1f6389b33842f8cad72bd5e257cbaaabe->leave($__internal_ff1d92c541218dc0aabaa2f3d05aa1f1f6389b33842f8cad72bd5e257cbaaabe_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_86fc7f242c276f6db0050fd9b35e1a106bf2fbf76e22ea424642b63416e19afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fc7f242c276f6db0050fd9b35e1a106bf2fbf76e22ea424642b63416e19afb->enter($__internal_86fc7f242c276f6db0050fd9b35e1a106bf2fbf76e22ea424642b63416e19afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba1e47d99593ac3fbaecc0c1b024696ba85a1a27a627b52c668107026099db3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1e47d99593ac3fbaecc0c1b024696ba85a1a27a627b52c668107026099db3e->enter($__internal_ba1e47d99593ac3fbaecc0c1b024696ba85a1a27a627b52c668107026099db3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_ba1e47d99593ac3fbaecc0c1b024696ba85a1a27a627b52c668107026099db3e->leave($__internal_ba1e47d99593ac3fbaecc0c1b024696ba85a1a27a627b52c668107026099db3e_prof);

        
        $__internal_86fc7f242c276f6db0050fd9b35e1a106bf2fbf76e22ea424642b63416e19afb->leave($__internal_86fc7f242c276f6db0050fd9b35e1a106bf2fbf76e22ea424642b63416e19afb_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae22a60f8f74d6ff2534e240a75e4aa3d26fc198fcdbe9c9b1c51abc261fbd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae22a60f8f74d6ff2534e240a75e4aa3d26fc198fcdbe9c9b1c51abc261fbd58->enter($__internal_ae22a60f8f74d6ff2534e240a75e4aa3d26fc198fcdbe9c9b1c51abc261fbd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_09b2b500caf82325731e63f185bb9feb22152037666043a1a8c9e328c4a4b960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b2b500caf82325731e63f185bb9feb22152037666043a1a8c9e328c4a4b960->enter($__internal_09b2b500caf82325731e63f185bb9feb22152037666043a1a8c9e328c4a4b960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_09b2b500caf82325731e63f185bb9feb22152037666043a1a8c9e328c4a4b960->leave($__internal_09b2b500caf82325731e63f185bb9feb22152037666043a1a8c9e328c4a4b960_prof);

        
        $__internal_ae22a60f8f74d6ff2534e240a75e4aa3d26fc198fcdbe9c9b1c51abc261fbd58->leave($__internal_ae22a60f8f74d6ff2534e240a75e4aa3d26fc198fcdbe9c9b1c51abc261fbd58_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_1645a91e9b72d9e963241fdb0bae5456c7ac8b7bbe934e65993d14be18d953a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1645a91e9b72d9e963241fdb0bae5456c7ac8b7bbe934e65993d14be18d953a6->enter($__internal_1645a91e9b72d9e963241fdb0bae5456c7ac8b7bbe934e65993d14be18d953a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_694b60aa47ed0454afa3bcdba7ef41dc0ba76014e4aa817f6942007d459e46df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694b60aa47ed0454afa3bcdba7ef41dc0ba76014e4aa817f6942007d459e46df->enter($__internal_694b60aa47ed0454afa3bcdba7ef41dc0ba76014e4aa817f6942007d459e46df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_694b60aa47ed0454afa3bcdba7ef41dc0ba76014e4aa817f6942007d459e46df->leave($__internal_694b60aa47ed0454afa3bcdba7ef41dc0ba76014e4aa817f6942007d459e46df_prof);

        
        $__internal_1645a91e9b72d9e963241fdb0bae5456c7ac8b7bbe934e65993d14be18d953a6->leave($__internal_1645a91e9b72d9e963241fdb0bae5456c7ac8b7bbe934e65993d14be18d953a6_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0f0ab904270f938199b8ac09c75f2fc1be7a24e7061b373be538503c4324198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f0ab904270f938199b8ac09c75f2fc1be7a24e7061b373be538503c4324198->enter($__internal_f0f0ab904270f938199b8ac09c75f2fc1be7a24e7061b373be538503c4324198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bbeea5a0f1928a902a082e411e6e031bf0f467b2831be31b38e95f6942647558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbeea5a0f1928a902a082e411e6e031bf0f467b2831be31b38e95f6942647558->enter($__internal_bbeea5a0f1928a902a082e411e6e031bf0f467b2831be31b38e95f6942647558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bbeea5a0f1928a902a082e411e6e031bf0f467b2831be31b38e95f6942647558->leave($__internal_bbeea5a0f1928a902a082e411e6e031bf0f467b2831be31b38e95f6942647558_prof);

        
        $__internal_f0f0ab904270f938199b8ac09c75f2fc1be7a24e7061b373be538503c4324198->leave($__internal_f0f0ab904270f938199b8ac09c75f2fc1be7a24e7061b373be538503c4324198_prof);

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
