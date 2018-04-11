<?php

/* ::security.html.twig */
class __TwigTemplate_a1cd3728697a78e68848cd3aa5a59eebe6d2d95b1a705f800b59410cec38893b extends Twig_Template
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
        $__internal_7121fd06bf4aae35c7bbffdcaf72b39991ad0531ac23f71b91a899a02c90ccc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7121fd06bf4aae35c7bbffdcaf72b39991ad0531ac23f71b91a899a02c90ccc8->enter($__internal_7121fd06bf4aae35c7bbffdcaf72b39991ad0531ac23f71b91a899a02c90ccc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::security.html.twig"));

        $__internal_68ee4ee1ec501484a7b58bcce6d18317cf57147589fcd9ed5da73248660dfc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ee4ee1ec501484a7b58bcce6d18317cf57147589fcd9ed5da73248660dfc20->enter($__internal_68ee4ee1ec501484a7b58bcce6d18317cf57147589fcd9ed5da73248660dfc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::security.html.twig"));

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
        
        $__internal_7121fd06bf4aae35c7bbffdcaf72b39991ad0531ac23f71b91a899a02c90ccc8->leave($__internal_7121fd06bf4aae35c7bbffdcaf72b39991ad0531ac23f71b91a899a02c90ccc8_prof);

        
        $__internal_68ee4ee1ec501484a7b58bcce6d18317cf57147589fcd9ed5da73248660dfc20->leave($__internal_68ee4ee1ec501484a7b58bcce6d18317cf57147589fcd9ed5da73248660dfc20_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3283eab48c7870bccd513938f2e10b7d85f1a390e0ecce5a8c112a539c943e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3283eab48c7870bccd513938f2e10b7d85f1a390e0ecce5a8c112a539c943e4d->enter($__internal_3283eab48c7870bccd513938f2e10b7d85f1a390e0ecce5a8c112a539c943e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d52675fa793554041ade8b22d8eab669795c71a057a256376de2296d38ccecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d52675fa793554041ade8b22d8eab669795c71a057a256376de2296d38ccecc->enter($__internal_4d52675fa793554041ade8b22d8eab669795c71a057a256376de2296d38ccecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                CRgourmetcoffee
            ";
        
        $__internal_4d52675fa793554041ade8b22d8eab669795c71a057a256376de2296d38ccecc->leave($__internal_4d52675fa793554041ade8b22d8eab669795c71a057a256376de2296d38ccecc_prof);

        
        $__internal_3283eab48c7870bccd513938f2e10b7d85f1a390e0ecce5a8c112a539c943e4d->leave($__internal_3283eab48c7870bccd513938f2e10b7d85f1a390e0ecce5a8c112a539c943e4d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb17550c8f22b375e583651d91e84b6ab89671bfde7cee812a156130d6106c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb17550c8f22b375e583651d91e84b6ab89671bfde7cee812a156130d6106c4c->enter($__internal_eb17550c8f22b375e583651d91e84b6ab89671bfde7cee812a156130d6106c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e9642364ac99b5dfb36949b4111faf4587452202ca119e1a9372a17a902d59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9642364ac99b5dfb36949b4111faf4587452202ca119e1a9372a17a902d59e->enter($__internal_3e9642364ac99b5dfb36949b4111faf4587452202ca119e1a9372a17a902d59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/web/public/css/crgourmetcoffee.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_3e9642364ac99b5dfb36949b4111faf4587452202ca119e1a9372a17a902d59e->leave($__internal_3e9642364ac99b5dfb36949b4111faf4587452202ca119e1a9372a17a902d59e_prof);

        
        $__internal_eb17550c8f22b375e583651d91e84b6ab89671bfde7cee812a156130d6106c4c->leave($__internal_eb17550c8f22b375e583651d91e84b6ab89671bfde7cee812a156130d6106c4c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_24558ca14fd3885acd39413fcc85c984c94a8637f323a7e47cc344f3ab246828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24558ca14fd3885acd39413fcc85c984c94a8637f323a7e47cc344f3ab246828->enter($__internal_24558ca14fd3885acd39413fcc85c984c94a8637f323a7e47cc344f3ab246828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e3891dfec8633a6096e4ec889afd8de1d67e3412f14d68c30b6beeef5b86d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3891dfec8633a6096e4ec889afd8de1d67e3412f14d68c30b6beeef5b86d1e->enter($__internal_0e3891dfec8633a6096e4ec889afd8de1d67e3412f14d68c30b6beeef5b86d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            ";
        
        $__internal_0e3891dfec8633a6096e4ec889afd8de1d67e3412f14d68c30b6beeef5b86d1e->leave($__internal_0e3891dfec8633a6096e4ec889afd8de1d67e3412f14d68c30b6beeef5b86d1e_prof);

        
        $__internal_24558ca14fd3885acd39413fcc85c984c94a8637f323a7e47cc344f3ab246828->leave($__internal_24558ca14fd3885acd39413fcc85c984c94a8637f323a7e47cc344f3ab246828_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3172db804987f5cc7c785303bfda97ba0531bd12c0700f85217e7d31fdb1270a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3172db804987f5cc7c785303bfda97ba0531bd12c0700f85217e7d31fdb1270a->enter($__internal_3172db804987f5cc7c785303bfda97ba0531bd12c0700f85217e7d31fdb1270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86cc1139226a61c9ce4bfe4a0401832f047bdf3e88bb0ddfc77745b26e579d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cc1139226a61c9ce4bfe4a0401832f047bdf3e88bb0ddfc77745b26e579d14->enter($__internal_86cc1139226a61c9ce4bfe4a0401832f047bdf3e88bb0ddfc77745b26e579d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_86cc1139226a61c9ce4bfe4a0401832f047bdf3e88bb0ddfc77745b26e579d14->leave($__internal_86cc1139226a61c9ce4bfe4a0401832f047bdf3e88bb0ddfc77745b26e579d14_prof);

        
        $__internal_3172db804987f5cc7c785303bfda97ba0531bd12c0700f85217e7d31fdb1270a->leave($__internal_3172db804987f5cc7c785303bfda97ba0531bd12c0700f85217e7d31fdb1270a_prof);

    }

    public function getTemplateName()
    {
        return "::security.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 24,  146 => 23,  141 => 22,  132 => 21,  122 => 19,  113 => 18,  101 => 13,  96 => 12,  87 => 11,  76 => 7,  67 => 6,  56 => 26,  54 => 21,  51 => 20,  49 => 18,  44 => 15,  42 => 11,  38 => 9,  36 => 6,  29 => 1,);
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
</html>", "::security.html.twig", "C:\\xampp\\htdocs\\crgc\\app/Resources\\views/security.html.twig");
    }
}
