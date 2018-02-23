<?php

/* security.html.twig */
class __TwigTemplate_d933935c9eaf898825fced433ce5a3275321483b71515cfdbfb5f77bb8106bc2 extends Twig_Template
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
        $__internal_68d10b07dd444e9f3c1db2e3bebd21917f95e473eea5a9173ea8125df04b1254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d10b07dd444e9f3c1db2e3bebd21917f95e473eea5a9173ea8125df04b1254->enter($__internal_68d10b07dd444e9f3c1db2e3bebd21917f95e473eea5a9173ea8125df04b1254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security.html.twig"));

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
        <div id=\"content\">
            ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>";
        
        $__internal_68d10b07dd444e9f3c1db2e3bebd21917f95e473eea5a9173ea8125df04b1254->leave($__internal_68d10b07dd444e9f3c1db2e3bebd21917f95e473eea5a9173ea8125df04b1254_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_14356d2dad07791212dca21749ac4d5366d5abfa63f8c45021ad4464bd5d219b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14356d2dad07791212dca21749ac4d5366d5abfa63f8c45021ad4464bd5d219b->enter($__internal_14356d2dad07791212dca21749ac4d5366d5abfa63f8c45021ad4464bd5d219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_14356d2dad07791212dca21749ac4d5366d5abfa63f8c45021ad4464bd5d219b->leave($__internal_14356d2dad07791212dca21749ac4d5366d5abfa63f8c45021ad4464bd5d219b_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_471f8a90ab8c6d8a76c089ab3d46e7da06169519132404cff6f2612927fd2064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471f8a90ab8c6d8a76c089ab3d46e7da06169519132404cff6f2612927fd2064->enter($__internal_471f8a90ab8c6d8a76c089ab3d46e7da06169519132404cff6f2612927fd2064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_471f8a90ab8c6d8a76c089ab3d46e7da06169519132404cff6f2612927fd2064->leave($__internal_471f8a90ab8c6d8a76c089ab3d46e7da06169519132404cff6f2612927fd2064_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_12a324875ce23326d7e6919be3ba5b7860633814364afa1dfbbc9f55b902fcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a324875ce23326d7e6919be3ba5b7860633814364afa1dfbbc9f55b902fcbc->enter($__internal_12a324875ce23326d7e6919be3ba5b7860633814364afa1dfbbc9f55b902fcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        
        $__internal_12a324875ce23326d7e6919be3ba5b7860633814364afa1dfbbc9f55b902fcbc->leave($__internal_12a324875ce23326d7e6919be3ba5b7860633814364afa1dfbbc9f55b902fcbc_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da1cb043253c7a62ac5588276fdd518f2fcc911298c6a1d560dcf9d8c6a34090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1cb043253c7a62ac5588276fdd518f2fcc911298c6a1d560dcf9d8c6a34090->enter($__internal_da1cb043253c7a62ac5588276fdd518f2fcc911298c6a1d560dcf9d8c6a34090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            <script src= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src= \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
            <script src= \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/js/crgourmetcoffee.js"), "html", null, true);
        echo "\"> </script>
       ";
        
        $__internal_da1cb043253c7a62ac5588276fdd518f2fcc911298c6a1d560dcf9d8c6a34090->leave($__internal_da1cb043253c7a62ac5588276fdd518f2fcc911298c6a1d560dcf9d8c6a34090_prof);

    }

    public function getTemplateName()
    {
        return "security.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  119 => 23,  114 => 22,  108 => 21,  101 => 19,  95 => 18,  86 => 13,  81 => 12,  75 => 11,  67 => 7,  61 => 6,  53 => 26,  51 => 21,  48 => 20,  46 => 18,  41 => 15,  39 => 11,  35 => 9,  33 => 6,  26 => 1,);
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
        <div id=\"content\">
            {% block body %}
            {% endblock %}
        </div>
        {% block javascripts %}
            <script src= \"{{ asset('/web/public/js/jquery-3.1.0.min.js') }}\"></script>
            <script src= \"{{ asset('/web/public/js/bootstrap.js') }}\"> </script>
            <script src= \"{{ asset('/web/public/js/crgourmetcoffee.js') }}\"> </script>
       {% endblock %}
    </body>
</html>", "security.html.twig", "/home/crgourme/public_html/app/Resources/views/security.html.twig");
    }
}
