<?php

/* ::layout.html.twig */
class __TwigTemplate_e18bdfc49f74bd448f5189da5bd24f9b20351327fb10ed5ed4f1c472e679dab7 extends Twig_Template
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
        $__internal_2f0b1f9c29cb18433a8b7bfea3c3bd7f5f27b0299e126c048dbc50b20c57262b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0b1f9c29cb18433a8b7bfea3c3bd7f5f27b0299e126c048dbc50b20c57262b->enter($__internal_2f0b1f9c29cb18433a8b7bfea3c3bd7f5f27b0299e126c048dbc50b20c57262b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_1b43bd95626b2d50a9d164bc60c0b89b61fbb8ceed096aa7ad0c3fc27f1627e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b43bd95626b2d50a9d164bc60c0b89b61fbb8ceed096aa7ad0c3fc27f1627e4->enter($__internal_1b43bd95626b2d50a9d164bc60c0b89b61fbb8ceed096aa7ad0c3fc27f1627e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        $this->loadTemplate("footer.html.twig", "::layout.html.twig", 25)->display($context);
        // line 26
        echo "        </div>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>";
        
        $__internal_2f0b1f9c29cb18433a8b7bfea3c3bd7f5f27b0299e126c048dbc50b20c57262b->leave($__internal_2f0b1f9c29cb18433a8b7bfea3c3bd7f5f27b0299e126c048dbc50b20c57262b_prof);

        
        $__internal_1b43bd95626b2d50a9d164bc60c0b89b61fbb8ceed096aa7ad0c3fc27f1627e4->leave($__internal_1b43bd95626b2d50a9d164bc60c0b89b61fbb8ceed096aa7ad0c3fc27f1627e4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3caf58e356f52334a3b6c7afda981502cef8a33d0e4c00f09b4b9b721b32293e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3caf58e356f52334a3b6c7afda981502cef8a33d0e4c00f09b4b9b721b32293e->enter($__internal_3caf58e356f52334a3b6c7afda981502cef8a33d0e4c00f09b4b9b721b32293e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d8cfafc525cb8cab80eca0d042d9664811d114e735736f4b7bbbd8f7c5148ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8cfafc525cb8cab80eca0d042d9664811d114e735736f4b7bbbd8f7c5148ef->enter($__internal_2d8cfafc525cb8cab80eca0d042d9664811d114e735736f4b7bbbd8f7c5148ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_2d8cfafc525cb8cab80eca0d042d9664811d114e735736f4b7bbbd8f7c5148ef->leave($__internal_2d8cfafc525cb8cab80eca0d042d9664811d114e735736f4b7bbbd8f7c5148ef_prof);

        
        $__internal_3caf58e356f52334a3b6c7afda981502cef8a33d0e4c00f09b4b9b721b32293e->leave($__internal_3caf58e356f52334a3b6c7afda981502cef8a33d0e4c00f09b4b9b721b32293e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aacb8bca488e70a03d498b1e5b223a1c076b7a6ec47326266215e2b8cc4c0662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacb8bca488e70a03d498b1e5b223a1c076b7a6ec47326266215e2b8cc4c0662->enter($__internal_aacb8bca488e70a03d498b1e5b223a1c076b7a6ec47326266215e2b8cc4c0662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e4f69cb1315969ac1c0e448a5108555c36b82d6d8ad65c89cab7ba4c9a1b146c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f69cb1315969ac1c0e448a5108555c36b82d6d8ad65c89cab7ba4c9a1b146c->enter($__internal_e4f69cb1315969ac1c0e448a5108555c36b82d6d8ad65c89cab7ba4c9a1b146c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e4f69cb1315969ac1c0e448a5108555c36b82d6d8ad65c89cab7ba4c9a1b146c->leave($__internal_e4f69cb1315969ac1c0e448a5108555c36b82d6d8ad65c89cab7ba4c9a1b146c_prof);

        
        $__internal_aacb8bca488e70a03d498b1e5b223a1c076b7a6ec47326266215e2b8cc4c0662->leave($__internal_aacb8bca488e70a03d498b1e5b223a1c076b7a6ec47326266215e2b8cc4c0662_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8c4462bc50e34b403c571e5535d09e200266a061fd3da01482a593949296cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c4462bc50e34b403c571e5535d09e200266a061fd3da01482a593949296cd9->enter($__internal_f8c4462bc50e34b403c571e5535d09e200266a061fd3da01482a593949296cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff2f891e0a016b09ee71836d963fcf22fdc8564b87815893d7c1b49c2a178e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2f891e0a016b09ee71836d963fcf22fdc8564b87815893d7c1b49c2a178e90->enter($__internal_ff2f891e0a016b09ee71836d963fcf22fdc8564b87815893d7c1b49c2a178e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_ff2f891e0a016b09ee71836d963fcf22fdc8564b87815893d7c1b49c2a178e90->leave($__internal_ff2f891e0a016b09ee71836d963fcf22fdc8564b87815893d7c1b49c2a178e90_prof);

        
        $__internal_f8c4462bc50e34b403c571e5535d09e200266a061fd3da01482a593949296cd9->leave($__internal_f8c4462bc50e34b403c571e5535d09e200266a061fd3da01482a593949296cd9_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14ef1d6beabf01c7a665d2406db724fb6f9002342e0c48e5c1816a04e843bd1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ef1d6beabf01c7a665d2406db724fb6f9002342e0c48e5c1816a04e843bd1c->enter($__internal_14ef1d6beabf01c7a665d2406db724fb6f9002342e0c48e5c1816a04e843bd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_815e55e8596df9d7342b3cb3de49f288c701d75d6727bc5d2104e135c6033f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815e55e8596df9d7342b3cb3de49f288c701d75d6727bc5d2104e135c6033f78->enter($__internal_815e55e8596df9d7342b3cb3de49f288c701d75d6727bc5d2104e135c6033f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_815e55e8596df9d7342b3cb3de49f288c701d75d6727bc5d2104e135c6033f78->leave($__internal_815e55e8596df9d7342b3cb3de49f288c701d75d6727bc5d2104e135c6033f78_prof);

        
        $__internal_14ef1d6beabf01c7a665d2406db724fb6f9002342e0c48e5c1816a04e843bd1c->leave($__internal_14ef1d6beabf01c7a665d2406db724fb6f9002342e0c48e5c1816a04e843bd1c_prof);

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
</html>", "::layout.html.twig", "C:\\xampp\\htdocs\\app/Resources\\views/layout.html.twig");
    }
}