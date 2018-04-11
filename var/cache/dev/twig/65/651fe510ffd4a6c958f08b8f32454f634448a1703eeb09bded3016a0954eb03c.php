<?php

/* ::layout.html.twig */
class __TwigTemplate_f9eb6d9840835c60b84976b24bb02b3e11d151821fccbda5807f87396a51cfcd extends Twig_Template
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
        $__internal_31f82e9e6042e6c8bedcb5db28d3510b99e913e04e27b2b9f4ea350d00fdc382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f82e9e6042e6c8bedcb5db28d3510b99e913e04e27b2b9f4ea350d00fdc382->enter($__internal_31f82e9e6042e6c8bedcb5db28d3510b99e913e04e27b2b9f4ea350d00fdc382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_e4f345e83fddd4c01db526914399b888c9b38ffd90d19547cec871cf2dc776a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f345e83fddd4c01db526914399b888c9b38ffd90d19547cec871cf2dc776a0->enter($__internal_e4f345e83fddd4c01db526914399b888c9b38ffd90d19547cec871cf2dc776a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        $this->loadTemplate("footer.html.twig", "::layout.html.twig", 25)->display($context);
        // line 26
        echo "        </footer>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>";
        
        $__internal_31f82e9e6042e6c8bedcb5db28d3510b99e913e04e27b2b9f4ea350d00fdc382->leave($__internal_31f82e9e6042e6c8bedcb5db28d3510b99e913e04e27b2b9f4ea350d00fdc382_prof);

        
        $__internal_e4f345e83fddd4c01db526914399b888c9b38ffd90d19547cec871cf2dc776a0->leave($__internal_e4f345e83fddd4c01db526914399b888c9b38ffd90d19547cec871cf2dc776a0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_44f643742acb32b792a3875b0fa67832a448b5ce24ed00a6ccb7b87d988ef1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f643742acb32b792a3875b0fa67832a448b5ce24ed00a6ccb7b87d988ef1e8->enter($__internal_44f643742acb32b792a3875b0fa67832a448b5ce24ed00a6ccb7b87d988ef1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a92c2fb4a376cab5c490aefbf18829cd0c9f57d12c4e3f69d59eda8345da5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a92c2fb4a376cab5c490aefbf18829cd0c9f57d12c4e3f69d59eda8345da5d8->enter($__internal_0a92c2fb4a376cab5c490aefbf18829cd0c9f57d12c4e3f69d59eda8345da5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_0a92c2fb4a376cab5c490aefbf18829cd0c9f57d12c4e3f69d59eda8345da5d8->leave($__internal_0a92c2fb4a376cab5c490aefbf18829cd0c9f57d12c4e3f69d59eda8345da5d8_prof);

        
        $__internal_44f643742acb32b792a3875b0fa67832a448b5ce24ed00a6ccb7b87d988ef1e8->leave($__internal_44f643742acb32b792a3875b0fa67832a448b5ce24ed00a6ccb7b87d988ef1e8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a778f9c1192e57b1f853acbbffe0e6e1ebed899e57c3331185b2cfd6dcc0f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a778f9c1192e57b1f853acbbffe0e6e1ebed899e57c3331185b2cfd6dcc0f1c->enter($__internal_9a778f9c1192e57b1f853acbbffe0e6e1ebed899e57c3331185b2cfd6dcc0f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06ddb87613543bb628511babc6784ae9cda2079c2c67a46c3d574c65ef023dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ddb87613543bb628511babc6784ae9cda2079c2c67a46c3d574c65ef023dd5->enter($__internal_06ddb87613543bb628511babc6784ae9cda2079c2c67a46c3d574c65ef023dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_06ddb87613543bb628511babc6784ae9cda2079c2c67a46c3d574c65ef023dd5->leave($__internal_06ddb87613543bb628511babc6784ae9cda2079c2c67a46c3d574c65ef023dd5_prof);

        
        $__internal_9a778f9c1192e57b1f853acbbffe0e6e1ebed899e57c3331185b2cfd6dcc0f1c->leave($__internal_9a778f9c1192e57b1f853acbbffe0e6e1ebed899e57c3331185b2cfd6dcc0f1c_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_9191f14aacdcb6ca43ae7051896c1ec73300b856187e3231947451704eb1253f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9191f14aacdcb6ca43ae7051896c1ec73300b856187e3231947451704eb1253f->enter($__internal_9191f14aacdcb6ca43ae7051896c1ec73300b856187e3231947451704eb1253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d830d48daa3c996c78509349724f254bdb1843d7a45c77bfb8ffeb44e2269f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d830d48daa3c996c78509349724f254bdb1843d7a45c77bfb8ffeb44e2269f9d->enter($__internal_d830d48daa3c996c78509349724f254bdb1843d7a45c77bfb8ffeb44e2269f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_d830d48daa3c996c78509349724f254bdb1843d7a45c77bfb8ffeb44e2269f9d->leave($__internal_d830d48daa3c996c78509349724f254bdb1843d7a45c77bfb8ffeb44e2269f9d_prof);

        
        $__internal_9191f14aacdcb6ca43ae7051896c1ec73300b856187e3231947451704eb1253f->leave($__internal_9191f14aacdcb6ca43ae7051896c1ec73300b856187e3231947451704eb1253f_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4c8c694f5ddaf314bfd8fc125f1c70af10a2bc05283fcffd58f0d6a848cac1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c8c694f5ddaf314bfd8fc125f1c70af10a2bc05283fcffd58f0d6a848cac1b->enter($__internal_b4c8c694f5ddaf314bfd8fc125f1c70af10a2bc05283fcffd58f0d6a848cac1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_485df820ea495896eb0f0d409564fdb39f1a3a8e018cbb565a9f4ab2c633544d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485df820ea495896eb0f0d409564fdb39f1a3a8e018cbb565a9f4ab2c633544d->enter($__internal_485df820ea495896eb0f0d409564fdb39f1a3a8e018cbb565a9f4ab2c633544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_485df820ea495896eb0f0d409564fdb39f1a3a8e018cbb565a9f4ab2c633544d->leave($__internal_485df820ea495896eb0f0d409564fdb39f1a3a8e018cbb565a9f4ab2c633544d_prof);

        
        $__internal_b4c8c694f5ddaf314bfd8fc125f1c70af10a2bc05283fcffd58f0d6a848cac1b->leave($__internal_b4c8c694f5ddaf314bfd8fc125f1c70af10a2bc05283fcffd58f0d6a848cac1b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
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
</html>", "::layout.html.twig", "C:\\xampp\\htdocs\\crgc\\app/Resources\\views/layout.html.twig");
    }
}
