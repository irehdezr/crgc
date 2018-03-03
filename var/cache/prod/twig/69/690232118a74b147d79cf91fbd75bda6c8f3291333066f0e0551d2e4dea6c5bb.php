<?php

/* layout.html.twig */
class __TwigTemplate_017bebfa97e654ca8dbbeeb642be5c10db8628b4d84d74f525aaeab7830254dd extends Twig_Template
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
        $__internal_b9450111db62721ae8fcdb3ebcf3bdd3d6c8eaf460da1e1b6a4039ee396e440b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9450111db62721ae8fcdb3ebcf3bdd3d6c8eaf460da1e1b6a4039ee396e440b->enter($__internal_b9450111db62721ae8fcdb3ebcf3bdd3d6c8eaf460da1e1b6a4039ee396e440b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 32
        echo "    </body>
</html>";
        
        $__internal_b9450111db62721ae8fcdb3ebcf3bdd3d6c8eaf460da1e1b6a4039ee396e440b->leave($__internal_b9450111db62721ae8fcdb3ebcf3bdd3d6c8eaf460da1e1b6a4039ee396e440b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f269c5cdf11e60a09cf6668fb3c7abffa79ccc8b247972854a5fce08c3df9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f269c5cdf11e60a09cf6668fb3c7abffa79ccc8b247972854a5fce08c3df9da->enter($__internal_3f269c5cdf11e60a09cf6668fb3c7abffa79ccc8b247972854a5fce08c3df9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_3f269c5cdf11e60a09cf6668fb3c7abffa79ccc8b247972854a5fce08c3df9da->leave($__internal_3f269c5cdf11e60a09cf6668fb3c7abffa79ccc8b247972854a5fce08c3df9da_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_130591c9691cc90d2584d1b6e0d4f07f4cba5c77e2d69aa7fdb1c39b2f58d512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130591c9691cc90d2584d1b6e0d4f07f4cba5c77e2d69aa7fdb1c39b2f58d512->enter($__internal_130591c9691cc90d2584d1b6e0d4f07f4cba5c77e2d69aa7fdb1c39b2f58d512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_130591c9691cc90d2584d1b6e0d4f07f4cba5c77e2d69aa7fdb1c39b2f58d512->leave($__internal_130591c9691cc90d2584d1b6e0d4f07f4cba5c77e2d69aa7fdb1c39b2f58d512_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a66b807debf9a1e5bf4e89c736530434288644f76ede3ccec5a0343c20b2f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a66b807debf9a1e5bf4e89c736530434288644f76ede3ccec5a0343c20b2f47->enter($__internal_4a66b807debf9a1e5bf4e89c736530434288644f76ede3ccec5a0343c20b2f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_4a66b807debf9a1e5bf4e89c736530434288644f76ede3ccec5a0343c20b2f47->leave($__internal_4a66b807debf9a1e5bf4e89c736530434288644f76ede3ccec5a0343c20b2f47_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2040aefa10f21119295e537eecb4e85889ec7c90f6081a8ce0834d5bd7125c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2040aefa10f21119295e537eecb4e85889ec7c90f6081a8ce0834d5bd7125c45->enter($__internal_2040aefa10f21119295e537eecb4e85889ec7c90f6081a8ce0834d5bd7125c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            <script src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_2040aefa10f21119295e537eecb4e85889ec7c90f6081a8ce0834d5bd7125c45->leave($__internal_2040aefa10f21119295e537eecb4e85889ec7c90f6081a8ce0834d5bd7125c45_prof);

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
            <script src= \"{{ asset('js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "layout.html.twig", "D:\\Carlos\\xampp\\htdocs\\crgc\\app\\Resources\\views\\layout.html.twig");
    }
}
